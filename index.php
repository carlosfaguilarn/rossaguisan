<?php
    include_once('lib/Smarty/libs/smarty.class.php');
    include_once('class.dashboard.php');
    include_once('sesion.php');
    $title = "Dashboard";
    $html = new Smarty;
    $obj_dashboard = new Dashboard;

    $data = $obj_dashboard->GetDashboard(); 

     
    $fecha_actual = getdate();

    $firstDay = date('Y-m-01');
    $hoy = date('Y-m-d');
    $lastDay = date("Y-m-t"); 
    $fechaMesPasadoFirst = date("Y-m-d", strtotime("-1 month", strtotime($firstDay)));
    $fechaMesPasadoLast = date("Y-m-t", strtotime($fechaMesPasadoFirst));

    $data_anual = $obj_dashboard->GetIngresosAnual();
    //print_r($data_anual);
   
    //$ingresos = $obj_dashboard->GetIngresosMes('2020-08-01', '2020-08-31');  
    //$mes_pasado = $obj_dashboard->GetIngresosMes('2020-07-01', '2020-07-31');  
    $ingresos = $obj_dashboard->GetIngresosMes($firstDay, $lastDay);  
    $mes_pasado = $obj_dashboard->GetIngresosMes($fechaMesPasadoFirst, $fechaMesPasadoLast);  
    $ingresos['UTILIDAD_PORCENTAJE'] = round(($ingresos['UTILIDAD_MES'] / $mes_pasado['UTILIDAD_MES'] * 100-100), 2);
    $ingresos['ABONOS_PORCENTAJE']   = round(($ingresos['ABONOS_MES'] / $mes_pasado['ABONOS_MES'] * 100-100), 2);

    //Para el color de letra e ícono de utilidades
    $statusUtilidad['text'] = "success";
    $statusUtilidad['icon'] = "up";
    if($ingresos['UTILIDAD_PORCENTAJE'] < 0) {
        $statusUtilidad['text'] = "danger";
        $statusUtilidad['icon'] = "down";
        $ingresos['UTILIDAD_PORCENTAJE'] *= -1; 
    }

    //Para el color de letra e ícono de abonos
    $statusAbonos['text'] = "success";
    $statusAbonos['icon'] = "up";
    if($ingresos['ABONOS_PORCENTAJE'] < 0) {
        $statusAbonos['text'] = "danger";
        $statusAbonos['icon'] = "down";
        $ingresos['ABONOS_PORCENTAJE'] *= -1;
    }

    $html->assign('title', $title);   
    $html->assign('data', $data);   
    $html->assign('data_anual', $data_anual);   
    $html->assign('ingresos', $ingresos);   
    $html->assign('statusUtilidad', $statusUtilidad);   
    $html->assign('statusAbonos', $statusAbonos);   
    $html->assign('porcentaje_abonado', $data['porcentaje']);   
    $html->assign('porcentaje_pendiente', 100-$data['porcentaje']);   
    $html->assign('opcion_actual', "opcion_dashboard");
    $html->assign('section', 'dashboard.tpl'); //Muestra módulo dashboard por default
    $html->display('index.tpl');
?>