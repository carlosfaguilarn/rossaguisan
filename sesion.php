<?php
    // Inicia manejo de sesion
    session_start();

    if(!isset($_SESSION["USER_ID"])){
        header("Location: /login.php");
    }
?>