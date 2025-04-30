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
use Acredito\Model\OrdenRecurrente as OrdenRecurrente;
use Acredito\General\Respuesta as Respuesta;

// *** ApiKey Production *** //
//Conekta::setApiKey("key_1E2IppLNrVtwPYzhVYhxxyJ"); // Acredito
//Conekta::setApiKey("key_52HQzAVL9o1HWsfL7XAu25c"); // Rosario Aguilar Santos

// *** ApiKey Debug *** //
//Conekta::setApiKey("key_qefx7DHUZj3bKfZSgSdCrsq"); // Acredito
//Conekta::setApiKey("key_veJpw7v4U3MSRALS92ziASO"); // Rosario Aguilar Santos
//key_mNDTkV0if2l0zlROmBU2WEp
//key_FDgdjVhIp2TDeH2QyZ8P8HP

Conekta::setApiKey("key_r7TogzczB4nXNNE7k6tVPz1"); // Rosario Aguilar Santos
// key_r7TogzczB4nXNNE7k6tVPz1 -> llave privada "servidor acredito"


Conekta::setApiVersion("2.0.0");

class ControllerOrdenPagoRecurrente{

    public function create(Request $request, Response $response) {
      try{
        $thirty_days_from_now = (new DateTime())->modify('+365 days')->getTimestamp();

        $order = \Conekta\Order::create(
          [
            "line_items" => [
              [
                "name" => "Abono",
                "unit_price" => 700 * 100, // precio en centavos
                "quantity" => 1
              ]
            ],
            "currency" => "MXN",
            "customer_info" => [
              "name" => "Jhon Constantine",
              "email" => "carlosf.aguilarn@gmail.com",
              "phone" => "+5216681110599"
            ], 
            "charges" => [
              [
                "payment_method" => [
                  "type" => "oxxo_cash",
                  "expires_at" => $thirty_days_from_now
                ]
              ]
            ],
            "metadata" => [
              "reference" => "12987324097",
              "more_info" => "lalalalala"
            ]
          ]
        );
 
        return $response->withJson(Respuesta::createPositive(json_decode($order))); 
      } catch (\Conekta\ProcessingError $error){
        return $response->withJson(Respuesta::createNegative($error->getMessage()));
      } catch (\Conekta\ParameterValidationError $error){
        return $response->withJson(Respuesta::createNegative($error));
      } catch (\Conekta\Handler $error){
        return $response->withJson(Respuesta::createNegative(json_encode($error->getMessage())));
      }

      return $response->withJson(Respuesta::createNegative("Error desconocido"));
    }
 

    /**
     * Crear orden de pago recurrente
     */

    public function createCustomer(Request $request, Response $response) {
        $body = $request->getParsedBody();
        $cliente = new Cliente();
        $prestamo = new Prestamo();
        $ordenRecurrente = new OrdenRecurrente();
        $ordenReturn = new OrdenRecurrente();

        $conektaResponse = "";

        try{ 
            $customer = \Conekta\Customer::create(
              array(
                "name" => "Fulanito",
                "email" => "fulanito@test.com",
                "phone" => "+5218181818181",
                "payment_method" => array(
                    "type" => "oxxo_recurrent"
                )
              )
            );
             
            return $response->withJson(Respuesta::createPositive(json_encode($customer)));                   
        } catch (\Conekta\ProcessingError $error){ 
          return $response->withJson(Respuesta::createNegative("ProcessingError: ".$error->getMessage(), json_encode($error)));
        } catch (\Conekta\ParameterValidationError $error){
          return $response->withJson(Respuesta::createNegative("ParameterValidationError: ".$error->getMessage(), json_encode($error)));
        } catch (\Conekta\Handler $error){
          return $response->withJson(Respuesta::createNegative("Handler: ".$error->getMessage(), json_encode($error)));
        }

        return $response->withJson(Respuesta::createNegative("desconocido"));
    }

    public function paid(Request $request, Response $response) {
        //$body = json_decode($request->getParsedBody());
        $body = $request->getParsedBody();
        $ordenRecurrente = new OrdenRecurrente();

        $result = "";
        try{
          // Guardar respuesta en json
          $json = json_encode($body);

          //write json to file
          $name = $body['created_at'] ?? "null-";
          $name .= ".json";

          file_put_contents($name, $json);

          /*$response->withJson([
            "payable" => true,
            "min_amount" => 10000,
            "max_amount" => 100000
          ]);*/
          $response->withJson([
            "payable" => true,
          ]);

        }catch(Exception $e){
          // Guardar respuesta en json
          $json = json_encode($e);

          //write json to file
          file_put_contents("orden_recurrente_paid_error.json", $json);
          $response->withJson([
            "payable" => true,
          ]);
        }
    }

    public function attempt(Request $request, Response $response) {
        //$body = json_decode($request->getParsedBody());
        $body = $request->getParsedBody();
        $ordenRecurrente = new OrdenRecurrente();

        $result = "";
        try{
          // Guardar respuesta en json
          $json = json_encode($body);

          //write json to file
          file_put_contents("orden_recurrente_attempt.json", $json);

          $response->withJson([
            "payable" => true
          ]);


        }catch(Exception $e){
          // Guardar respuesta en json
          $json = json_encode($e);

          //write json to file
          file_put_contents("orden_recurrente_attempt_error.json", $json);
        }
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
 }
