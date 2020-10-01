<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request; 
 
include_once $_SERVER["DOCUMENT_ROOT"] . '/class.dashboard.php'; 

$app->get('/dashboard', function (Request $request, Response $response) {
    $obj_dashboard = new Dashboard;

    $fecha_actual = getdate();
    $firstDay = date('Y-m-01'); // Primer día del mes actual
    $hoy = date('Y-m-d'); // Hoy
    $lastDay = date("Y-m-t"); // Último día del mes actual
    $fechaMesPasadoFirst = date("Y-m-d", strtotime("-1 month", strtotime($firstDay)));
    $fechaMesPasadoLast = date("Y-m-t", strtotime($fechaMesPasadoFirst));

    return $response->withJson([
        "dashboard" => $obj_dashboard->GetDashboard(),
        "ingresos" => $obj_dashboard->GetIngresosMes($firstDay, $lastDay)
    ]);
});