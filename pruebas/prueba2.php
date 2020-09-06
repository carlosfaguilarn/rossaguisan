<?php
    $serverName = "sevafusa.redpacifico.com";
    $connectionInfo = array( "Database"=>"administrativo", "UID"=>"sa", "PWD"=>"N0p4rK3m");

    $conn = new PDO('sqlsrv:Server=sevafusa.redpacifico.com;Database=administrativo', 'sa', 'N0p4rK3m', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $conn->setAttribute(constant('PDO::SQLSRV_ATTR_DIRECT_QUERY'), true);  

    $estacion = 1733;
    $inicio = '01/05/2020 00:00:00.000';
    $fin = '30/05/2020 23:59:59.000'; 
    $sqlsp = "
        Declare @FEchaIni Datetime
        Declare @FEchaFin DateTime
        Declare @EstacionINI int

        Select @FEchaIni=CONVERT(DATETIME, '$inicio', 103)
        Select @FEchaFin=CONVERT(DATETIME, '$fin', 103)
        select @EstacionINI=$estacion

        SET NOCOUNT ON
        EXEC VtayFacturado @FEchaIni, @FEchaFin, @EstacionINI 
    "; 
    
    $res = $conn->query($sqlsp);
    print_r($res->fetch());
 
?>