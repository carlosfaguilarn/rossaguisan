<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request; 
 
include_once $_SERVER["DOCUMENT_ROOT"] . '/clientes/class.clientes.php'; 

$app->get('/clientes/listado', function (Request $request, Response $response) {
    $obj_clientes = new Clientes;
    return $response->withJson([
        "clientes" => $obj_clientes->GetClientes()
    ]);
});