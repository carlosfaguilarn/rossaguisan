<?php
/**
 * CLASE QUE CONTIENE LOS MÉTODOS PARA DEL MÓDULO PRÉSTAMOS
 */
include_once 'conexion/conexion.class.php';

class Usuarios{ 
    function Login($user, $password){  
        try{  
            $bd = new BD;
            $conn =  $bd->conectar();  
 
            if (!$conn) {
                echo 'No pudo conectarse a mysql';
                exit;
            }
             
            $sql = "
                SELECT * FROM usuarios 
                WHERE usuario = '$user'
                AND PASSWORD = '$password'
            ";
            
            $resultado = mysqli_query($conn, $sql);
            
            if (!$resultado) {
                echo "Error de BD, no se pudo consultar la base de datos\n";
                echo "Error MySQL: " . mysqli_error($conn);
                exit;
            }
 
            $fila = (object) array();
            $fila = $resultado->fetch_object(); 
            //$fila->rows = mysqli_num_rows($resultado); ;
            
            return $fila;  
        }  
        catch(Exception $e){  
            echo("Error!");
            return "Error en la consulta";  
        }  
    }   
}