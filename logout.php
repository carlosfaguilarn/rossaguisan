<?php 
    session_start();
    // Terminar la sesión:
    session_destroy();
    header("Location: /login.php");
?>