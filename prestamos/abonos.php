<?php
/*
* MODULO ABONOS
*/
include_once('../lib/Smarty/libs/smarty.class.php'); 
include_once('../sesion.php');
include_once('class.prestamos.php');
$html = new Smarty;
$obj_prestamos = new Prestamos;

$title = "Abonos";

/** Registrar un abono del cliente */
if(isset($_POST['guardar_abono'])){
    $obj_prestamos->RegistrarAbono($_POST);
    $html->assign('alerta_mensaje', "¡Abono registrado correctamente!"); 
}

/** Guardar varios abonos de un cliente al mismo tiempo */
if(isset($_POST['guardar_varios'])){ 
    $contador = 0;
    $nombre_cliente = $_POST['nombre'];
    for($i=0; $i<count($_POST['abono']); $i++){
        $obj_prestamos->RegistrarAbono($_POST[$i]);
        $contador++;
    }
    $html->assign('alerta_mensaje', "¡Se registraron $contador abono(s) del cliente $nombre_cliente!"); 
} 

/** Obtener listado de abonos si viene prestamo en GET */
if(isset($_GET['prestamo'])){
    $prestamo_id = $_GET['prestamo'];
    $prestamo = $obj_prestamos->GetPrestamo($prestamo_id);
    $prestamo->SALDO = $obj_prestamos->GetSaldoPrestamo($prestamo_id)->SALDO;
    $abonos = $obj_prestamos->GetAbonosPrestamo($prestamo_id); 
}
      
$html->assign('title', $title); 
$html->assign('abonos', $abonos);  
$html->assign('prestamo_id', $prestamo_id);  
$html->assign('prestamo', $prestamo);  
$html->assign('opcion_actual', "opcion_abonos");
$html->assign('section', 'abonos.tpl');  
$html->display('../templates/index.tpl');