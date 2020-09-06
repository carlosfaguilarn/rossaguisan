<?php
/*
* MODULO ABONOS
*/
include_once('../lib/Smarty/libs/smarty.class.php');
include_once('../sesion.php');
include_once('class.clientes.php');

$html = new Smarty;
$obj_clientes = new Clientes;

$title = "Clientes";

$clientes = $obj_clientes->GetClientes(); 

$html->assign('title', $title); 
$html->assign('clientes', $clientes);     
$html->assign('opcion_actual', "opcion_clientes");
$html->assign('section', 'clientes.tpl');  
$html->display('../templates/index.tpl');