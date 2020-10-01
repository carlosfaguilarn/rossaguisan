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
    $data_clientes_destacados = $obj_dashboard->GetClientesDestacados();

    $total_clientes_destacados = 
        $data_clientes_destacados[0]->TOTAL + 
        $data_clientes_destacados[1]->TOTAL + 
        $data_clientes_destacados[2]->TOTAL;

    $porcentaje_clientes_destacados = $total_clientes_destacados / $data['saldos'] * 100;

    $html->assign('title', $title);    
    $html->assign('data', $data);   
    $html->assign('data_anual', $data_anual);   
    $html->assign('data_clientes_destacados', $data_clientes_destacados);   
    $html->assign('total_clientes_destacados', $total_clientes_destacados);   
    $html->assign('porcentaje_clientes_destacados', $total_clientes_destacados);   
    $html->assign('ingresos', $ingresos);   
    $html->assign('statusUtilidad', $statusUtilidad);   
    $html->assign('statusAbonos', $statusAbonos);   
    $html->assign('porcentaje_abonado', $data['porcentaje']);   
    $html->assign('porcentaje_pendiente', 100-$data['porcentaje']);   
    $html->assign('opcion_actual', "opcion_dashboard");
    $html->assign('section', 'dashboard.tpl'); //Muestra módulo dashboard por default
    $html->display('index.tpl');
?>