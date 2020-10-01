<?php
/**
 * CLASE QUE CONTIENE LOS MÉTODOS PARA DEL MÓDULO PRÉSTAMOS
 */

use PhpParser\Node\Expr\Cast\Object_;

include_once '../conexion/conexion.class.php';
include_once '../clientes/class.clientes.php';

class Prestamos{ 
    function GetAbonosPrestamo($prestamo_id){  
        try{  
            $bd = new BD;
            $conn =  $bd->conectar();  

            if (!$conn) {
                echo 'No pudo conectarse a mysql';
                exit;
            }
             
            $sql = "
            SELECT 
                abonos.ID AS 'ID', abonos.ABONO, abonos.FECHA, abonos.SALDO, 
                prestamos.ID AS 'PRESTAMO_ID', prestamos.IMPORTE, prestamos.FECHA_INICIO, prestamos.FECHA_FIN,
                clientes.ID AS 'CLIENTE_ID', clientes.NOMBRE as 'NOMBRE', clientes.APELLIDO as 'APELLIDO'     	  
            FROM `abonos` 
                
            JOIN prestamos ON prestamos.ID = abonos.PRESTAMO_ID
            JOIN clientes ON  clientes.ID = prestamos.CLIENTE_ID 
            
            WHERE 
                prestamos.ID = '$prestamo_id' AND 
                prestamos.FINALIZO = 'N' 
                
            ORDER BY abonos.`FECHA` ASC
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

    function GetPrestamos(){  
        try{  
            $bd = new BD;
            $conn = $bd->conectar();  

            if (!$conn) {
                echo 'No pudo conectarse a mysql';
                exit;
            }
             
            $sql = "
                SELECT prestamos.*, clientes.NOMBRE, clientes.APELLIDO,

                    -- Calcular el Saldo de cada prestamo
                    (
                        IMPORTE -  
                        -- Calcula el total de abonos del préstamo
                        (
                            SELECT 
                            if(sum(abonos.ABONO) IS NULL, 0, sum(abonos.ABONO))
                            FROM abonos
                            WHERE abonos.PRESTAMO_ID = prestamos.ID
                            
                        )                   
                    ) AS 'SALDO'

                FROM `prestamos` 
                JOIN clientes ON clientes.ID = prestamos.CLIENTE_ID 
                ORDER BY prestamos.FECHA_INICIO ASC
            ";
            
            $resultado = mysqli_query($conn, $sql);
            
            if (!$resultado) {
                echo "Error de BD, no se pudo consultar la base de datos\n";
                echo "Error MySQL: " . mysqli_error($conn);
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

    function GetAbonosCliente($cliente){  
        try{  
            $bd = new BD;
            $conn = $bd->conectar();  

            if (!$conn) {
                echo 'No pudo conectarse a mysql';
                exit;
            }
             
            $sql = "
                SELECT prestamos.*, 
                    clientes.NOMBRE, 
                    @prestamo := prestamos.ID,
                    (
                        SELECT 
                        IMPORTE - 
                        -- Calcula el total de abonos del préstamo
                        if(sum(abonos.ABONO) IS NULL, 0, sum(abonos.ABONO)) AS 'SALDO'	
                        FROM `prestamos` 
                        
                        LEFT JOIN abonos on abonos.PRESTAMO_ID = prestamos.ID
                        WHERE prestamos.ID = @prestamo
                    ) AS SALDO 
                FROM prestamos 
                LEFT JOIN clientes ON clientes.ID = prestamos.CLIENTE_ID  
                WHERE prestamos.CLIENTE_ID = $cliente
            ";
            
            $resultado = mysqli_query($conn, $sql);
            
            if (!$resultado) {
                echo "Error de BD, no se pudo consultar la base de datos\n";
                echo "Error MySQL: " . mysqli_error($conn);
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
 
    function RegistrarAbono($DATA){  
        try{  
            $bd = new BD;
            $conn =  $bd->conectar();  

            if (!$conn) {
                echo 'No pudo conectarse a mysql';
                exit;
            }
             
            $sql = "
            INSERT INTO `abonos`(`PRESTAMO_ID`, `ABONO`, `SALDO`, `FECHA`) 
            VALUES (
                ".$DATA['prestamo_id'].",
                ".$DATA['abono'].",
                ".$DATA['saldo'].",
                STR_TO_DATE('".$DATA['fecha']."', '%d/%m/%Y')
            )";
            
            $resultado = mysqli_query($conn, $sql);
            
            if (!$resultado) {
                echo "Error de BD, no se pudo consultar la base de datos\n";
                echo "Error MySQL: " . mysqli_error($conn);
                exit;
            }
 
            return $resultado;  
        }  
        catch(Exception $e){  
            echo("Error!");
            return "Error en la consulta";  
        }  
    }  

    function GetPrestamo($id){  
        try{  
            $bd = new BD;
            $conn =  $bd->conectar();  

            if (!$conn) {
                echo 'No pudo conectarse a mysql';
                exit;
            }
             
            $sql = "  
                SELECT prestamos.*, clientes.NOMBRE, clientes.APELLIDO,

                    -- Calcular el Saldo de cada prestamo
                    (SELECT prestamos.IMPORTE-SUM(abonos.ABONO) FROM `abonos` 
                    WHERE abonos.PRESTAMO_ID = prestamos.ID) AS 'SALDO'
                
                FROM `prestamos`  
                JOIN clientes ON clientes.ID = prestamos.CLIENTE_ID
                WHERE prestamos.ID = '$id'
                ORDER BY prestamos.FECHA_INICIO ASC
            ";
            
            $resultado = mysqli_query($conn, $sql);
            
            if (!$resultado) {
                echo "Error de BD, no se pudo consultar la base de datos\n";
                echo "Error MySQL: " . mysqli_error($conn);
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
    
    function GetSaldoPrestamo($id){  
        try{  
            $bd = new BD;
            $conn =  $bd->conectar();  

            if (!$conn) {
                echo 'No pudo conectarse a mysql';
                exit;
            }
             
            $sql = "
                SELECT 
                    IMPORTE - 
                    -- Calcula el total de abonos del préstamo
                    if(sum(abonos.ABONO) IS NULL, 0, sum(abonos.ABONO)) AS 'SALDO'	
                FROM `prestamos` 
                
                LEFT JOIN abonos on abonos.PRESTAMO_ID = prestamos.ID
                WHERE prestamos.ID = '$id'
            ";
            
            $resultado = mysqli_query($conn, $sql);
            
            if (!$resultado) {
                echo "Error de BD, no se pudo consultar la base de datos\n";
                echo "Error MySQL: " . mysqli_error($conn);
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

    function RegistrarPrestamo($DATA){  
        try{  
            $bd = new BD;
            $conn = $bd->conectar();  

            if (!$conn) {
                echo 'No pudo conectarse a mysql';
                exit;
            }

            // Registrar cliente si no viene el cliente_id
            if(!isset($DATA['cliente_id'])){
                $obj_clientes = new Clientes;
                $nuevo_cliente['nombre'] = $DATA['nombre'];
                $nuevo_cliente['apellido'] = $DATA['apellido'];
                $id_insertado = $obj_clientes->RegistrarCliente($nuevo_cliente);
                if(is_numeric($id_insertado)){
                    $DATA['cliente_id'] = $id_insertado;
                }
            }
             
            // Insertar el préstamo
            $sql = "
                INSERT INTO `prestamos`(
                     `CLIENTE_ID`, `PRESTAMO`, `IMPORTE`,
                     `FECHA_INICIO`, `FECHA_FIN`, `MESES`, `COMISION`, 
                     `ABONOS`, `PLAZOS`, `FINALIZO`
                ) VALUES ( 
                    ".$DATA['cliente_id'].", 
                    ".$DATA['prestamo'].", 
                    ".$DATA['importe'].", 
                    STR_TO_DATE('".$DATA['fecha_inicio']."', '%d/%m/%Y'),
                    STR_TO_DATE('".$DATA['fecha_fin']."', '%d/%m/%Y'),
                    ".$DATA['meses'].",
                    ".$DATA['comision']/100 .",
                    ".$DATA['abono'].",
                    ".$DATA['plazos'].",
                    'N'
                )";
            
            $resultado = new stdClass;
            $resultado->valida = mysqli_query($conn, $sql);
            $resultado->inserted = mysqli_insert_id($conn);
            
            if (!$resultado) {
                echo "Error de BD, no se pudo consultar la base de datos\n";
                echo "Error MySQL: " . mysqli_error($conn);
                exit;
            }
 
            return $resultado;  
        }  
        catch(Exception $e){  
            echo("Error!");
            return "Error en la consulta";  
        }  
    }  
}