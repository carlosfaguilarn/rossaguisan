<?php
/*
* MODULO ABONOS
*/
include_once('../lib/Smarty/libs/smarty.class.php'); 
include_once('../sesion.php');
include_once('class.prestamos.php');
$html = new Smarty;
$obj_prestamos = new Prestamos;
$obj_clientes = new Clientes;

$title = "Abonos del cliente";

/** Obtener listado de abonos que debe dar el cliente */
if(isset($_GET['cliente'])){
    $cliente_id = $_GET['cliente'];
    $cliente = $obj_clientes->GetCliente($cliente_id);
    $prestamos = $obj_prestamos->GetAbonosCliente($cliente_id);
}
       
$html->assign('title', $title); 
$html->assign('prestamos', $prestamos);  
$html->assign('cliente', $cliente);  
$html->assign('opcion_actual', "opcion_prestamos");
$html->assign('section', 'abonos_cliente.tpl');  
$html->display('../templates/index.tpl');