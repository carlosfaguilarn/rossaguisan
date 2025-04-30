<?php
/**
 * Clase controlador del modelo Usuario
 */
namespace Roan\Controller;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;  
use Roan\Model\Usuario as Usuario;
use Roan\Model\Log as Log;
use Roan\General\Respuesta as Respuesta;
use Roan\Model\Socio as Socio;

class ControllerUsuario{
    /**
     * Méteodo login 
     */
    public function login(Request $request, Response $response) {
        $data = $request->getParsedBody();

        $usuario = Usuario::where([
            'usuario' => $data['usuario'],
            'password'=> $data['password']
        ])->first();

        if(isset($usuario)){
            /** Guardar log del login */
            $log = new Log();
            $log->descripcion = "$usuario->nombre $usuario->apellido inició sesión";
            $log->usuario_id = $usuario->id;
            $log->save();

            return $response->withJson(
                Respuesta::createPositive([
                    "token" => \Auth::SignIn([$usuario->id]),
                    "nombre" => "$usuario->nombre $usuario->apellido",
                    "usuario" => $usuario->usuario,
                    "foto" => $usuario->foto 
                ])
            ); 
        }else{
            return $response->withJson(Respuesta::createNegative("Usuario o contraseña incorrecta"));
        }
    }

    /**
     * Obtiene todos los usuarios
     */
    public function getUsers(Request $request, Response $response){
        return $response->withJson(Respuesta::createPositive(Usuario::all()));
    }

    public function registrarUsuario(Request $request, Response $response){
        $data = $request->getParsedBody();
        $user = new Usuario();
        $user->usuario = $data["usuario"];
        $user->nombre = $data["nombre"];
        $user->apellido = $data["apellido"];
        $user->foto = $data["foto"];
        
        if($user->save()){
            return $response->withJson(Respuesta::createPositive());
        }else{
            return $response->withJson(Respuesta::createNegative());
        }
    }
} 