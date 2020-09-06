<?php
    $serverName = "sevafusa.redpacifico.com";
    $connectionInfo = array( "Database"=>"administrativo", "UID"=>"sa", "PWD"=>"N0p4rK3m");
    $conn = sqlsrv_connect( $serverName, $connectionInfo );
    if( $conn === false ) {
        //die( print_r( sqlsrv_errors(), true));
        echo "conexion rechazada <br />";
    }else{
        echo "conexion existosa <br />";
    }
 
    $sql = "
        EXEC VtayFacturado 
        @FEchaIni = '05/01/2020', 
        @FEchaFin = '05/30/2020', 
        @EstacionINI = 1733 
    "; 
    $params = array();
    $options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
    //$sqlfecha = "SELECT CONVERT(VARCHAR, GETDATE())  AS fecha";
    //$sqlCat = " ";
    //$stmt = sqlsrv_query( $conn, $sqlCat );
    //$stmt = sqlsrv_query( $conn, $sql, $params, $options );
    $EstacionINI = 1733;
    $FechaIni = '05/01/2020';
    $FEchaFin = '05/30/2020'; 
    $sql = "EXEC VtayFacturado @FechaIni = ?, @FEchaFin = ?, @EstacionINI = ?";
    $procedure_params = array(
        array($FechaIni, SQLSRV_PARAM_OUT),
        array($FEchaFin, SQLSRV_PARAM_OUT),
        array($EstacionINI, SQLSRV_PARAM_OUT)
    );
    $stmt = sqlsrv_prepare($conn, $sql, $procedure_params);
    if(!$stmt) {
        echo "error en la consulta! <br />";
        echo "<pre>";
        die( print_r( sqlsrv_errors(), true) );
        echo "</pre>";
    }else{
        echo "Consulta correcta... <br />";
    }
    echo "mostrando datos <br />"; 
    $cont=0;
    while($row = sqlsrv_fetch_array($stmt)){
        $cont++;
        echo $row[0]. " - " .$row[1]. " <br />"; 
    } 
    echo "<br /> Total: $cont";
    echo "<br /> STMT: $stmt";
    sqlsrv_free_stmt( $stmt);  
    sqlsrv_close( $conn); 
?>