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
        $customer = \Conekta\Customer::create(
          array(
              'name'  => "fulanito",
              'email' => "fulanito@test.com",
              'phone' => "+5218181818181",
              'payment_sources' => array(
                  array(
                    'type' => "oxxo_recurrent"
                  )
              )
          )
        );
        //var_dump(json_encode($customer));
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
     * Obtiene abonos de un préstamo
     */
    public function createold(Request $request, Response $response) {
        $body = $request->getParsedBody();
        $cliente = new Cliente();
        $prestamo = new Prestamo();
        $ordenRecurrente = new OrdenRecurrente();
        $ordenReturn = new OrdenRecurrente();

        $conektaResponse = "";

        try{
            // Cliente al que se le generara la orden
            $dtoCliente = $cliente->GetCliente($body['cliente_id']);
            if(!$dtoCliente){
              return $response->withJson(Respuesta::createNegative("No se encontro el cliente {$body['cliente_id']}"));
            }
            $clienteNombre = "{$dtoCliente['nombre']} {$dtoCliente['apellido']}";

            $customer = \Conekta\Customer::create(
              array(
                  'name'  => "nombre prueba",
                  'email' => "rosario@acredito.com",
                  'phone' => "+5216681110599",
                  'payment_sources' => array(
                      array(
                        'type' => "oxxo_recurrent"
                      )
                  )
              )
            );

            $conektaResponse = json_decode($customer);

            //write json to file
            file_put_contents("orden_recurrente_{$conektaResponse->payment_sources[0]->created_at}.json", $conektaResponse);

            if(!$conektaResponse){
              return "Error al mandar solicitud a conekta";
            }

            $orden = new OrdenRecurrente();
            // convertir timestamp a datetime
            $created_at = new DateTime("@{$conektaResponse->payment_sources[0]->created_at}");
            $expires_at = new DateTime("@{$conektaResponse->payment_sources[0]->expires_at}");

            // Guardar respuesta en json
            $json = json_encode($conektaResponse);

            $orden->order_id = $conektaResponse->id;
            $orden->referencia = $conektaResponse->payment_sources[0]->reference ?? "NULL_REFERENCE";
            $orden->barcode = $conektaResponse->payment_sources[0]->barcode;
            $orden->barcode_url = $conektaResponse->payment_sources[0]->barcode_url;
            $orden->parent_id = $conektaResponse->payment_sources[0]->parent_id;
            $orden->created_at = $created_at;
            $orden->expires_at = $expires_at;
            //$orden->updated_at = $updated_at;
            $orden->type = $conektaResponse->payment_sources[0]->type;
            $orden->custom_reference = $conektaResponse->custom_reference;
            $orden->payment_id = $body['cliente_id'];
            $orden->cliente_id = $conektaResponse->payment_sources[0]->id;

            if($orden->save()){
              $ordenReturn = $orden;
              $ordenReturn->created_at = "";
              $ordenReturn->expires_at = "";

              return $response->withJson(Respuesta::createPositive($ordenReturn));
            }

        } catch (Exception $error){ $response->withJson(Respuesta::createNegative("ERROR")); }

        // } catch (\Conekta\ProcessingError $error){
        //   $response->withJson(Respuesta::createNegative($error->getMessage()));
        // } catch (\Conekta\ParameterValidationError $error){
        //   $response->withJson(Respuesta::createNegative($error->getMessage()));
        // } catch (\Conekta\Handler $error){
        //   $response->withJson(Respuesta::createNegative($error->getMessage()));
        // } catch (Exception $error){
        //   $response->withJson(Respuesta::createNegative("ERROR"));
        // }

        //$response->withJson(Respuesta::createNegative("ERROR"));
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
            // Cliente al que se le generara la orden
            /* $dtoCliente = $cliente->GetCliente($body['cliente_id']);
            if(!$dtoCliente){
              return $response->withJson(Respuesta::createNegative("No se encontro el cliente {$body['cliente_id']}"));
            }
            $clienteNombre = "{$dtoCliente['nombre']} {$dtoCliente['apellido']}"; */
 
            /* array(
                  'name'  => $clienteNombre,
                  'email' => "rosario@acredito.com",
                  'phone' => $dtoCliente['telefono'] != null && $dtoCliente['telefono'] != ""
                    ? "+521{$dtoCliente['telefono']}"
                    : "+5216681110599",
                  //'phone' => "+5216682229752",
                  'payment_sources' => array(
                      array(
                        'type' => "cash_recurrent"
                      )
                  )
              ) */
            $customer = \Conekta\Customer::create(            
              [
                'name'  => "Maria Cebreros Miranda Dos",
                'email' => "elicebmi35@gmail.com",
                'phone' => "+5216682323756",
                'payment_method' => [
                  'type' => "cash_recurrent"
                ]
              ]
            );
            $conektaResponse = json_decode($customer);

            // Guardar respuesta en json
            $json = json_encode($conektaResponse);

            //write json to file
            file_put_contents("create_customer.json", $json);

            $orden = new OrdenRecurrente();
            // convertir timestamp a datetime
            $created_at = new DateTime("@{$conektaResponse->payment_sources[0]->created_at}");
            $expires_at = new DateTime("@{$conektaResponse->payment_sources[0]->expires_at}");

            $orden->order_id = $conektaResponse->id;
            $orden->referencia = $conektaResponse->payment_sources[0]->reference ?? "NULL_REFERENCE";
            $orden->barcode = $conektaResponse->payment_sources[0]->barcode;
            $orden->barcode_url = $conektaResponse->payment_sources[0]->barcode_url;
            $orden->parent_id = $conektaResponse->payment_sources[0]->parent_id;
            //$orden->created_at = $created_at;
            $orden->expires_at = $expires_at;
            //$orden->updated_at = $updated_at;
            $orden->type = $conektaResponse->payment_sources[0]->type;
            $orden->custom_reference = $conektaResponse->custom_reference;
            $orden->payment_id = $body['cliente_id'];
            $orden->cliente_id = $conektaResponse->payment_sources[0]->id;

            if($orden->save()){
              $ordenReturn = $orden;
              $ordenReturn->created_at = "";
              $ordenReturn->expires_at = "";

              return $response->withJson(Respuesta::createPositive($ordenReturn));

            }

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
