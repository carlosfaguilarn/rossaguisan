<?php
    include_once('lib/Smarty/libs/smarty.class.php');
    include_once('class.usuarios.php');
    $title = "Login";
    $html = new Smarty;
    $obj_usuario = new Usuarios;

    if(isset($_POST['acceder'])){
        $usuario = $_POST['usuario'];
        $password = $_POST['password'];
        $user = $obj_usuario->Login($usuario, $password); 
        if(isset($user)){
            //print_r($user);
            session_start();
            $_SESSION['USER_ID'] = $user->id;
            $_SESSION['USER_USUARIO'] = $user->usuario;
            $_SESSION['USER_NOMBRE'] = $user->nombre;
            header("Location: /");
        }else{
            $html->assign('error_message', 'Usuario o contraseña incorrectos, intente de nuevo');
        }
    }
   
    $html->display('login.tpl');
?>