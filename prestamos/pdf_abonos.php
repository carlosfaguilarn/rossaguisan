<?php
// include autoloader
require_once '../lib/dompdf/autoload.inc.php';
include_once('../sesion.php');
use Dompdf\Dompdf;

include_once('class.prestamos.php'); 
$obj_prestamos = new Prestamos;
 
if(isset($_GET['prestamo'])){
    $prestamo_id = $_GET['prestamo'];
    $prestamo = $obj_prestamos->GetPrestamo($prestamo_id);
    $abonos = $obj_prestamos->GetAbonosPrestamo($prestamo_id); 
}else{
    return;
}
  
// instantiate and use the dompdf class
$dompdf = new Dompdf();

$html = "
<style>  
    .contenedor{
        width: 45%; 
        height: 95%;
        padding: 10px 40px 10px 40px; 
        border: 0.1px solid grey;
    }
    th, td{
        text-align: center !important;
    }
    .tarjeta-abono{
        width: 100%;
        border-collapse: collapse; 
    }
    .tarjeta-abono th, .tarjeta-abono td{
        text-align: center;
        border: 1px solid black;
    }
    .tarjeta-abono tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    .bold{
        font-weight: 600;
    }
</style>
<div>
    <p style='text-align: center;'>
        <span style='font-weight: 700 !important;'> CRÉDITOS ROSSAGUISAN Y ASOCIADOS </span>
        <br />
        <span style='font-weight: 600 !important;'> Cambia tu deuda con nosotros y mejoramos tus intereses </span>
    </p>
    <br />

    <span class='bold'>Nombre: </span>
    ".$prestamo->APELLIDO." ".$prestamo->NOMBRE." <br/>

    <span class='bold'>Préstamo: </span>
    <span class='moneda'> $".number_format($prestamo->IMPORTE)." </span><br/>

    <span class='bold'>Plazo: </span> 
    del ".$prestamo->FECHA_INICIO." al ".$prestamo->FECHA_FIN."

    <br/><br/><br />
    <div style='width: 100%; text-align: center;'>
    <table class='tarjeta-abono'>
        <thead style='background: #717171; color: #FFFFFF;'>
            <th>SEM</th>
            <th>ABONO</th>
            <th>SALDO</th>
            <th>FECHA</th>
        </thead>
        <tbody> 
        <tr> 
        </tr>
";

setlocale(LC_MONETARY, 'en_US');
for($i=0; $i<=sizeof($abonos); $i++){
    if(isset($abonos[$i])){
        $item = $abonos[$i];
        $html .= 
        "<tr> 
            <td>".($i+1)."</td> 
            <td class='moneda'>$".number_format($item->ABONO)."</td> 
            <td class='moneda'>$".number_format($item->SALDO)."</td>
            <td>".$item->FECHA."</td>
        </tr>";
    }else{
        $html .= 
        "<tr> 
            <td>$i</td> 
            <td> </td> 
            <td> </td>
            <td> </td>
        </tr>"; 
    }
    
}

$html .="</tbody></table></div></div>";

$dompdf->loadHtml($html);

$dompdf->setPaper('letter', 'portrait');
// (Optional) Setup the paper size and orientation
//$dompdf->setPaper('A4', 'portraint');

// Render the HTML as PDF
$dompdf->render();

$filename = "TARJETA_".$prestamo->APELLIDO." ".$prestamo->NOMBRE;

// Output the generated PDF to Browser
$dompdf->stream("$filename.pdf", array("Attachment" => false));