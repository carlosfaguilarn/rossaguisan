<?php
/* Smarty version 3.1.36, created on 2020-09-02 23:40:13
  from 'C:\xampp\htdocs\Rocket\templates\dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f50113d4151b0_12212978',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6d1da31f187dce8c29709405c03ded9dd255cc4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Rocket\\templates\\dashboard.tpl',
      1 => 1599082778,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f50113d4151b0_12212978 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
    <div class="btn-toolbar" style="margin-bottom: 10px;">
        <button class="btn btn-primary btn-sm mr-2 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" hidden>
            <span class="fas fa-plus mr-2"></span>Nuevo Préstamo
        </button>
        <button class="btn btn-primary btn-sm mr-2 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" hidden>
            <span class="fas fa-plus mr-2"></span>Nuevo Abono
        </button>
        <div class="dropdown-menu dashboard-dropdown dropdown-menu-left mt-2" hidden>
            <a class="dropdown-item font-weight-bold" href="#"><span class="fas fa-tasks mr-2"></span>New Task</a>
            <a class="dropdown-item font-weight-bold" href="#"><span class="fas fa-cloud-upload-alt mr-2"></span>Upload Files</a>
            <a class="dropdown-item font-weight-bold" href="#"><span class="fas fa-user-shield mr-2"></span>Preview Security</a>
            <div role="separator" class="dropdown-divider"></div>
            <a class="dropdown-item font-weight-bold" href="#"><span class="fas fa-rocket text-danger mr-2"></span>Upgrade to Pro</a>
        </div>
    </div>
    <div class="btn-group mr-2">
        <button type="button" class="btn btn-sm btn-outline-secondary" onclick="location.href='prestamos/nuevo_prestamo.php'">Nuevo préstamo</button>
        <button type="button" class="btn btn-sm btn-outline-secondary" >Nuevo abono</button>
        <button type="button" class="btn btn-sm btn-outline-secondary" >Exportar</button>
    </div>
</div>
<div class="row justify-content-md-center">
    <div class="col-12 col-sm-6 col-xl-4 mb-4">
        <div class="card border-light shadow-sm">
            <div class="card-body">
                <div class="row d-block d-xl-flex align-items-center">
                    <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                        <div class="icon icon-shape icon-md icon-shape-primary rounded mr-4 mr-sm-0"><span class="fas fa-file-invoice-dollar"></span></div>
                        <div class="d-sm-none">
                            <h2 class="h5">Activo Corriente</h2>
                            <h3 class="mb-1 moneda"><?php echo $_smarty_tpl->tpl_vars['data']->value['saldos'];?>
</h3>
                        </div>
                    </div>
                    <div class="col-12 col-xl-7 px-xl-0" style="min-height: 132px;">
                        <div class="d-none d-sm-block">
                            <h2 class="h5">Activo Corriente</h2>
                            <h3 class="mb-1 moneda"><?php echo $_smarty_tpl->tpl_vars['data']->value['saldos'];?>
</h3>
                        </div>
                        <div class="small mt-2" hidden>                               
                            <span class="fas fa-angle-up text-success"></span>                                   
                            <span class="text-success font-weight-bold">5.2%</span> Más que el mes pasado
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-xl-4 mb-4">
        <div class="card border-light shadow-sm">
            <div class="card-body">
                <div class="row d-block d-xl-flex align-items-center">
                    <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                        <div class="icon icon-shape icon-md icon-shape-tertiary rounded mr-4"><span class="fas fa-chart-line"></span></div>
                        <div class="d-sm-none">
                            <h2 class="h5">Ingresos mes actual</h2>
                            <span class="fas fa-file-invoice-dollar text-success"></span>&nbsp;&nbsp;<span class="mb-1 moneda"> <?php echo $_smarty_tpl->tpl_vars['ingresos']->value['ABONOS_MES'];?>
</span> <br />
                            <span class="fas fa-hand-holding-usd text-success"></span>&nbsp;&nbsp;<span class="mb-1 moneda"><?php echo $_smarty_tpl->tpl_vars['ingresos']->value['UTILIDAD_MES'];?>
</span>
                        </div>
                    </div>
                    <div class="col-12 col-xl-7 px-xl-0">
                        <div class="d-none d-sm-block">
                            <h2 class="h5">Ingresos mes actual</h2>
                            <h6 class="font-weight-normal text-gray">
                                <span class="icon w-20 icon-xs icon-secondary mr-1" ><span class="fas fa-file-invoice-dollar"></span></span> Abonos 
                                <div>
                                    <span class="h6 moneda" ><?php echo $_smarty_tpl->tpl_vars['ingresos']->value['ABONOS_MES'];?>
</span>
                                    <span class="small mt-2" >                               
                                        <span class="fas fa-angle-<?php echo $_smarty_tpl->tpl_vars['statusAbonos']->value['icon'];?>
 text-<?php echo $_smarty_tpl->tpl_vars['statusUtilidad']->value['text'];?>
"></span>                                   
                                        <span class="text-<?php echo $_smarty_tpl->tpl_vars['statusAbonos']->value['text'];?>
 font-weight-bold"><?php echo $_smarty_tpl->tpl_vars['ingresos']->value['ABONOS_PORCENTAJE'];?>
</span>
                                        <span class="text-<?php echo $_smarty_tpl->tpl_vars['statusAbonos']->value['text'];?>
 font-weight-bold">%</span>
                                    </span>  
                                </div>
                            </h6>
                            <h6 class="font-weight-normal text-gray">
                                <span class="icon w-20 icon-xs icon-primary mr-1"><span class="fas fa-hand-holding-usd"></span></span> Utilidad 
                                <div>  
                                    <span class="h6 moneda"><?php echo $_smarty_tpl->tpl_vars['ingresos']->value['UTILIDAD_MES'];?>
</span>                             
                                    <span class="small mt-2">
                                        <span class="fas fa-angle-<?php echo $_smarty_tpl->tpl_vars['statusUtilidad']->value['icon'];?>
 text-<?php echo $_smarty_tpl->tpl_vars['statusUtilidad']->value['text'];?>
"></span>                                   
                                        <span class="text-<?php echo $_smarty_tpl->tpl_vars['statusUtilidad']->value['text'];?>
 font-weight-bold"><?php echo $_smarty_tpl->tpl_vars['ingresos']->value['UTILIDAD_PORCENTAJE'];?>
</span>
                                        <span class="text-<?php echo $_smarty_tpl->tpl_vars['statusUtilidad']->value['text'];?>
 font-weight-bold">%</span>
                                    </span>
                                </div>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-xl-4 mb-4" >
        <div class="card border-light shadow-sm">
            <div class="card-body">
                <div class="row d-block d-xl-flex align-items-center">
                    <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                        <div class="ct-chart-traffic-share ct-golden-section ct-series-a"></div>
                    </div>
                    <div class="col-12 col-xl-7 px-xl-0"  style="min-height: 131px;">
                        <h2 class="h5">Capital Disponible</h2>
                        <h6 class="font-weight-normal text-gray"><span class="icon w-20 icon-xs icon-secondary mr-1"><span class="fas fa-desktop"></span></span> Saldos <a href="#" class="h6 moneda"><?php echo $_smarty_tpl->tpl_vars['data']->value['saldos'];?>
</a></h6>
                        <h6 class="font-weight-normal text-gray"><span class="icon w-20 icon-xs icon-primary mr-1"><span class="fas fa-mobile-alt"></span></span> Banco <a href="#" class="h6 moneda"><?php echo $_smarty_tpl->tpl_vars['data']->value['capital_rossaguisan'];?>
</a></h6>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>
     
<div class="row">
    <div class="col-12 col-xl-8 mb-4">
        <div class="row">
            <div class="col-12 mb-4">
                <div class="card border-light shadow-sm">
                    <div class="card-body d-flex flex-row align-items-center flex-0 border-bottom">
                        <div class="d-block">
                            <div class="h6 font-weight-normal text-gray mb-2">Ventas</div>
                            <h2 class="h3">10,567</h2>
                            <div class="small mt-2">                               
                                <span class="fas fa-angle-up text-success"></span>                                   
                                <span class="text-success font-weight-bold">$10.57%</span>
                            </div>
                        </div>
                        <div class="d-flex ml-auto">
                            <a href="#" class="btn btn-tertiary btn-sm mr-3">Month</a>
                            <a href="#" class="btn btn-white border-light btn-sm mr-3">Week</a>
                        </div>
                    </div>
                    <div class="card-body p-2">
                        <div class="ct-chart-sales-value ct-major-tenth ct-series-b"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
<?php }
}
