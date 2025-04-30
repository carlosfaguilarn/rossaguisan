<?php
/**
 * Clase controlador del modelo Préstamo
 */
namespace Acredito\Controller;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request; 
use \Slim\Psr7\Stream;
use Acredito\Model\Log as Log;
use Acredito\Model\Abono as Abono;
use Acredito\Model\Prestamo as Prestamo;
use Acredito\Model\Cliente as Cliente;
use Acredito\General\Respuesta as Respuesta;
  
class ControllerAbono{
    /**
     * Obtiene abonos de un préstamo
     */
    public function getAbonosPrestamo(Request $request, Response $response) { 
        $abono = new Abono;
        $params = $request->getQueryParams();
        $abonos = $abono->GetAbonosPrestamo($params['PrestamoID']);
        return $response->withJson(Respuesta::createPositive($abonos));
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

        $abono = new Abono;
        $resultado = $abono->RegistrarAbono($data); 
        
        if(isset($resultado) && $resultado > 0){
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
            $log->descripcion = "Nuevo abono a $prestamo->NOMBRE $prestamo->APELLIDO de $".$data['abono'];
            $log->usuario_id = $request->getAttribute('user');
            $log->save();
            $valida = true;
        }else{
            $mensaje = "Error al registrar el abono: $resultado";
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

        $fileEncoded = new Stream($stream);
        return $response->withBody($fileEncoded); 
    }
} 