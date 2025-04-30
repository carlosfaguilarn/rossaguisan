<?php
namespace Acredito;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Server\RequestHandlerInterface as RequestHandler;
use Slim\Routing\RouteCollectorProxy;
use Slim\Factory\AppFactory;

use Acredito\Model\Capital as Capital;
use Acredito\Database\database as Database;

include_once $_SERVER["DOCUMENT_ROOT"] . '/lib/vendor/autoload.php';
include_once $_SERVER["DOCUMENT_ROOT"] . '/class.usuarios.php';
include_once $_SERVER["DOCUMENT_ROOT"] . '/prestamos/class.prestamos.php';
include_once $_SERVER["DOCUMENT_ROOT"] . '/prestamos/class.archivos.php';
include_once $_SERVER["DOCUMENT_ROOT"] . '/clientes/class.clientes.php';
include_once $_SERVER["DOCUMENT_ROOT"] . '/class.usuarios.php';
include_once $_SERVER["DOCUMENT_ROOT"] . '/class.dashboard.php';
include_once $_SERVER["DOCUMENT_ROOT"] . '/apiv3/auth.php';

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
$app->setBasePath("/apiv3");

// Middleware para habilitar los CORS
$app->options('/{routes:.+}', function ($request, $response, $args) {
    return $response;
});

$app->add(function ($request, $handler) {
    $response = $handler->handle($request);
    return $response
        ->withHeader('Access-Control-Allow-Origin', '*')
        ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
        ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');
});

/* RUTAS PÚBLICAS */
$app->post('/login', 'Acredito\Controller\ControllerUsuario:login');

/* RUTAS DASHBOARD (PROTEGIDAS) */
$app->group('', function (RouteCollectorProxy $group) {
    $group->get('/dashboard/{id}', 'Acredito\Controller\ControllerDashboard:getDashboard');
})->add("Acredito\Middleware\MiddlewareAuth");

/* RUTAS PRESTAMOS (PROTEGIDAS) */
$app->group('', function (RouteCollectorProxy $group) {
    $group->get('/prestamos/socio/{SocioID}', 'Acredito\Controller\ControllerPrestamo:getPrestamos');
    $group->post('/prestamos/nuevo', 'Acredito\Controller\ControllerPrestamo:newPrestamo');
    $group->get('/prestamos/finalizar/{id}', 'Acredito\Controller\ControllerPrestamo:finPrestamo');
    $group->get('/prestamos/eliminar/{id}', 'Acredito\Controller\ControllerPrestamo:delPrestamo');
    $group->get('/prestamos/contrato/{id}', 'Acredito\Controller\ControllerPrestamo:getContratoPrestamo');
    $group->post('/prestamos/savefiles/{id}', 'Acredito\Controller\ControllerPrestamo:saveFilesContrato');
    $group->get('/abonos/listado/{id}', 'Acredito\Controller\ControllerPrestamo:getAbonosPrestamo');
    $group->get('/abonos/cliente/{id}', 'Acredito\Controller\ControllerPrestamo:getAbonosCliente');
    $group->get('/abonos/pdf/{id}', 'Acredito\Controller\ControllerAbono:getReciboAbonos');
    $group->post('/abonos/nuevo', 'Acredito\Controller\ControllerAbono:newAbono');
})->add("Acredito\Middleware\MiddlewareAuth");

/* RUTAS ORDEN PAGOS (PROTEGIDAS) */
$app->group('', function (RouteCollectorProxy $group) {
    $group->get('/orden/{id}', 'Acredito\Controller\ControllerOrdenPago:getOrden');
    $group->get('/orden/pendiente/cliete/{id}', 'Acredito\Controller\ControllerOrdenPago:getOrdenPendienteByCliente');
})->add("Acredito\Middleware\MiddlewareAuth");

$app->post('/orden/create', 'Acredito\Controller\ControllerOrdenPago:create');
$app->post('/ordenRecurrente/create', 'Acredito\Controller\ControllerOrdenPagoRecurrente:create');

$app->post('/orden/paid', 'Acredito\Controller\ControllerOrdenPago:paid');
$app->post('/ordenRecurrente/paid', 'Acredito\Controller\ControllerOrdenPagoRecurrente:paid');
$app->post('/ordenRecurrente/createCustomer', 'Acredito\Controller\ControllerOrdenPagoRecurrente:createCustomer');

/* RUTAS CLIENTES (PROTEGIDAS) */
$app->group('', function (RouteCollectorProxy $group) {
    $group->get('/clientes', 'Acredito\Controller\ControllerCliente:getClientes');
    $group->get('/clientes/{id}', 'Acredito\Controller\ControllerCliente:getCliente');
    $group->post('/cliente', 'Acredito\Controller\ControllerCliente:registrarCliente');
})->add("Acredito\Middleware\MiddlewareAuth");

/* RUTAS LOGS (PROTEGIDAS) */
$app->group('', function (RouteCollectorProxy $group) {
    $group->get('/log', 'Acredito\Controller\ControllerLog:getLogs');
    $group->post('/logs/nuevo', 'Acredito\Controller\ControllerLog:new');
})->add("Acredito\Middleware\MiddlewareAuth");

/* RUTAS SOCIOS (PROTEGIDAS) */
$app->group('', function (RouteCollectorProxy $group) {
    $group->get('/socios/listado', 'Acredito\Controller\ControllerSocio:getSocios');
})->add("Acredito\Middleware\MiddlewareAuth");

$app->run();
