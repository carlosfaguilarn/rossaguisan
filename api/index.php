<?php
namespace Roan;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;  
use Psr\Http\Server\RequestHandlerInterface as RequestHandler;
use Slim\Routing\RouteCollectorProxy;
use Slim\Factory\AppFactory; 

use Roan\Model\Capital as Capital;
use Roan\Database\database as Database;
 
include_once $_SERVER["DOCUMENT_ROOT"] . '/lib/vendor/autoload.php'; 
include_once $_SERVER["DOCUMENT_ROOT"] . '/class.usuarios.php';   
include_once $_SERVER["DOCUMENT_ROOT"] . '/prestamos/class.prestamos.php'; 
include_once $_SERVER["DOCUMENT_ROOT"] . '/prestamos/class.archivos.php'; 
include_once $_SERVER["DOCUMENT_ROOT"] . '/clientes/class.clientes.php'; 
include_once $_SERVER["DOCUMENT_ROOT"] . '/class.usuarios.php';
include_once $_SERVER["DOCUMENT_ROOT"] . '/class.dashboard.php'; 
include_once $_SERVER["DOCUMENT_ROOT"] . '/api/auth.php';  

use \Illuminate\Container\Container as Container;
use \Illuminate\Support\Facades\Facade as Facade;
use Illuminate\Database\Capsule\Manager as Capsule;
 
// Bootstrap Eloquent ORM
$container = new Container();  

$connFactory = new \Illuminate\Database\Connectors\ConnectionFactory($container);
$conn = $connFactory->make(Database::settings);
$resolver = new \Illuminate\Database\ConnectionResolver();
$resolver->addConnection('default', $conn);
$resolver->setDefaultConnection('default');
\Illuminate\Database\Eloquent\Model::setConnectionResolver($resolver);

$Capsule = new Capsule;
$Capsule->addConnection(Database::settings);
$Capsule->setAsGlobal();   
$Capsule->bootEloquent();

$app = AppFactory::create();
$app->setBasePath("/api"); 

//$app->get('/prestamos', 'Roan\Controller\ControllerPrestamo:getPrestamos');
$app->get('/prestamo/{id}', 'Roan\Controller\ControllerPrestamo:getPrestamo');
$app->get('/abono', 'Roan\Controller\ControllerAbono:getAbonosPrestamo');
$app->post('/abono', 'Roan\Controller\ControllerAbono:newAbono');
$app->get('/abonos/pdf/{id}', 'Roan\Controller\ControllerPrestamo:getReciboAbonos');

/* RUTAS PÚBLICAS */
$app->post('/login', 'Roan\Controller\ControllerUsuario:login');

$app->group('', function (RouteCollectorProxy $group) {
    $group->get('/dashboard/{id}', 'Roan\Controller\ControllerDashboard:getDashboard');
    $group->get('/prestamos/socio/{SocioID}', 'Roan\Controller\ControllerPrestamo:getPrestamos'); 
    $group->post('/prestamos/nuevo', 'Roan\Controller\ControllerPrestamo:newPrestamo');
    $group->get('/prestamos/finalizar/{id}', 'Roan\Controller\ControllerPrestamo:finPrestamo');
    $group->get('/prestamos/eliminar/{id}', 'Roan\Controller\ControllerPrestamo:delPrestamo');
    $group->post('/prestamos/savefiles/{id}', 'Roan\Controller\ControllerPrestamo:saveFilesContrato');
    $group->get('/abonos/listado/{id}', 'Roan\Controller\ControllerPrestamo:getAbonosPrestamo');
    $group->get('/abonos/cliente/{id}', 'Roan\Controller\ControllerPrestamo:getAbonosCliente');
    //$group->get('/abonos/pdf/{id}', 'Roan\Controller\ControllerPrestamo:getReciboAbonos');
    $group->post('/abonos/nuevo', 'Roan\Controller\ControllerPrestamo:newAbono');
    $group->get('/prestamos/contrato/{id}', 'Roan\Controller\ControllerPrestamo:getContratoPrestamo');
})->add("Roan\Middleware\MiddlewareAuth");

/* RUTAS DASHBOARD (PROTEGIDAS) */
$app->group('', function (RouteCollectorProxy $group) {
    //$group->get('/dashboard/{id}', 'Roan\Controller\ControllerDashboard:getDashboard');
})->add("Roan\Middleware\MiddlewareAuth"); 

/* RUTAS CLIENTES (PROTEGIDAS) */ 
$app->group('', function (RouteCollectorProxy $group) {
    $group->get('/cliente', 'Roan\Controller\ControllerCliente:getClientes');
    $group->get('/cliente/{id}', 'Roan\Controller\ControllerCliente:getCliente');
    $group->post('/cliente', 'Roan\Controller\ControllerCliente:registrarCliente');
})->add("Roan\Middleware\MiddlewareAuth");

/* RUTAS LOGS (PROTEGIDAS) */
$app->group('', function (RouteCollectorProxy $group) {
    $group->get('/log', 'Roan\Controller\ControllerLog:getLogs');
    $group->post('/logs/nuevo', 'Roan\Controller\ControllerLog:new');
})->add("Roan\Middleware\MiddlewareAuth");

/* RUTAS SOCIOS (PROTEGIDAS) */
$app->group('', function (RouteCollectorProxy $group) {
    $group->get('/socios/listado', 'Roan\Controller\ControllerSocio:getSocios');
})->add("Roan\Middleware\MiddlewareAuth");

$app->run();   