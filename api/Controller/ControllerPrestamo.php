<?php
/**
 * Clase controlador del modelo Préstamo
 */
namespace Roan\Controller;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request; 
use \Slim\Psr7\Stream;
use Roan\Model\Log as Log;
use Roan\Model\Prestamo as Prestamo;
use Roan\Model\Cliente as Cliente;
use Roan\General\Respuesta as Respuesta;
  
class ControllerPrestamo{
    /**
     * Obtiene préstamos activos
     */
    public function getPrestamos(Request $request, Response $response, $args) { 
        $prestamo = new Prestamo; 
        $prestamos = $prestamo->GetPrestamos($args['SocioID']);
        return $response->withJson(Respuesta::createPositive($prestamos));
    }

    /**
     * Obtiene un préstamo
     */
    public function getPrestamo(Request $request, Response $response, $args) { 
        $prestamo = new Prestamo;
        $data = $prestamo->GetPrestamo($args['id']);
        
        return $response->withJson(Respuesta::createPositive($data));
    }

    /**
     * Elimina un préstamo
     */
    public function delPrestamo(Request $request, Response $response, $args) {
        $id = $args['id'];
        $user = $request->getAttribute('user');
        $prestamos = new Prestamo;
        $prestamo = $prestamos->GetPrestamo($id);

        if(!isset($prestamo)){
            return $response->withJson([
                "valida" => false,
                "mensaje" => "No se puede eliminar el préstamo porque no existe"
            ]);
        }

        if($prestamo->SALDO == $prestamo->IMPORTE){
            // No se han registrado abonos del cliente
            $log = new Log();
            $log->new->descripcion = "Se eliminó el préstamo de $prestamo->NOMBRE $prestamo->APELLIDO (ID: $prestamo->ID - $$prestamo->IMPORTE)";
            $log->new->usuario_id = $request->getAttribute('user');
            $log->save();

            return $response->withJson([
                "valida" => $prestamos->EliminarPrestamo($id),
                "mensaje" => "¡Préstamo eliminado correctamente!"
            ]);
        }else{
            // No se puede eliminar si hay al menos un abono
            return $response->withJson([
                "valida" => false,
                "mensaje" => "No se puede eliminar el préstamo porque hay al menos un abono registrado",
                "saldo" => $prestamo->SALDO,
                "importe" => $prestamo->IMPORTE,
                "prestamo" => $prestamo
            ]);
        }
    }

    /**
     * Finaliza un préstamo
     */
    public function finPrestamo(Request $request, Response $response, $args) {
        $id = $args['id'];
        $user = $request->getAttribute('user');
        $prestamos = new Prestamo; 
        $prestamo = $prestamos->GetPrestamo($id); 

        $mensaje = "";
        $valida = $prestamos->FinalizarPrestamo($id); 

        if(!isset($prestamo)){
            return $response->withJson([
                "valida" => false,
                "mensaje" => "No se puede finalizar el préstamo porque no existe"
            ]);
        }

        if($valida){
            $mensaje = "¡Préstamo finalzado correctamente!";
            $log = new Log();
            $log->new->descripcion = "Se finalizó el préstamo de $prestamo->NOMBRE $prestamo->APELLIDO ($$prestamo->IMPORTE)";
            $log->new->usuario_id  = $request->getAttribute('user');
            $log->save();
        }else{
            $mensaje = "Error al finalizar préstamo";
        }
 
        return $response->withJson([
            "valida" => $valida,
            "mensaje" => $mensaje
        ]);
    }

    /**
     * Obtiene los abonos de un préstamo 
     */
    public function getAbonosPrestamo(Request $request, Response $response, $args){
        $prestamo = new Prestamo;
        return $response->withJson([
            "abonos" => $prestamo->GetAbonosPrestamo($args['id'])
        ]);
    }

    /**
     * Registra un nuevo préstamo, retorna id del registro
     */
    public function newPrestamo(Request $request, Response $response){
        $data = $request->getParsedBody();
        $prestamos = new Prestamo;
        $clientes = new Cliente;

        $mensaje = "";
        $valida = false;
        $respuesta = $prestamos->RegistrarPrestamo($data); 
        
        if($respuesta != null){
            $mensaje = "Prestamo registrado correctamente";
            $valida = true;
            $log = new Log();
            if(isset($data["cliente_id"])){
                // Revisar si es cliente existente
                $cliente = $clientes->GetCliente($data["cliente_id"]);
                $log->new->descripcion = "Se registró un nuevo préstamo para $cliente->NOMBRE $cliente->APELLIDO, importe: $".$data["importe"];
            }else{
                // O si es cliente nuevo
                $log->new->descripcion = "Se registró un nuevo préstamo para ".$data['nombre']." ".$data['apellido'].", importe: $".$data['importe'];
            }
            $log->new->usuario_id = $request->getAttribute('user');
            $log->save();
        }else{
            $mensaje = "Error al registrar el préstamo";
        }
        
        return $response->withJson([
            "valida" => $valida,
            "mensaje" => $mensaje
        ]);
    }

    /**
     * Registra un nuevo abono
     */
    public function newAbono(Request $request, Response $response){
        $data = $request->getParsedBody();
        $prestamos = new Prestamo;
        $prestamo_id = $data['prestamo_id'];
        $mensaje = "";
        $valida = "";
        
        $resultado = $prestamos->RegistrarAbono($data);
        
        if(isset($resultado) && is_numeric($resultado)){
            $mensaje = "Abono registrado correctamente"; 
            // Revisar si el préstamo ha sido saldado
             $prestamo = $prestamos->GetPrestamo($prestamo_id); 
            if($prestamo->SALDO == 0){
                // Finalizar préstamo
                if($prestamos->FinalizarPrestamo($prestamo_id)){
                    $mensaje = "Abono registrado correctamente.\nEl préstamo ha sido saldado";
                }
            }
            $log = new Log();
            $log->new->descripcion = "Nuevo abono a $prestamo->NOMBRE $prestamo->APELLIDO de $".$data['abono'];
            $log->new->usuario_id = $request->getAttribute('user');
            $log->save();
            $valida = true;
        }else{
            $mensaje = "Error al registrar el abono";
            $valida = false;
        }
         
        return $response->withJson([
            "valida" => $valida,
            "mensaje" => $mensaje
        ]);
    }

    /**
     * Obtiene el recibo de abono en base64
     */
    public function getReciboAbonos(Request $request, Response $response, $args){        
        $prestamo_id = $args['id']; 
        $obj_archivo = new \Archivo;

        $content = $obj_archivo->GetReporteAbonosPrestamo($prestamo_id);
        
        if(!isset($content))
            return $response->withJson([
                "valida" => false,
                "mensaje" => "El préstamo $prestamo_id no existe"
            ]);

        $fileName = 'doc.pdf';

        //$response = $response->withType('application/pdf');
        $response = $response->withHeader('Content-Disposition', sprintf('attachment; filename="%s"', $fileName));
        $stream = fopen('php://memory', 'w+');
        fwrite($stream, $content);
        rewind($stream);

        return $response->withBody(new Stream($stream));
        //return $response->withJson(Respuesta::createPositive(new Stream($stream)));
    }

    /**
     * Obtiene los abonos que debe dar un cliente
     */
    public function getAbonosCliente(Request $request, Response $response, $args){
        $prestamo = new Prestamo;
        return $response->withJson([
            "abonos" => $prestamo->GetAbonosCliente($args['id'])
        ]);
    }

    /**
     * Obtiene el contrato de un préstamo en base64
     */
    public function getContratoPrestamo(Request $request, Response $response, $args){
        $prestamo_id = $args['id']; 
        $obj_archivo = new \Archivo;

        $content = $obj_archivo->GetContratoPrestamo($prestamo_id);
        $fileName = 'doc.pdf';

        //$response = $response->withType('application/pdf');
        $response = $response->withHeader('Content-Disposition', sprintf('attachment; filename="%s"', $fileName));
        $stream = fopen('php://memory', 'w+');
        fwrite($stream, $content);
        rewind($stream);

        return $response->withBody(new Stream($stream));
    }

    /**
     * Guarda INE de un contrato
    
    public function saveFilesContrato(Request $request, Response $response, $args){
        $prestamo_id = $args['id']; 
        $data = $request->getParsedBody();

        $prestamos = new Prestamo;
        $obj_archivo = new \Archivo;
        $clientes = new Cliente;

        $mensaje = "";
        $error = "";

        $respuesta = $prestamos->GuardarFotoPrestamo($prestamo_id, $data);
        $prestamo = $prestamos->GetPrestamo($prestamo_id);
        $cliente = $clientes->GetCliente($prestamo->CLIENTE_ID);
 
        if($respuesta){
            $mensaje = "Fotos guardadas correctamente!";
            $log = new Log();
            $log->new->descripcion = "Se creó contrato para $prestamo->NOMBRE $prestamo->APELLIDO del préstamo de $".$prestamo->IMPORTE;
            $log->new->usuario_id = $request->getAttribute('user');
            $log->save();
        }else{
            $mensaje = "Error al guardar fotos";
            $mensaje = $respuesta->error;
        }
        
        return $response->withJson([
            "valida" => $respuesta,
            "mensaje" => $mensaje
        ]); 
    } */

    /**
     * Guarda INE de un contrato
     */
    public function saveFilesContrato(Request $request, Response $response, $args){
        $prestamo_id = $args['id']; 
        $data = $request->getParsedBody();

        $prestamos = new Prestamo;
        $obj_archivo = new \Archivo;
        $clientes = new Cliente;

        $mensaje = "";
        $error = "";

        //$respuesta = $prestamos->GuardarFotoPrestamo($prestamo_id, $data);
        $prestamo = $prestamos->GetPrestamo($prestamo_id);
        $cliente = $clientes->GetCliente($prestamo->CLIENTE_ID);

        //************************ */
        echo "recibiendo imagenes";
        if ($data['FIRMA']) {
            $datos = base64_decode(
                preg_replace('/^[^,]*,/', '', $data['FIRMA'])
            );  
            file_put_contents("FIRMA.png", $datos); 
             
            die("fin");
        } else {
            die("la peticion no contiene un archivo");
        }
        //************************ */
 
        if(true){
            $mensaje = "Fotos guardadas correctamente!";
            $log = new Log();
            $log->new->descripcion = "Se creó contrato para $prestamo->NOMBRE $prestamo->APELLIDO del préstamo de $".$prestamo->IMPORTE;
            $log->new->usuario_id = $request->getAttribute('user');
            $log->save();
        }else{
            $mensaje = "Error al guardar fotos";
            $mensaje = $respuesta->error;
        }
        
        return $response->withJson([
            "valida" => $respuesta,
            "mensaje" => $mensaje
        ]); 
    } 
    
} 