<?php
/**
 * Clase controlador del modelo Ingresos
 */
namespace Roan\Controller;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request; 
use \Slim\Psr7\Stream;
use Roan\Model\Log as Log;
use Roan\Model\Prestamo as Prestamo;
use Roan\Model\Cliente as Cliente;
use Roan\General\Respuesta as Respuesta;
  
class ControllerPrestamo{
    /**
     * Obtiene préstamos activos
     */
    public function getPrestamos(Request $request, Response $response) { 
        $prestamo = new Prestamo;
        $params = $request->getQueryParams();
        $prestamos = $prestamo->GetPrestamos($params['SocioID']);
        return $response->withJson(Respuesta::createPositive($prestamos));
    }
} 