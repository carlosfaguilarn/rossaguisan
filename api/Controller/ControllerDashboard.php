<?php
/**
 * Clase controlador del modelo Préstamo
 */
namespace Roan\Controller;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request; 
use \Slim\Psr7\Stream;
use Roan\General\Respuesta as Respuesta;

class ControllerDashboard{
    /**
     * Obtiene dashboard
     */
    public function getDashboard(Request $request, Response $response, $args) { 
        $obj_dashboard = new \Dashboard;
        $fecha_actual = getdate();
        $firstDay = date('Y-m-01'); // Primer día del mes actual
        $hoy = date('Y-m-d'); // Hoy
        $lastDay = date("Y-m-t"); // Último día del mes actual
        $fechaMesPasadoFirst = date("Y-m-d", strtotime("-1 month", strtotime($firstDay)));
        $fechaMesPasadoLast = date("Y-m-t", strtotime($fechaMesPasadoFirst));
 
        return $response->withJson(Respuesta::createPositive([
            "dashboard" => $obj_dashboard->GetDashboard($args['id']),
            "ingresos" => $obj_dashboard->GetIngresosMes($firstDay, $lastDay, $args['id']),
            "anual" => $obj_dashboard->GetIngresosAnual($args['id']), 
            "prestamos_mes" => $obj_dashboard->GetPrestamosMes($args['id']) 
        ]));
    }
} 