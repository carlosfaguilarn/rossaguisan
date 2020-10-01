<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request; 
use Slim\Factory\AppFactory;

include_once $_SERVER["DOCUMENT_ROOT"] . '/lib/vendor/autoload.php'; 

// Instantiate App
$app = AppFactory::create();
$app->setBasePath("/api"); 

// Add error middleware
$app->addErrorMiddleware(true, true, true);

/* INCLUIR TODOS LOS ARCHIVOS DE RUTAS */
require 'prestamos.php';
require 'clientes.php';
require 'dashboard.php';
  
$app->run();
$app->addErrorMiddleware(true, true, true);