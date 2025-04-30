<html>
<head>
<link rel="stylesheet" type="text/css" href="./estilos.css" media="screen" />
<title>Contratos</title>
<script src="./jquery-3.6.0.min.js"></script>




</head>
 
<body>
    <?php
        include_once '../prestamos/class.prestamos.php';
        $token = "";
        if(isset($_GET['token'])){
            $token = base64_decode($_GET['token']);
            $obj_prestamo = new Prestamos();
            $prestamo = $obj_prestamo->GetPrestamo($token);
        }
    ?> 

    <h1 class="title">Firmar contrato</h1>
    <p class="datos">Cliente: <?php echo $prestamo->NOMBRE." ".$prestamo->APELLIDO ?></p>
    <p class="datos">Préstamo: $<span id="prestamo"><?php echo $prestamo->IMPORTE ?> </span></p>
    <body>
        <?php if(!$prestamo->FIRMADO):  ?>
	        <canvas id="canvas"></canvas>
            <div class="footer">
                <a type="button" class="button borrar" id="borrar" >
                    <img src="limpiar.png" style="width: 100%" />
                </a>

                <a type="button" class="button guardar" download="canvas.png" id="guardar">
                    <img src="guardar.png" style="width: 100%" />
                </a> 
            </div>
        <?php else: ?>
            <div class="ya_firmado">
                <p>Este contrato ya ha sido firmado</p>
            </div>
        <?php endif ?>
    </body>

    <input id="token" value='<?php echo $token ?>' hidden /> 
	<script> 
        var prestamo = document.getElementById("prestamo");
        prestamo.innerHTML = new Intl.NumberFormat("en-IN").format(prestamo.innerHTML)
    </script> 
	<script src="./util.js"> </script> 
</body>
</html>