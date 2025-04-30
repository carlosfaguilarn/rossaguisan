<?php
// include autoloader
require_once '../lib/dompdf/autoload.inc.php';
//require_once '../lib/imagick';
include_once('../sesion.php');
use Dompdf\Dompdf;
//use Imagick\Imagick;

include_once('class.prestamos.php'); 
$obj_prestamos = new Prestamos;
  

if(isset($_GET['prestamo'])){
    $prestamo_id = $_GET['prestamo'];
    $prestamo = $obj_prestamos->GetPrestamo($prestamo_id);
    $abonos = $obj_prestamos->GetAbonosPrestamo($prestamo_id); 
}else{
    return;
}
// Logo en base64
$path = '/lib/assets/img/icons/invoice.png';
$type = pathinfo($path, PATHINFO_EXTENSION);
$data = file_get_contents($path);
$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

$img = "data:image/png;base64,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";
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
    <img src='".$img."' width='150' height='150'/>
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

$filename = "TARJETA";
 // Output the generated PDF to Browser
$file = $dompdf->stream($filename, array("Attachment" => false));