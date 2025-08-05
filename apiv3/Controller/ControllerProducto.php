<?php
/**
 * Clase controlador del modelo Préstamo
 */
namespace Acredito\Controller;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request; 
use \Slim\Psr7\Stream;
use Acredito\Model\Producto as Producto;
use Acredito\General\Respuesta as Respuesta;
  
class ControllerProducto{
    /**
     * Obtiene un Producto específico
     */
    public function getProducto(Request $request, Response $response, $args) { 
        $producto = Producto::find($args['id']);

        return $response->withJson(
            Respuesta::createPositive($producto)
        );
    }

    /**
     * Obtiene Productos
     */
    public function getProductos(Request $request, Response $response) { 
        return $response->withJson(Respuesta::createPositive(Producto::all()));
    }

    /**
     * Registrar Producto
     */
    public function registrarProducto(Request $request, Response $response) { 
        $params = $request->getParsedBody();

        $producto = new Producto; 
        $producto->descripcion = $params['descripcion'];
        $producto->costo = $params['costo'];
        $producto->precio = $params['precio'];
        $producto->tipo = $params['tipo'];
        $producto->activo = true;
         
        if($producto->save()){
            return $response->withJson(Respuesta::createPositive());
        }else{
            return $response->withJson(Respuesta::createNegative("Error al crear el producto"));
        }
    }

    /**
     * Actualizar un nuevo producto
     */
    public function actualizarProducto(Request $request, Response $response){
        $data = $request->getParsedBody();
        $prestamos = new Producto; 

        $mensaje = "";
        $valida = false;
         
        $respuesta = Producto::where('id', $data['id'])->update([
            'descripcion' => $data['descripcion'],
            'costo' => $data['costo'],
            'precio' => $data['precio'],
            'tipo' => $data['tipo'],
            'activo' => $data['activo']
        ]);

        if($respuesta != null){
            $mensaje = "Producto modificado correctamente";
            $valida = true;
        }else{
            $mensaje = "Error al modificar el préstamo";
        }

        return $response->withJson([
            "valida" => $valida,
            "mensaje" => $mensaje
        ]);
    } 
} 