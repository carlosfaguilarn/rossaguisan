<?php
/*
* MODULO ABONOS
*/
include_once('../lib/Smarty/libs/smarty.class.php');
include_once('../sesion.php');
include_once('class.cliente.php');
$html = new Smarty;
$obj_prestamos = new Clientes;

$title = "Nuevo cliente";

if(isset($_GET['prestamo'])){
    $prestamo_id = $_GET['prestamo'];
    $prestamo = $obj_prestamos->GetClientes();
}
      
$html->assign('title', $title);   
$html->assign('prestamo', $prestamo);   
$html->assign('opcion_actual', "opcion_prestamos");
$html->assign('section', 'nuevo_abono.tpl');  
$html->display('../templates/index.tpl');