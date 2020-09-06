<?php
// include autoloader
require_once '../lib/dompdf/autoload.inc.php';
include_once('../sesion.php');
use Dompdf\Dompdf;

include_once('class.prestamos.php'); 
$obj_prestamos = new Prestamos;
  
// instantiate and use the dompdf class
$dompdf = new Dompdf();

$html = "
    <style> 
        tr:not(:first-child) {
            color: red;
        }
        tbody:before, tbody:after { 
            display: none; 
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
";

$prestamos = $obj_prestamos->GetPrestamos();

for($i=0; $i<sizeof($prestamos)-1; $i++){
    $prestamo = $prestamos[$i];

    $abonos = $obj_prestamos->GetAbonosPrestamo($prestamo->ID); 
 
    $html .= " 
    <div class='contenedor'>
        <p style='text-align: center;'>
            <span style='font-weight: 700 !important;'> CRÉDITOS ROSSAGUISAN Y ASOCIADOS </span>
            <br />
            <span style='font-weight: 600 !important;'> Cambia tu deuda con nosotros y mejoramos tus intereses </span>
        </p>
        <hr/> 
        <br />

        <span class='bold'>Nombre: </span>
        (".$prestamo->ID.") ".$prestamo->APELLIDO." ".$prestamo->NOMBRE." <br/>

        <span class='bold'>Préstamo: </span>
        <span class='moneda'> $".number_format($prestamo->IMPORTE)." </span><br/>

        <span class='bold'>Saldo Actual: </span>
        <span class='moneda'> $".number_format($prestamo->SALDO)." </span><br/>

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
    for($j=0; $j<=sizeof($abonos); $j++){
        if(isset($abonos[$j])){
            $item = $abonos[$j];
            $html .= 
            "<tr> 
                <td>".($j+1)."</td> 
                <td class='moneda'>$".number_format($item->ABONO)."</td> 
                <td class='moneda'>$".number_format($item->SALDO)."</td>
                <td>".$item->FECHA."</td>
            </tr>";
        }  
    }

    $html .="</tbody></table></div></div>";
    $html .= "<br/> <br/> <br/>";
    
    $html .= "<div style='page-break-after:always;'></div>";
}

$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portraint');

// Render the HTML as PDF
$dompdf->render();

$filename = "LISTADO_PRESTAMOS";

// Output the generated PDF to Browser
$dompdf->stream("$filename.pdf", array("Attachment" => false));