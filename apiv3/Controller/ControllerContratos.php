<?php
/**
 * Clase controlador del modelo Contrato
 */
namespace Acredito\Controller;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request; 
use \Slim\Psr7\Stream;
use Acredito\Model\Log as Log;
use Acredito\Model\Prestamo as Prestamo;
use Acredito\Model\CLiente as Cliente;