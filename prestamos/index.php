<?php
/*
* MODULO ABONOS
*/
include_once('../lib/Smarty/libs/smarty.class.php');
include_once('../sesion.php');
include_once('class.prestamos.php');
$html = new Smarty;
$obj_prestamos = new Prestamos;

$title = "Préstamos";

/** Registrar un nuevo préstamo */
If(isset($_POST['nuevo_prestamo'])){
    $obj_prestamos->RegistrarPrestamo($_POST); 
    $html->assign('alerta_mensaje', "¡Préstamo registrado correctamente!"); 
}

/** Si la ruta trae filtro, buscar cliente en la lista */
if(isset($_GET['search'])){
    $html->assign('search', $_GET['search']); 
}

// ASIGNAR VARIABLES NECESARIAS
$html->assign('title', $title); 
$html->assign('prestamos', $obj_prestamos->GetPrestamos());     
$html->assign('opcion_actual', "opcion_prestamos");
$html->assign('section', 'prestamos.tpl');  
$html->display('../templates/index.tpl');