<?php
/* Smarty version 3.1.36, created on 2020-08-22 21:11:23
  from 'C:\xampp\htdocs\Rocket\abonos\templates\listado.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f416ddb28a943_00974466',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b21c19212ade64bc892fbd43f005ef6b7115a5ec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Rocket\\abonos\\templates\\listado.tpl',
      1 => 1598123479,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f416ddb28a943_00974466 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
    <div class="d-block mb-4 mb-md-0">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="breadcrumb-item"><a href="#"><span class="fas fa-home"></span></a></li>
                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Abonos</li>
            </ol>
        </nav>
        <h2 class="h4">Abonos de <?php echo $_smarty_tpl->tpl_vars['apellido']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['cliente']->value;?>
</h2>
        <p class="mb-0">Listado de abonos de este cliente.</p>
    </div>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group">
            <button type="button" class="btn btn-sm btn-outline-secondary">Compartir</button>
            <button type="button" class="btn btn-sm btn-outline-secondary" onclick="modalReporteAbonos()">
                Exportar
            </button>
        </div>
    </div>
</div>
<div class="table-settings mb-4">
    <div class="row align-items-center justify-content-between">
        <div class="col col-md-6 col-lg-3 col-xl-4">
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><span class="fas fa-search"></span></span></div>
                <input class="form-control" id="searchInputdashboard1" placeholder="Search" type="text" aria-label="Dashboard user search">
            </div>
        </div>
        <div class="col-4 col-md-2 col-xl-1 pl-md-0 text-right">
            <div class="btn-group">
                <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="icon icon-sm icon-gray">
                        <span class="fas fa-cog"></span>
                    </span>
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu dropdown-menu-xs dropdown-menu-right">
                    <span class="dropdown-item font-weight-bold text-dark">Mostrar</span>
                    <a class="dropdown-item d-flex font-weight-bold" href="#">10 <span class="icon icon-small ml-auto"><span class="fas fa-check"></span></span></a>
                    <a class="dropdown-item font-weight-bold" href="#">20</a>
                    <a class="dropdown-item font-weight-bold" href="#">30</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card card-body border-light shadow-sm table-wrapper table-responsive pt-0">
    <table class="table table-hover">
        <thead>
            <tr>
                <th class="border-0">ID</th>
                <th class="border-0">Abono</th>						
                <th class="border-0">Saldo</th>
                <th class="border-0">Fecha</th> 
                <th class="border-0">Acciones</th> 
            </tr>
        </thead>
        <tbody>
            <!-- Item -->  
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['abonos']->value, 'cliente', false, 'key');
$_smarty_tpl->tpl_vars['cliente']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['cliente']->value) {
$_smarty_tpl->tpl_vars['cliente']->do_else = false;
?>
                <tr>
                    <td>
                        <a href="../invoice.html" class="font-weight-bold">
                            <?php echo $_smarty_tpl->tpl_vars['cliente']->value->ID;?>
 
                        </a>
                    </td>
                    <td>
                        <span class="font-weight-normal moneda"><?php echo $_smarty_tpl->tpl_vars['cliente']->value->ABONO;?>
 </span>
                    </td> 
                    <td><span class="font-weight-bold moneda"><?php echo $_smarty_tpl->tpl_vars['cliente']->value->SALDO;?>
 </span></td>
                    <td><span class="font-weight-bold text-warning"><?php echo $_smarty_tpl->tpl_vars['cliente']->value->FECHA;?>
 </span></td>
                    <td>
                        <div class="btn-group">
                            <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="icon icon-sm">
                                    <span class="fas fa-ellipsis-h icon-dark"></span>
                                </span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="../invoice.html"><span class="fas fa-eye mr-2"></span>Ver más detalles</a>
                                <a class="dropdown-item" href="#"><span class="fas fa-edit mr-2"></span>Editar</a>
                                <a class="dropdown-item text-danger" href="#"><span class="fas fa-trash-alt mr-2"></span>Remover</a>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table> 
</div> 

<div class="modal fade" id="modal-advertencia">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header" style="background-color: #fe9900;">
            <h4 class="modal-title" style="color: #FFFFFF !important;">Vista previa de la tarjeta</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #FFFFFF !important;">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <p style="text-align: center;">
                <span style="font-weight: 700 !important;"> CRÉDITOS ROSSAGUISAN Y ASOCIADOS </span>
                <br />
                <span style="font-weight: 600 !important;"> Cambia tu deuda con nosotros y mejoramos tus intereses </span>
            </p>

            <span class="font-weight-bold">Nombre: </span>
            <?php echo $_smarty_tpl->tpl_vars['apellido']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['cliente']->value;?>
 <br/>
            
            <span class="font-weight-bold">Préstamo: </span>
            <span class="moneda"> <?php echo $_smarty_tpl->tpl_vars['prestamo']->value;?>
 </span><br/>

            <span class="font-weight-bold">Plazo: </span> 
            del <?php echo $_smarty_tpl->tpl_vars['fecha_inicio']->value;?>
 al <?php echo $_smarty_tpl->tpl_vars['fecha_fin']->value;?>


            <br/><br/>
            <table class="tarjeta-abono">
                <thead style="background: #717171; color: #FFFFFF;">
                    <th>SEM</th>
                    <th>ABONO</th>
                    <th>SALDO</th>
                    <th>FECHA</th>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['abonos']->value, 'cliente', false, 'key');
$_smarty_tpl->tpl_vars['cliente']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['cliente']->value) {
$_smarty_tpl->tpl_vars['cliente']->do_else = false;
?>
                        <tr> 
                            <td><span class="font-weight-bold"><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
 </span></td> 
                            <td><span class="font-weight-bold moneda"><?php echo $_smarty_tpl->tpl_vars['cliente']->value->ABONO;?>
 </span></td> 
                            <td><span class="font-weight-bold moneda"><?php echo $_smarty_tpl->tpl_vars['cliente']->value->SALDO;?>
 </span></td>
                            <td data-field="fecha"><span class="font-weight-bold"><?php echo $_smarty_tpl->tpl_vars['cliente']->value->FECHA;?>
 </span></td>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        </div>
        <div class="modal-footer justify-content-end" style="background: #f2f2f2;">
            <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
            <a target="_blank" href="/Rocket/abonos/pdf_abonos.php?cliente=<?php echo $_smarty_tpl->tpl_vars['cliente_id']->value;?>
" type="button" class="btn btn-dark" >Generar PDF</a>
        </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


<?php echo '<script'; ?>
>
    function modalReporteAbonos(){
        $('#modal-advertencia').modal('show');
    }
<?php echo '</script'; ?>
><?php }
}
