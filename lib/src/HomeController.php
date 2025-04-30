<?php 
namespace Rain;

use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;


class HomeController
{
   private $container;

   /* constructor receives container instance
   public function __construct(ContainerInterface $container)
   {
       $this->container = $container;
   }*/

   public function home(ServerRequestInterface $request, ResponseInterface $response, array $args): ResponseInterface
   {
        // your code to access items in the container... $this->container->get('');
        $response->getBody()->write("hola");
        return $response;
   }

   public function contact(ServerRequestInterface $request, ResponseInterface $response, array $args): ResponseInterface
   {
        // your code to access items in the container... $this->container->get('');
        
        return $response;
   }
}