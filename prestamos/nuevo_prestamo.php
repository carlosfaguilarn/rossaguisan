<?php
/*
* MODULO ABONOS
*/
include_once('../lib/Smarty/libs/smarty.class.php');
include_once('../sesion.php');
include_once('class.prestamos.php');
include_once('../clientes/class.clientes.php');
$html = new Smarty;
$obj_prestamos = new Prestamos;
$obj_clientes = new Clientes;

$cliente="";
if(isset($_GET['cliente'])){
    $cliente_id = $_GET['cliente'];
    $cliente = $obj_clientes->GetCliente($cliente_id);
} 

$title = "Nuevo préstamo";

      
$html->assign('title', $title);   
$html->assign('cliente', $cliente);   
$html->assign('opcion_actual', "opcion_prestamos");
$html->assign('section', 'nuevo_prestamo.tpl');  
$html->display('../templates/index.tpl');