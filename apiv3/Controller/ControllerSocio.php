<?php
/**
 * Clase controlador del modelo Socio
 */
namespace Acredito\Controller;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;  
use Acredito\Model\Socio as Socio;
use Acredito\General\Respuesta as Respuesta;

class ControllerSocio{
    /**
     * Obtiene todos los Socios
     */
    public function getSocios(Request $request, Response $response){
        return $response->withJson(Respuesta::createPositive(Socio::all()));
    } 
} 