<?php

include_once $_SERVER["DOCUMENT_ROOT"] .'/clientes/class.clientes.php';
include_once $_SERVER["DOCUMENT_ROOT"] .'/prestamos/class.prestamos.php';
include_once $_SERVER["DOCUMENT_ROOT"] . '/lib/dompdf/autoload.inc.php';

use Dompdf\Dompdf;

class Archivo {
    public function GetReporteAbonosPrestamo($prestamo_id){
        $obj_prestamos = new Prestamos;
        $prestamo = $obj_prestamos->GetPrestamo($prestamo_id);
        $abonos = $obj_prestamos->GetAbonosPrestamo($prestamo_id);
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

                if($i==33){
                    $html .="</tbody></table></div></div>";
                    $html .=
                    "<table class='tarjeta-abono'>
                    <thead style='background: #717171; color: #FFFFFF;'>
                        <th>SEM</th>
                        <th>ABONO</th>
                        <th>SALDO</th>
                        <th>FECHA</th>
                    </thead>
                    <tbody> 
                    <tr> 
                    </tr>";
                }
            }  
        }
        
        $html .="</tbody></table></div></div>";
        $dompdf->loadHtml($html);
        $dompdf->setPaper('letter', 'portrait');
         
        // Render the HTML as PDF
        $dompdf->render();
        
        // Render and return pdf content as base64 string
        return  base64_encode($dompdf->output('doc.pdf', 's'));
    }
}