<?php
/* Smarty version 3.1.36, created on 2020-09-07 03:41:43
  from 'C:\xampp\htdocs\templates\dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f558fd7bd9e31_37367808',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eedc767850c478c260a0bfcd62a4491ee62300cd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\templates\\dashboard.tpl',
      1 => 1599442881,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f558fd7bd9e31_37367808 (Smarty_Internal_Template $_smarty_tpl) {
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
        <button type="button" class="btn btn-sm btn-outline-secondary" hidden>Nuevo abono</button>
        <button type="button" class="btn btn-sm btn-outline-secondary" >Exportar</button>
    </div>
</div>
<div class="row justify-content-md-center">
    <div class="col-12 col-sm-6 col-xl-4 mb-4">
        <div class="card border-light shadow-sm">
            <div class="card-body" style="    min-height: 130px;">
                <div class="row d-block d-xl-flex align-items-center">
                    <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                        <div class="icon icon-shape icon-md icon-shape-primary rounded mr-4 mr-sm-0"><span class="fas fa-file-invoice-dollar"></span></div>
                        <div class="d-sm-none">
                            <h2 class="h5">Activo Corriente</h2>
                            <h3 class="mb-1 moneda"><?php echo $_smarty_tpl->tpl_vars['data']->value['saldos'];?>
</h3>
                        </div>
                    </div>
                    <div class="col-12 col-xl-7 px-xl-0" >
                        <div class="d-none d-sm-block">
                            <h2 class="h5">Activo Corriente</h2>
                            <h3 class="mb-1 moneda"><?php echo $_smarty_tpl->tpl_vars['data']->value['saldos'];?>
</h3>
                        </div>
                        <div class="small mt-2">                               
                            <span class="fas fa-angle-up text-success"></span>                                   
                            <span class="text-success font-weight-bold">5.2%</span> Más
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
                        <div class="icon icon-shape icon-md icon-shape-tertiary rounded mr-4"><span class="fas fa-dollar-sign"></span></div>
                        <div class="d-sm-none">
                            <h2 class="h5">Abonos</h2>
                            <h3 class="mb-1 moneda"><?php echo $_smarty_tpl->tpl_vars['ingresos']->value['ABONOS_MES'];?>
</h3>
                        </div>
                    </div>
                    <div class="col-12 col-xl-7 px-xl-0">
                        <div class="d-none d-sm-block">
                            <h2 class="h5">Abonos</h2>
                            <h3 class="mb-1 moneda"><?php echo $_smarty_tpl->tpl_vars['ingresos']->value['ABONOS_MES'];?>
</h3>
                        </div>
                        <div class="small mt-2">                               
                            <span class="fas fa-angle-<?php echo $_smarty_tpl->tpl_vars['statusAbonos']->value['icon'];?>
 text-<?php echo $_smarty_tpl->tpl_vars['statusAbonos']->value['text'];?>
"></span>                                   
                            <span class="text-<?php echo $_smarty_tpl->tpl_vars['statusAbonos']->value['text'];?>
 font-weight-bold"><?php echo $_smarty_tpl->tpl_vars['ingresos']->value['ABONOS_PORCENTAJE'];?>
</span>
                            <span class="text-<?php echo $_smarty_tpl->tpl_vars['statusAbonos']->value['text'];?>
 font-weight-bold">%</span> Más
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
                        <div class="icon icon-shape icon-md icon-shape-primary rounded mr-4"><span class="fas fa-chart-line"></span></div>
                        <div class="d-sm-none">
                            <h2 class="h5">Utilidades</h2>
                            <h3 class="mb-1 moneda"><?php echo $_smarty_tpl->tpl_vars['ingresos']->value['UTILIDAD_MES'];?>
</h3>
                        </div>
                    </div>
                    <div class="col-12 col-xl-7 px-xl-0">
                        <div class="d-none d-sm-block">
                            <h2 class="h5">Utilidades</h2>
                            <h3 class="mb-1 moneda"><?php echo $_smarty_tpl->tpl_vars['ingresos']->value['UTILIDAD_MES'];?>
</h3>
                        </div>
                        <div class="small mt-2">                               
                            <span class="fas fa-angle-<?php echo $_smarty_tpl->tpl_vars['statusUtilidad']->value['icon'];?>
 text-<?php echo $_smarty_tpl->tpl_vars['statusUtilidad']->value['text'];?>
"></span>                                   
                            <span class="text-<?php echo $_smarty_tpl->tpl_vars['statusUtilidad']->value['text'];?>
 font-weight-bold"><?php echo $_smarty_tpl->tpl_vars['ingresos']->value['UTILIDAD_PORCENTAJE'];?>
</span>
                            <span class="text-<?php echo $_smarty_tpl->tpl_vars['statusUtilidad']->value['text'];?>
 font-weight-bold">%</span> Más
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-xl-4 mb-4" hidden>
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
                            <div class="h6 font-weight-normal text-gray mb-2">Abonos hasta hoy</div>
                            <h2 class="h3" hidden></h2>
                            <div class="small mt-2" hidden>                               
                                <span class="fas fa-angle-up text-success"></span>                                   
                                <span class="text-success font-weight-bold">$10.57%</span>
                            </div>
                        </div> 
                    </div>
                    <div class="card-body p-2">
                        <div class="ct-chart-sales-value ct-major-tenth ct-series-b"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-12 col-xl-4 mb-4">
        <div class="card border-light shadow-sm">
            <div class="card-body d-flex flex-row align-items-center flex-0 border-bottom" style="min-height: 155px;">
                <div class="d-block">
                    <div class="h6 font-weight-normal text-gray mb-2">Clientes destacados</div>
                    <h2 class="h3 moneda"><?php echo $_smarty_tpl->tpl_vars['total_clientes_destacados']->value;?>
</h2>
                    <div class="small mt-2" hidden>                               
                        <span class="fas fa-angle-up text-success"></span>                                   
                        <span class="text-success font-weight-bold" ><?php echo $_smarty_tpl->tpl_vars['porcentaje_clientes_destacados']->value;?>
%</span>
                    </div>
                </div>
                <div class="d-block ml-auto">
                    <div class="d-flex align-items-center text-right mb-2">
                        <span class="shape-xs rounded-circle bg-primary mr-2"></span>
                        <span class="font-weight-normal small">Su préstamo</span>
                    </div>
                    <div class="d-flex align-items-center text-right">
                        <span class="shape-xs rounded-circle bg-secondary mr-2"></span>
                        <span class="font-weight-normal small">Total abonado</span>
                    </div>
                </div>
            </div>
            <div class="card-body p-2">
                <div class="ct-chart-ranking ct-golden-section ct-series-a"></div>
            </div>
        </div>
    </div>
</div> 
<?php }
}
