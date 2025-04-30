<?php
/**
 * CLASE QUE CONTIENE LOS MÉTODOS PARA DEL MÓDULO PRÉSTAMOS
 */
include_once 'conexion/conexion.class.php';
include_once $_SERVER["DOCUMENT_ROOT"] . '/clientes/class.clientes.php'; 
include_once $_SERVER["DOCUMENT_ROOT"] . '/class.usuarios.php';

class Dashboard{ 
    function GetDashboard($socio_id){  
        try{  
            $bd = new BD;
            $conn =  $bd->conectar();  

            if (!$conn) {
                echo 'No pudo conectarse a mysql';
                exit;
            }
             
            $sql = "
            SELECT 
                SUM(IMPORTE) as activo_corriente,
            
                SUM((IF(PRESTAMO = '', IMPORTE/(1+(COMISION/100)), PRESTAMO)) * COMISION / 100 ) as utilidades, 
            
                (SELECT SUM(ABONO) as 'total_abono' FROM `abonos`) as 'abonos',
            
                (SUM(IMPORTE) - (SELECT SUM(ABONO) as 'total_abono' FROM `abonos`)) as 'pendiente',
            
            
                ((SELECT SUM(ABONO) as 'total_abono' FROM `abonos`) /
                    (SUM(IMPORTE) - (SELECT SUM(ABONO) as 'total_abono' FROM `abonos`))
                    * 100
                ) as 'porcentaje',
            
                -- Saldos
                (SELECT SUM(SALDO) AS 'SALDOS' FROM
                    (
                        SELECT IF(SUM(abonos.ABONO) IS NULL, prestamos.IMPORTE, prestamos.IMPORTE-SUM(abonos.ABONO)) AS 'SALDO'
                            FROM `prestamos` 
                            LEFT JOIN abonos ON abonos.PRESTAMO_ID = prestamos.ID
                        WHERE prestamos.FINALIZO = 'N' and socio_id = $socio_id
                        GROUP BY prestamos.ID
                    ) A
                ) AS 'saldos',
            
                -- Capital Rossaguisan en cuentas bancarias
                (SELECT valor FROM `capital` WHERE ID='1') as 'capital_rossaguisan',
            
                COUNT(prestamos.ID) AS 'prestamos',
            
                sum(abonos*4) AS 'meta_abonos' 
                FROM `prestamos`
                WHERE finalizo='N' and socio_id = $socio_id
            ";
            $resultado = mysqli_query($conn, $sql);
            
            if (!$resultado) {
                echo "Error de BD, no se pudo consultar la base de datos\n";
                echo "Error MySQL: " . mysqli_error($conn);
                exit;
            }

            $fila = mysqli_fetch_assoc($resultado);

            $obj_clientes = new Clientes; 
            $obj_usuarios = new Usuarios; 

            $fila['clientes_activos'] = count($obj_clientes->GetClientesActivos($socio_id));
            $fila['usuarios'] = count($obj_usuarios->GetUsuarios());
             
            return $fila;  
        }  
        catch(Exception $e){  
            echo("Error!");
            return "Error en la consulta";  
        }  
    }  

    function GetIngresosMes($inicio, $fin, $socio_id){  
        try{  
            $bd = new BD;
            $conn =  $bd->conectar();  

            if (!$conn) {
                echo 'No pudo conectarse a mysql';
                exit;
            }
             
            $sql = "
                SELECT  
                    SUM((prestamos.IMPORTE-prestamos.PRESTAMO) / prestamos.PLAZOS) as 'UTILIDAD_MES',
                    sum(abonos.ABONO) as 'ABONOS_MES'
                FROM `abonos` 
                JOIN prestamos on prestamos.ID = abonos.PRESTAMO_ID
                WHERE abonos.FECHA >= '$inicio' AND abonos.FECHA <= '$fin' AND prestamos.SOCIO_ID = $socio_id
            ";
            
            $resultado = mysqli_query($conn, $sql);
            
            if (!$resultado) {
                echo "Error de BD, no se pudo consultar la base de datos\n";
                echo "Error MySQL: " . mysqli_error($conn);
                exit;
            }
 
            $fila = mysqli_fetch_assoc($resultado);
            
            return $fila;  
        }  
        catch(Exception $e){  
            echo("Error!");
            return "Error en la consulta";  
        }  
    }

    function GetIngresosAnual($socio_id){  
        try{  
            $bd = new BD;
            $conn = $bd->conectar();
            
            // cantidad de meses para calcular retrospectiva
            $noMeses = 12;

            // objeto de fecha actual  
            $hoy = new DateTime(date('Y-m-d'));

            // Obtener primer día del mes actual
            $hoy->modify('first day of this month');

            // Guardar en última posición del arreglo
            $fechas[$noMeses]['firstDay'] = $hoy->format('Y-m-d');

            // Obtener último día del mes actual
            $hoy->modify('last day of this month');

            // Guardar en última posición del arreglo
            $fechas[$noMeses]['lastDay'] = $hoy->format('Y-m-d');

            // llenar arreglo de fechas
            for($i=$noMeses-1; $i>=0; $i--){
                // Obtener fecha anterior y restar 1 mes 
                $fecha = date('Y-m-d', strtotime('-1 month', strtotime($fechas[$i+1]['firstDay'])));
                
                // Crear objeto de fecha iterada
                $fecha = new DateTime($fecha);

                // Obtener primer día del mes y guardar en arreglo
                $fecha->modify('first day of this month');
                $fechas[$i]['firstDay'] = $fecha->format('Y-m-d');

                // Obtener último día del mes y guardar en arreglo
                $fecha->modify('last day of this month');
                $fechas[$i]['lastDay'] = $fecha->format('Y-m-d');
            }
            
            $data = [];
            // Ejecutar query para recuperar datos 
            for($i=0; $i<$noMeses; $i++){  
                $inicio = $fechas[$i]['firstDay'];
                $fin = $fechas[$i]['lastDay'];

                $sql = "
                    SELECT  
                        SUM((prestamos.IMPORTE-prestamos.PRESTAMO) / prestamos.PLAZOS) as 'UTILIDAD_MES',
                        sum(abonos.ABONO) as 'ABONOS_MES'
                    FROM `abonos` 
                    JOIN prestamos on prestamos.ID = abonos.PRESTAMO_ID 
                    WHERE abonos.FECHA >= '$inicio' AND abonos.FECHA <= '$fin' AND prestamos.SOCIO_ID = $socio_id 
                ";
                
                $resultado = mysqli_query($conn, $sql);            
                $fila = $resultado->fetch_object();

                if(isset($fila->UTILIDAD_MES) && isset($fila->ABONOS_MES)){
                    $data[] = $fila;
                }
            }
            
            return $data;  
        }  
        catch(Exception $e){  
            echo("Error!");
            return "Error en la consulta";  
        }  
    }

    function GetPrestamosMes($socio_id){  
        try{  
            $bd = new BD;
            $conn = $bd->conectar();
             
            // Crear objeto de fecha iterada
            $fecha = new DateTime(date('Y-m-d'));

            // Obtener primer día del mes y guardar en arreglo
            $inicio = ($fecha->modify('first day of this month'))->format('Y-m-d');
            $fin    = ($fecha->modify('last day of this month'))->format('Y-m-d');

            $data = [];
            // Ejecutar query para recuperar datos 
            $sql = "
                SELECT * FROM prestamos 
                WHERE prestamos.FECHA >= '$inicio' && prestamos.FECHA <= '$fin'
                AND SOCIO_ID = '$socio_id'
            ";
            
            $resultado = mysqli_query($conn, $sql);                      
            while($row = $resultado->fetch_object()){
                $data[] = $row; 
            } 
            
            return $data;  
        }  
        catch(Exception $e){  
            echo("Error!");
            return "Error en la consulta";  
        }  
    }

    function GetClientesDestacados(){  
        try{  
            $bd = new BD;
            $conn = $bd->conectar();  

            if (!$conn) {
                echo 'No pudo conectarse a mysql';
                exit;
            }
             
            $sql = "
                SELECT 
                CLIENTE_ID,
                SUM(IMPORTE) AS TOTAL,  
                CONCAT(clientes.NOMBRE,' ', clientes.APELLIDO) AS NOMBRE,
                @cliente := CLIENTE_ID,
                    
                    (SELECT SUM(ABONO) FROM abonos 
                        LEFT JOIN prestamos ON prestamos.ID = abonos.PRESTAMO_ID
                        LEFT JOIN clientes ON clientes.ID = prestamos.CLIENTE_ID
                        WHERE clientes.ID = @cliente
                        ) AS 'ABONADO'
                        
                FROM prestamos 
                    
                LEFT JOIN clientes ON clientes.ID = prestamos.CLIENTE_ID
                
                GROUP BY CLIENTE_ID 
                ORDER BY SUM(IMPORTE) DESC 
                LIMIT 3
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
}

