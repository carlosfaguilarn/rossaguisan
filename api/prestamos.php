<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request; 
use \Slim\Psr7\Stream;
 
include_once $_SERVER["DOCUMENT_ROOT"] . '/prestamos/class.prestamos.php'; 
include_once $_SERVER["DOCUMENT_ROOT"] . '/prestamos/class.archivos.php';


$app->get('/prestamos/listado', function (Request $request, Response $response) {
    $obj_prestamos = new Prestamos;
    return $response->withJson([
        "prestamos" => $obj_prestamos->GetPrestamos()
    ]);
});

$app->get('/abonos/listado/{id}', function (Request $request, Response $response, $args) {
    $id = $args['id'];
    $obj_prestamos = new Prestamos;
    return $response->withJson([
        "abonos" => $obj_prestamos->GetAbonosPrestamo($id)
    ]);
});

$app->post('/prestamos/nuevo', function (Request $request, Response $response) {
    $data = $request->getParsedBody();
    $obj_prestamos = new Prestamos;

    $mensaje = "";
    $respuesta = $obj_prestamos->RegistrarPrestamo($data); 
    
    if($respuesta->valida){
        $mensaje = "Préstamo registrado correctamente!";
    }else{
        $mensaje = "Error al registrar el préstamo";
    }
    
    return $response->withJson([
        "valida" => $respuesta->valida,
        "mensaje" => $mensaje,
        "inserted" => $respuesta->inserted
    ]);
});

$app->post('/abonos/nuevo', function (Request $request, Response $response) {
    $data = $request->getParsedBody();
    $obj_prestamos = new Prestamos;

    $mensaje = "";
    $valida = $obj_prestamos->RegistrarAbono($data); 
    if($valida){
        $mensaje = "¡Abono registrado correctamente!";
    }else{
        $mensaje = "Error al registrar el abono";
    }
    
    return $response->withJson([
        "valida" => $valida,
        "mensaje" => $mensaje,
    ]);
});

$app->get('/abonos/pdf/{id}', function (Request $request, Response $response, $args) {
    $prestamo_id = $args['id'];
    $obj_prestamos = new Prestamos;
    $obj_archivo = new Archivo;

    $content = $obj_archivo->GetReporteAbonosPrestamo($prestamo_id);
    $fileName = 'doc.pdf';

    //$response = $response->withType('application/pdf');
    $response = $response->withHeader('Content-Disposition', sprintf('attachment; filename="%s"', $fileName));
    $stream = fopen('php://memory', 'w+');
    fwrite($stream, $content);
    rewind($stream);

    return $response->withBody(new Stream($stream));
});


//RewriteRule ^(.*)$ %{ENV:BASE}/api/index.php [QSA,L]

  