<?php
/**
 * Clase controlador del modelo Préstamo
 */
namespace Roan\Controller;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request; 
use \Slim\Psr7\Stream;
use Roan\Model\Log as Log;
use Roan\Model\Abono as Abono;
use Roan\Model\Prestamo as Prestamo;
use Roan\Model\Cliente as Cliente;
use Roan\General\Respuesta as Respuesta;
  
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
     * Crea un nuevo registro de abono
     */
    public function newAbono(Request $request, Response $response) { 
        $abono = new Abono;
        $params = $request->getParsedBody();
        $nuevo = $abono->RegistrarAbono($params);

        return $response->withJson(Respuesta::createPositive($nuevo));
    }
} 