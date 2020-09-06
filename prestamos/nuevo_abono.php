<?php
/*
* MODULO ABONOS
*/
include_once('../lib/Smarty/libs/smarty.class.php');
include_once('../sesion.php');
include_once('class.prestamos.php');
$html = new Smarty;
$obj_prestamos = new Prestamos;

$title = "Nuevo abono";

if(isset($_GET['prestamo'])){
    $prestamo_id = $_GET['prestamo'];
    $prestamo = $obj_prestamos->GetPrestamo($prestamo_id);
    $prestamo->SALDO = $obj_prestamos->GetSaldoPrestamo($prestamo_id)->SALDO;
}
      
$html->assign('title', $title);   
$html->assign('prestamo', $prestamo);   
$html->assign('opcion_actual', "opcion_prestamos");
$html->assign('section', 'nuevo_abono.tpl');  
$html->display('../templates/index.tpl');