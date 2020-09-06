<?php
/**
 * CLASE QUE CONTIENE LOS MÉTODOS PARA DEL MÓDULO PRÉSTAMOS
 */
include_once 'conexion/conexion.class.php';

class Dashboard{ 
    function GetDashboard(){  
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
                        (SELECT PRESTAMO_ID, SUM(ABONO) as 'PAGOS', IMPORTE, IMPORTE-SUM(ABONO) AS 'SALDO'
                        FROM `abonos` 
                        JOIN prestamos ON prestamos.ID = abonos.PRESTAMO_ID
                        GROUP BY PRESTAMO_ID
                    ) A) AS 'saldos',
                    
                    -- Capital Rossaguisan en cuentas bancarias
                    (SELECT valor FROM `capital` WHERE ID='1') as 'capital_rossaguisan'
                FROM `prestamos`
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

    function GetIngresosMes($inicio, $fin){  
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
                WHERE abonos.FECHA >= '$inicio' AND FECHA <= '$fin'
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

    function GetIngresosAnual(){  
        try{  
            $bd = new BD;
            $conn = $bd->conectar();

            // Primer día del año actual
            $inicio = date('Y-01-01');

            // Ultimo día del mes actual
            $fin = date('Y-m-t');

            // Diferencia en meses de fechas inicio y fin
            $date1 = new DateTime($inicio);
            $date2 = new DateTime($fin);
            $diff = $date1->diff($date2);
            $noMeses = $diff->m;
 
            //Construir arreglo de fechas
            for($i=0; $i<$noMeses;$i++){
                // primer día del mes iterado, mes sin cero
                $firstDay = date('Y-') . ($i+1) . "-01";

                // Agregar cero al mes (si es necesario)
                $firstDay = date('Y-m-d', strtotime($firstDay));

                // Último día del mes iterado
                $lastDay = date('Y-m-t', strtotime($firstDay));

                // Guardar las fechas en el arreglo
                $fechas[$i]['firstDay'] = $firstDay;
                $fechas[$i]['lastDay'] = $lastDay;
            }
            
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
                    WHERE abonos.FECHA >= '$inicio' AND FECHA <= '$fin'
                ";
                
                $resultado = mysqli_query($conn, $sql);            
                $fila = $resultado->fetch_object();

                $data[$i] = $fila;
            }
            
            return $data;  
        }  
        catch(Exception $e){  
            echo("Error!");
            return "Error en la consulta";  
        }  
    }
}