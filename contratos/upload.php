<?php
include_once '../prestamos/class.prestamos.php';

if (isset($_POST['imagen']) && isset($_POST['token'])) {
    $datos = base64_decode(
        preg_replace('/^[^,]*,/', '', $_POST['imagen'])
    );
    $token = $_POST['token']; 
    $prestamo_id = $token;
    file_put_contents("./firma/FIRMA_$prestamo_id.png", $datos);
    $prestamos = new Prestamos;
    $prestamos->UpdateContratoFirmado($prestamo_id);
    die('OK');
} else {
    echo "la peticion no contiene un archivo";
    print_r($_POST);
}