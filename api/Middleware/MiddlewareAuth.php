<?php
namespace Roan\Middleware;
use Slim\Psr7\Response as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Server\RequestHandlerInterface as RequestHandler;
use Slim\Routing\RouteContext;

class MiddlewareAuth {
    /**
     * Token de autorización
     */
    protected $token = '';

    public function __invoke(Request $request, RequestHandler $handler){ 
        $response = new Response();

        // Si no hay token
        if (!$request->hasHeader('Authorization')) {  
            $response->getBody()->write(json_encode([
                "valida" => false,
                "mensaje" => 'Proporciona token para continuar'
            ]));

            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(400);

        }

        $this->token = $request->getHeader('Authorization')[0];
  
        // Obtener id del usuario 
        $data_token = \Auth::GetData($this->token); 

        if($data_token == null){
            $response->getBody()->write(json_encode([
                "valida" => false,
                "mensaje" => 'TOKEN_EXPIRED'
            ]));  
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(401);
        } 
        
        $request = $request->withAttribute('user', implode($data_token));
              
        return $handler->handle($request);
    }
}