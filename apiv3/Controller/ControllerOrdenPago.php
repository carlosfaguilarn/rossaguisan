<?php
/**
 * Clase controlador del modelo Préstamo
 */
namespace Acredito\Controller;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use \Slim\Psr7\Stream;
use \DateTime;
use \Conekta\Conekta;

use Acredito\Model\Log as Log;
use Acredito\Model\Abono as Abono;
use Acredito\Model\Prestamo as Prestamo;
use Acredito\Model\Cliente as Cliente;
use Acredito\Model\Orden as Orden;
use Acredito\General\Respuesta as Respuesta;

// *** ApiKey Production *** //
//Conekta::setApiKey("key_1E2IppLNrVtwPYzhVYhxxyJ"); // Acredito
//Conekta::setApiKey("key_52HQzAVL9o1HWsfL7XAu25c"); // Rosario Aguilar Santos

// *** ApiKey Debug *** //
//Conekta::setApiKey("key_qefx7DHUZj3bKfZSgSdCrsq");
Conekta::setApiKey("key_veJpw7v4U3MSRALS92ziASO"); // Rosario Aguilar Santos

Conekta::setApiVersion("2.0.0");

class ControllerOrdenPago{
    /**
     * Obtiene abonos de un préstamo
     */

    public function create(Request $request, Response $response) {
        $body = $request->getParsedBody();
        $cliente = new Cliente();
        $prestamo = new Prestamo();
        $ordenes = new Orden();
        $ordenReturn = new Orden();

        $conektaResponse = "";

        try{
            // Cliente al que se le generara la orden
            $dtoCliente = $cliente->GetCliente($body['cliente_id']);
            if(!$dtoCliente){
              return $response->withJson(Respuesta::createNegative("No se encontro el cliente {$body['cliente_id']}"));
            }

            // Prestamo al que se le generara la orden
            $dtoPrestamo = $prestamo->GetPrestamo($body['prestamo_id']);
            if(!$dtoPrestamo){
              return $response->withJson(Respuesta::createNegative("No se encontro el prestamo {$body['prestamo_id']}"));
            }

            $ordenesPendientes = $ordenes->GetOrdenPendienteByCliente($body['cliente_id']);
            if(count($ordenesPendientes) > 0){
              return $response->withJson(Respuesta::createNegative(
                "Ya existe una orden de pago pendiente para este préstamo",
                $ordenesPendientes[0]
              ));
            }

            $thirty_days_from_now = (new DateTime())->modify('+1 days')->getTimestamp();
            $objConektaResponse = \Conekta\Order::create(
              [
                "line_items" => [
                  [
                    "name" => "Abono",
                    "unit_price" => $body['cantidad'] * 100,
                    "quantity" => 1
                  ]
                ],
                "currency" => "MXN",
                "customer_info" => [
                  "name" => "$dtoCliente->nombre $cliente->apellido",
                  "email" => "carlos@gmail.com",
                  "phone" => "+5216681110599"
                ],
                "shipping_contact" => [
                  "address" => [
                    "street1" => "Calle $dtoCliente->direccion",
                    "postal_code" => "81294",
                    "country" => "MX"
                  ]
                ],
                "charges" => [
                  [
                    "payment_method" => [
                      "type" => "oxxo_cash",
                      "expires_at" => $thirty_days_from_now
                    ]
                  ]
                ]
              ]
            );

            // Convertir respuesta de conekta a JSON
            $conektaResponse = json_decode($objConektaResponse);

            if($conektaResponse){
                // convertir timestamp a datetime
                $created_at = new DateTime("@$conektaResponse->created_at");
                $updated_at = new DateTime("@$conektaResponse->updated_at");
                $expires_at = new DateTime("@{$conektaResponse->charges[0]->payment_method->expires_at}");

                $orden = new Orden();
                $orden->order_id = $conektaResponse->charges[0]->order_id;
                $orden->referencia = $conektaResponse->charges[0]->payment_method->reference ?? "NULL_REFERENCE";
                $orden->created_at = $created_at;
                $orden->updated_at = $updated_at;
                $orden->expires_at = $expires_at;
                $orden->status = $conektaResponse->payment_status;
                $orden->cliente_id = $body['cliente_id'];
                $orden->prestamo_id = $body['prestamo_id'];
                $orden->cantidad = $body['cantidad'];
                $orden->barcode_url = $conektaResponse->charges[0]->payment_method->barcode_url;

                if($orden->save()){
                  $ordenReturn = $orden;
                  $orden->created_at = "";
                  $orden->updated_at = "";
                  $orden->expires_at = "";
                  $orden->paid_at = "";

                  return $response->withJson(Respuesta::createPositive($orden));

                }
            }
        } catch (\Conekta\ParameterValidationError $error){
            echo $error->getMessage();
        } catch (\Conekta\Handler $error){
            echo $error->getMessage();
        }

        return $response->withJson(Respuesta::createPositive($orden));
    }

    /**
     * Obtiene una orden por su id
     */
    public function getOrden(Request $request, Response $response, $args) {
        $ordenes = new Orden();
        return $response->withJson(
            Respuesta::createPositive($ordenes->GetOrden($args['id']))
        );
    }

    /**
     * Obtiene una orden por su id
     */
    public function getOrdenPendienteByCliente(Request $request, Response $response, $args) {
        $ordenes = new Orden();
        $result = $ordenes->GetOrdenPendienteByCliente($args['id']);

        return $response->withJson(
            Respuesta::createPositive($result)
        );
    }

    public function paid(Request $request, Response $response) {
        //$body = json_decode($request->getParsedBody());
        $body = $request->getParsedBody();
        $ordenes = new Orden();
        $result = "";
        try{
          // Guardar respuesta en json
          $json = json_encode($body);

          //write json to file
          $name = $body['created_at'] ?? "null-";
          $name .= ".json";
          file_put_contents($name, $json);

          // Buscar la orden en la base de datos
          $order_id = $body['data']['object']['order_id'];
          $orden = $ordenes->GetByOrderId($order_id);
          if(!$orden){
            return $response->withJson(Respuesta::createNegative("No se encontro la orden {$order_id}"));
          }

          // Actualizar el campo status y updated_at
          $paid_at = new DateTime("@{$body['data']['object']['paid_at']}");
          $orden->status = $body['data']['object']['status'];
          $orden->updated_at = $paid_at;
          $orden->paid_at = $paid_at;

          if($orden->save()){
            return $response->withJson(Respuesta::createPositive([
              "orden_id" => $orden->id]
            ));
          }else{
            return $response->withJson(Respuesta::createNegative("No se actualizo el pago"));
          }
        } catch(Exception $error){
          return $response->withJson(Respuesta::createNegative($error));
        }
    }
}
