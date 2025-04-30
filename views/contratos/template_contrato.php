<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
    <style>
        @font-face {
            font-family: 'Roboto';
            src: url('assets/fonts/Roboto-Regular.ttf') format('truetype');
        }

        html, body{
            margin: 0;
            padding: 0;
        }
        body{
            padding: 20px;
            background-color: white;
            font-family: 'Roboto', sans-serif;
        }
        .p{
            text-align: justify;
            /* font-family: Verdana, Geneva, Tahoma, sans-serif; */
        }
        .fila{
            width: 100%;
            height: 100px;
            display: inline
        }
        .ine{
            width: 40%;
            height: 100px;
            background-color: #F2F2F2;
        }
        .dato{
            font-weight: bold;
        }
        .w100{
            width: 100%;
        }
        .m0{
            margin: 0;
        }
        .mauto{
            margin-left: auto;
            margin-right:auto;
        }
        .mt-1 {  margin-top: 30px; }
        .pt-1 {  padding-top: 30px; }
        .ps-1 {  padding-right: 30px; }
        .pe-1 {  padding-left: 30px; }
        .pb-1 {  padding-bottom: 30px; }
        .p1 {  padding: 50px; }

    </style> 
</head>
<body style='background-color: white'>
    <div class="p1">
        <!-- <h3>CONTRATO DE MUTUO CON INTERÉS</h3>
        <div class='p mt-1'>
            Debo y pagaré incondicionalmente por este pagaré a la orden de <span class='dato'>Rosario Aguilar Santos</span>, en
            esta ciudad de <span class='dato'>Los Mochis</span> en el domicilio <span class='dato'>América #2497, Las cerezas, Los Mochis, Sinaloa</span>
            la cantidad de <span class='dato'>$<?= $prestamo->IMPORTE ?> (<?= $prestamo->IMPORTE_LETRA?> pesos moneda nacional)</span>, cantidad recibida en efectivo a mi entera satisfacción, debiendo realizar el último pago
            el día <span class='dato'><?= $prestamo->FECHA_FIN ?> (<?= $fecha_contrato_letra ?>)</span>.
        </div>
        <br>
        <div class='p'>
            Este pagaré generará un interés ordinario de <span class='dato'><?= $prestamo->COMISION ?> %</span> (<span class='dato'><?= $prestamo->COMISION_LETRA ?> por ciento</span>) a la cantidad otorgada originalmente de <span class='dato'>$<?= $prestamo->PRESTAMO ?> (<?= $prestamo->PRESTAMO_LETRA ?> pesos moneda nacional) </span>
            al deudor por todo el tiempo que permanezca insoluto el adeudo, generando un adeudo real de <span class='dato'>$<?= $prestamo->IMPORTE ?> (<?= $prestamo->IMPORTE_LETRA ?> pesos moneda nacional)</span>. Igualmente obligándome a pagar para el caso de mora un interés moratorio equivalente al <span class='dato'><?=$prestamo->MORATORIO?>% (<?= $prestamo->MORATORIO_LETRA ?> por ciento) </span>
            a partir de la fecha en que se constituya en mora, la cual corresponde al transcurso de tres días naturales posteriores al día de abono.
        </div>
        <br>
        <div class='p'>
            La cantidad resultante de los intereses podrá ser capitalizada de conformidad al artículo 363 del código de comercio. Los deudores
            renuncian al fuero que por razón de su domicilio presente o futuro pudiera corresponderles y se someten a la jurisdicción de los
            tribunales competentes del Primer Partido Judicial del Estado de Sinaloa.
        </div>
        <br>
        <div class='p'>
            Suscrito en el domicilio <span class='dato'>América #2497, Las cerezas, Los Mochis, Sinaloa</span> al día
            <span class='dato'><?= $prestamo->FECHA_INICIO ?> (<?= $fecha_contrato_inicio_letra ?>)</span>.
        </div>
        <br> -->

        <div>
            <h3>CONTRATO DE MUTUO CON INTERÉS</h3>
            <div class='p mt-1'>
                Debo y pagaré incondicionalmente por este pagaré a la orden de <span class='dato'>Rosario Aguilar Santos</span>,
                en el domicilio <span class='dato'>Calle América #2497, Fracc. Las cerezas, CP: 81294, Los Mochis, Sinaloa, México</span>, la cantidad de <span class='dato'>$<?= $prestamo->IMPORTE ?> 
                (<?= $prestamo->IMPORTE_LETRA?> pesos moneda nacional)</span>, 
                cantidad que declaro haber recibido en este acto en efectivo y a mi entera satisfacción.
            </div>

            <div class='p mt-1'>
                El préstamo otorgado originalmente es por la cantidad de <span class='dato'>$<?= $prestamo->IMPORTE ?> (<?= $prestamo->IMPORTE_LETRA?> pesos moneda nacional)</span>.
            </div>

            <div class='p mt-1'>
                Este pagaré generará un interés ordinario del <span class='dato'><?= $prestamo->COMISION ?> %</span> (<span class='dato'><?= $prestamo->COMISION_LETRA ?> por ciento</span>) 
                total sobre el saldo insoluto del préstamo, durante todo el tiempo en que el adeudo permanezca pendiente de pago.
            </div>

            <div class='p mt-1'>
                El deudor se obliga a pagar el total del adeudo en <span class='dato'><?= $prestamo->PLAZOS ?></span> pagos semanales, 
                cada uno por la cantidad de <span class='dato'>$<?= $prestamo->ABONOS ?></span>, iniciando el día <span class='dato'><?= $prestamo->FECHA_INICIO ?></span>, y en lo sucesivo cada 
                día domingo hasta la liquidación total.
            </div>

            <div class='p mt-1'>
                En caso de retraso en cualquiera de los pagos, el deudor incurrirá en mora, generando un interés moratorio del <span class='dato'><?=$prestamo->MORATORIO?>% (<?= $prestamo->MORATORIO_LETRA ?> por ciento) </span> 
                sobre el monto vencido, aplicable a partir del cuarto día natural posterior al vencimiento del pago incumplido.
            </div>

            <div class='p mt-1'>
                La cantidad resultante de los intereses podrá ser capitalizada de conformidad con el artículo 363 del Código de Comercio. 
                Las partes renuncian al fuero que por razón de su domicilio presente o futuro pudiera corresponderles y se someten expresamente a la jurisdicción de los tribunales competentes.
            </div>

            <div class='p mt-1'>
                Los Mochis, Sinaloa, México a <?= $fecha_hoy ?>.
            </div>
        </div>

        <div style='width: 100%;'>
            <div style='width: 50%; text-align: center; background-color: white; float: left'>
                <div class='w100 m0'><img style='width: 270px; height: 180px; ' src='data:image/png;base64, <?= base64_encode($firma_prestamo) ?>'/></div>
                <div class='w100 m0'><?= $prestamo->NOMBRE ?> <?= $prestamo->APELLIDO ?></div>
                <hr  style='width: 250px; margin-top: 5px; margin-bottom:0' />
                <div class='w100 m0'>Nombre y firma deudor</div>
            </div>
            <div style='width: 50%; text-align: center; background-color: white; float: right'>
                <div class='w100 m0'><img style='width: 270px; height: 180px; ' src='data:image/png;base64, <?= base64_encode($firma_admin) ?>'/></div>
                <div class='w100 m0'>Rosario Aguilar Santos</div>
                <hr  style='width: 250px; margin-top: 5px; margin-bottom:0' />
                <div class='w100 m0'>Nombre y firma acreedor</div>
            </div>
        </div>
        </div>
    </body>
</html>