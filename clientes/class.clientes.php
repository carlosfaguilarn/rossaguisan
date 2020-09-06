<?php
/**
 * CLASE QUE CONTIENE LOS MÉTODOS PARA DEL MÓDULO PRÉSTAMOS
 */
include_once '../conexion/conexion.class.php';

class Clientes{ 
    function GetClientes(){  
        try{  
            $bd = new BD;
            $conn = $bd->conectar();  

            if (!$conn) {
                echo 'No pudo conectarse a mysql';
                exit;
            }
             
            $sql = "
                SELECT * FROM clientes 
                ORDER BY `APELLIDO` ASC
            ";
            
            $resultado = mysqli_query($conn, $sql);
            
            if (!$resultado) {
                echo "Error de BD, no se pudo consultar la base de datos\n";
                echo "Error MySQL: " . mysqli_error();
                exit;
            }

            $array = array();  

            while($row = $resultado->fetch_object()){
                $array[] = $row; 
            }  
            
            return $array;  
        }  
        catch(Exception $e){  
            echo("Error!");
            return "Error en la consulta";  
        }  
    }   

    function GetCliente($id){  
        try{  
            $bd = new BD;
            $conn =  $bd->conectar();  

            if (!$conn) {
                echo 'No pudo conectarse a mysql';
                exit;
            }
             
            $sql = "
                SELECT * FROM clientes WHERE ID='$id'
            ";
            
            $resultado = mysqli_query($conn, $sql);
            
            if (!$resultado) {
                echo "Error de BD, no se pudo consultar la base de datos\n";
                echo "Error MySQL: " . mysqli_error();
                exit;
            }
 
            $fila = $resultado->fetch_object();
            
            return $fila;  
        }  
        catch(Exception $e){  
            echo("Error!");
            return "Error en la consulta";  
        }  
    }  

    /**
     * METODO QUE REGISTRA UN NUEVO CLIENTE Y RETORNA EL ID DEL REGISTRO CREADO
     * @param object $DATA contiene los datos a guardar (nombre, apellido)
     * @return int id del registro insertado
     */
    function RegistrarCliente($DATA){  
        try{  
            $bd = new BD;
            $conn = $bd->conectar();  

            if (!$conn) {
                echo 'No pudo conectarse a mysql';
                exit;
            } 
             
            $sql = "
                INSERT INTO `clientes`(
                     `NOMBRE`, `APELLIDO`
                ) VALUES ( 
                    '".$DATA['nombre']."', 
                    '".$DATA['apellido']."'                     
                )";
            
            $resultado = mysqli_query($conn, $sql);  
  
            if (!$resultado) {
                echo "Error de BD, no se pudo consultar la base de datos\n";
                echo "Error MySQL: " . mysqli_error($conn);
                echo "<br> $sql";
                exit;
            }
 
            return mysqli_insert_id($conn);  
        }  
        catch(Exception $e){  
            echo("Error!");
            return "Error en la consulta";  
        }  
    }
}