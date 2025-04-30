<?php
/**
 * Clase controlador del modelo Préstamo
 */
namespace Roan\Controller;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request; 
use \Slim\Psr7\Stream;
use Roan\Model\Cliente as Cliente;
use Roan\General\Respuesta as Respuesta;
  
class ControllerCliente{
    /**
     * Obtiene clientes
     */
    public function getClientes(Request $request, Response $response) { 
        return $response->withJson(Respuesta::createPositive(Cliente::all()));
    }

    /**
     * Obtiene un cliente específico
     */
    public function getCliente(Request $request, Response $response, $args) { 
        return $response->withJson(Respuesta::createPositive(Cliente::find($args['id'])));
    }

    /**
     * Registrar cliente
     */
    public function registrarCliente(Request $request, Response $response) { 
        $params = $request->getParsedBody();
        $cliente = new Cliente;
        $cliente->nombre = $params['nombre'];
        $cliente->apellido = $params['apellido'];
        $cliente->direccion = $params['direccion'];
        $cliente->telefono = $params['telefono'];
        
        if($cliente->save()){
            return $response->withJson(Respuesta::createPositive());
        }else{
            return $response->withJson(Respuesta::createNegative("Error al crear el cliente"));
        }
    }
} 