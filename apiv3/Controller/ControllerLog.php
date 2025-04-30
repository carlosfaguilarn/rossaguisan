<?php
/**
 * Clase controlador del modelo Log
 */
namespace Acredito\Controller;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;  
use Acredito\Model\Log as Log;
use Acredito\General\Respuesta as Respuesta;

class ControllerLog{
    /**
     * Obtiene todos los logs
     */
    public function getLogs(Request $request, Response $response){
        return $response->withJson(Respuesta::createPositive(Log::all()));
    }
} 