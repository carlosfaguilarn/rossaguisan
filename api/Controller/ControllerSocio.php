<?php
/**
 * Clase controlador del modelo Socio
 */
namespace Roan\Controller;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;  
use Roan\Model\Socio as Socio;
use Roan\General\Respuesta as Respuesta;

class ControllerSocio{
    /**
     * Obtiene todos los Socios
     */
    public function getSocios(Request $request, Response $response){
        return $response->withJson(Respuesta::createPositive(Socio::all()));
    } 
} 