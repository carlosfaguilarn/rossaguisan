<?php
/**
 * Clase controlador del modelo Contrato
 */
namespace Roan\Controller;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request; 
use \Slim\Psr7\Stream;
use Roan\Model\Log as Log;
use Roan\Model\Prestamo as Prestamo;
use Roan\Model\CLiente as Cliente;