<?php

include_once $_SERVER["DOCUMENT_ROOT"] .'/clientes/class.clientes.php';
include_once $_SERVER["DOCUMENT_ROOT"] .'/prestamos/class.prestamos.php';
include_once $_SERVER["DOCUMENT_ROOT"] .'/class.utilerias.php';
include_once $_SERVER["DOCUMENT_ROOT"] .'/class.usuarios.php';
include_once $_SERVER["DOCUMENT_ROOT"] . '/lib/dompdf/autoload.inc.php';

use Dompdf\Dompdf;

class Archivo {
    public function GetReporteAbonosPrestamo($prestamo_id){
        $obj_prestamos = new Prestamos;
        $obj_util = new Util;
        $prestamo = $obj_prestamos->GetPrestamo($prestamo_id);

        if(!isset($prestamo))
            return null;

        $abonos = $obj_prestamos->GetAbonosPrestamo($prestamo_id);
        $lastAbonoIndex = 0;

        $ultimo_abono = (object) array("FECHA" => "");
        if(count($abonos) > 0){
            $ultimo_abono = $abonos[count($abonos)-1];
        }

        try{
            $dompdf = new Dompdf();
            $data = [
                "prestamo" => $prestamo,
                "ultimo_abono" => $ultimo_abono,
                "abonos" => $abonos,
            ];

            $html = $obj_util->load_view('views/abonos/template_abono', $data, true);

            $dompdf->loadHtml($html);
            $dompdf->setPaper('letter', 'portrait');

            $contenido = "";
            $dompdf->render();
            $output = $dompdf->output();
            $contenido = base64_encode($output);

            file_put_contents("../files/recibos/$prestamo->ID.pdf", $output); 
        }catch(Exception $e){
            $contenido = "";
        }

        return $contenido;
    }

    public function GetContratoPrestamo($prestamo_id){
        $obj_prestamos = new Prestamos;
        $obj_clientes = new Clientes;
        $obj_util = new Util;
        $obj_usuarios = new Usuarios;
        $usuario = $obj_usuarios->GetUsuario(1);
        $prestamo = $obj_prestamos->GetPrestamo($prestamo_id);
        $prestamo->COMISION = $prestamo->COMISION;
        $cliente = $obj_clientes->GetCliente($prestamo->CLIENTE_ID);

        $prestamo->PRESTAMO_LETRA = $obj_util->num2letras($prestamo->PRESTAMO);
        $prestamo->IMPORTE_LETRA = $obj_util->num2letras($prestamo->IMPORTE);
        $prestamo->COMISION_LETRA = $obj_util->num2letras($prestamo->COMISION);
        $prestamo->MORATORIO = 5;
        $prestamo->MORATORIO_LETRA = $obj_util->num2letras(5);
        $prestamo->PRESTAMO = number_format($prestamo->PRESTAMO);
        $prestamo->IMPORTE = number_format($prestamo->IMPORTE);

        $hoy = date("d/m/Y");
        $hoy_letra = $obj_util->fecha_letra(date("d"), date("m"), date("Y"));

        $fecha_contrato_dia  = substr($prestamo->FECHA_FIN, 0, 2);
        $fecha_contrato_mes  = substr($prestamo->FECHA_FIN, 3, 2);
        $fecha_contrato_anio = substr($prestamo->FECHA_FIN, 6, 4);

        $fecha_contrato_letra = $obj_util->fecha_letra($fecha_contrato_dia, $fecha_contrato_mes, $fecha_contrato_anio);

        $fecha_contrato_dia  = substr($prestamo->FECHA_INICIO, 0, 2);
        $fecha_contrato_mes  = substr($prestamo->FECHA_INICIO, 3, 2);
        $fecha_contrato_anio = substr($prestamo->FECHA_INICIO, 6, 4);

        $fecha_contrato_inicio_letra = $obj_util->fecha_letra($fecha_contrato_dia,
                                                        $fecha_contrato_mes,
                                                        $fecha_contrato_anio);

        // Nombre de la imagen
        // $path = $prestamo->FIRMADO
        //     ? $_SERVER['DOCUMENT_ROOT']."/contratos/firma/FIRMA_".$prestamo->ID.".png"
        //     : $_SERVER['DOCUMENT_ROOT']."/contratos/firma/NO_FIRMA.png";

        $path = $_SERVER['DOCUMENT_ROOT']."/contratos/firma/NO_FIRMA.png";
        $firma_prestamo = file_get_contents($path);

        // $path = $_SERVER['DOCUMENT_ROOT']."/contratos/firma/admin/firma.png";
        $path = $_SERVER['DOCUMENT_ROOT']."/contratos/firma/NO_FIRMA.png";
        $firma_admin = file_get_contents($path);

        try{
            $dompdf = new Dompdf();
            setlocale(LC_TIME, 'es_ES.UTF-8', 'spanish');
            date_default_timezone_set('America/Mazatlan'); 

            $data = [
                "prestamo" => $prestamo,
                "fecha_contrato_letra" => $fecha_contrato_letra,
                "fecha_contrato_inicio_letra" => $fecha_contrato_inicio_letra,
                "firma_prestamo" => $firma_prestamo,
                "firma_admin" => $firma_admin,
                "fecha_hoy" => strftime("%e de %B de %Y")
            ];

            $html = $obj_util->load_view('views/contratos/template_contrato', $data, true);
            $dompdf->loadHtml($html);
            $dompdf->setPaper('letter', 'portrait');

            $dompdf->render();
            $output = $dompdf->output();
            $contenido = base64_encode($output);

            file_put_contents("../files/contratos/$prestamo->ID.pdf", $output); 
        }catch(Exception $e){
            $contenido = "";
        }

        return $contenido;
    }

    public function GetReciboAbono($prestamo_id){

        try{
            // instantiate and use the dompdf class
            $dompdf = new Dompdf();
            $html = "
            <html>
            <head>
                <style>
                    @font-face {
                        font-family: SourceSansPro;
                        src: url(SourceSansPro-Regular.ttf);
                    }
                    html, body {
                        margin: 0;
                        padding: 0;
                        border: 0;
                        font: inherit;
                        font-size: 100%;
                        vertical-align: baseline;
                        background-color: #F1F2F7;
                    }
                    body {
                        font-family: 'Source Sans Pro', sans-serif;
                        font-weight: 300;
                        font-size: 12px;
                        margin: 0;
                        padding: 0;
                    }
                    header {
                        margin-top: 20px;
                        margin-bottom: 50px;
                    }
                    .logo{
                        width: 100px;
                        height: 100px;
                    }
                    .head{
                        height: 560px;
                        background-color: #1f65a6;
                        margin-bottom: 30px;
                        padding: 20px;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                    }
                    .foot{
                        position: absolute;
                        bottom:120px;
                        width:100%;
                    }
                    tr:nth-child(even) {
                        background-color: #f2f2f2 !important;
                    }
                    .title{
                        text-align: center;
                        color: white;
                        font-size: 3.5em;
                        font-weight: 400;
                        text-transform: uppercase;
                        margin-bottom: 15px;
                        margin-top: 60px;
                    }
                    .subtitle{
                        margin-bottom: 18px;
                        text-align: center;
                        color: white;
                        font-size: 1.7em;
                        font-weight: 400;
                        text-transform: uppercase;
                    }
                    .data-details{
                        width: 90%;
                        height: auto;
                        margin-right: 5%;
                        margin-left: 5%;
                        margin-top: -175px;
                        background-color: white;
                    }
                    .data-header{
                        padding: 30px 0 20px;
                    }
                    .quantity{
                        text-align: center;
                        font-size: 4.7em;
                        color: #1f65a6;
                        font-weight: bold;
                        margin: 0;
                    }
                    .client-name{
                        text-align: center;
                        font-size: 3em;
                        margin: 30px 0 0 0;
                    }
                    .data-content{
                        min-height: 550px;
                    }
                    .data-content-field{
                        display: flex;
                        align-items: center;
                        padding: 0 30px;
                        font-size: 2em;
                        justify-content: space-between;
                    }
                    .field-name{
                        color: #898989;
                    }
                    .field-value{
                        color: black;
                    }
                </style>




            </head>
            <body>
                <section>
                    <div class='head'>
                        <div style='text-align:center;'>
                            <img class='logo' src='data:image/png;base64,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' alt=''>
                            <div class='title'>Recibo de Abono</div>
                            <div class='subtitle'> 26/02/2022 21:34</div>
                        </div>
                    </div>

                    <div class='container'>
                        <div id='d-wrapper'  class='details clearfix'>
                             <div class='data-details'>
                                 <div class='data-header'>
                                     <p class='quantity'>$770.00</p>
                                     <p class='client-name'>María Elizabeth Cebreros Miranda</p>
                                 </div>
                                 <hr style='border-top: 1px dashed black'/>
                                 <div class='data-content'>
                                    <div class='data-content-field'><p class='field-name'>Folio</p><p class='field-value'>3125</p></div>
                                    <div class='data-content-field'><p class='field-name'>Descripción</p><p class='field-value'>Abono a capital e intereses</p></div>
                                    <div class='data-content-field'><p class='field-name'>Fecha</p><p class='field-value'>26/02/2022</p></div>
                                    <div class='data-content-field'><p class='field-name'>Hora</p><p class='field-value'>22:24</p></div>
                                    <div class='data-content-field'><p class='field-name'># de Abono</p><p class='field-value'>8</p></div>
                                </div>
                             </div>
                        </div>
                    </div>
                </section>
            </body>
        </html>
            ";

            $dompdf->loadHtml($html);
            $dompdf->setPaper('letter', 'portrait');

            $contenido = "";
            // Render the HTML as PDF
            $dompdf->render();

            // Render pdf content as base64 string
            $contenido = base64_encode($dompdf->output('doc.pdf', 's'));
        }catch(Exception $e){
            $contenido = "";
        }

        return $contenido;
    }
}
