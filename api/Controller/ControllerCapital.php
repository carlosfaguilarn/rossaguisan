<?php
/**
 * Clase controlador del modelo Capital
 */
namespace Roan\Controller;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request; 
use Roan\Model\Capital as Capital;
use Roan\General\Respuesta as Respuesta;
  
class ControllerCapital{
    public function getCapital(Request $request, Response $response) { 
        return $response->withJson(Respuesta::createPositive(Capital::all()));
    }
}