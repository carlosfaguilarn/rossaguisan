<?php
/* Smarty version 3.1.36, created on 2020-08-28 00:44:08
  from 'C:\xampp\htdocs\Rocket\prestamos\templates\abonos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f483738a4c611_74869435',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76b465cfcfe8dc76fbc5ae5dbd589bc17e5c8059' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Rocket\\prestamos\\templates\\abonos.tpl',
      1 => 1598568240,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f483738a4c611_74869435 (Smarty_Internal_Template $_smarty_tpl) {
?> 
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
    <div class="d-block mb-4 mb-md-0">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="breadcrumb-item"><a href="prestamos.php?prestamo=<?php echo $_smarty_tpl->tpl_vars['prestamo']->value->ID;?>
">Préstamos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Abonos</li>
            </ol>
        </nav>
        <h2 class="h4">Cliente: <span class="text-primary"><?php echo $_smarty_tpl->tpl_vars['prestamo']->value->APELLIDO;?>
 <?php echo $_smarty_tpl->tpl_vars['prestamo']->value->NOMBRE;?>
 </span></h2>
        <p class="mb-0"> 
            Préstamo de <span class="moneda font-weight-bold"><?php echo $_smarty_tpl->tpl_vars['prestamo']->value->IMPORTE;?>
</span>. 
            Saldo actual: <span class="moneda font-weight-bold"><?php echo $_smarty_tpl->tpl_vars['prestamo']->value->SALDO;?>
</span>
        </p>
    </div>
    <div class="btn-toolbar mb-2 mb-md-0">
        <a class="btn btn-primary btn-sm mr-2" href="nuevo_abono.php?prestamo=<?php echo $_smarty_tpl->tpl_vars['prestamo']->value->ID;?>
" hidden>
            <span class="fas fa-plus mr-2"></span>Nuevo Abono
        </a>
        <div class="btn-group"> 
            <button type="button" class="btn btn-sm btn-outline-secondary" onclick="location.href='nuevo_abono.php?prestamo=<?php echo $_smarty_tpl->tpl_vars['prestamo']->value->ID;?>
'">Nuevo Abono</button>
            <button type="button" class="btn btn-sm btn-outline-secondary" onclick="modalReporteAbonos()">Exportar</button>
        </div>
    </div>
</div>
<div class="table-settings mb-4">
    <div class="row align-items-center justify-content-between">
        <div class="col col-md-6 col-lg-3 col-xl-4">
            <div class="input-group" hidden>
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
                <th class="border-0" hidden>Acciones</th> 
            </tr>
        </thead>
        <tbody>
            <!-- Item -->  
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['abonos']->value, 'abono', false, 'key');
$_smarty_tpl->tpl_vars['abono']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['abono']->value) {
$_smarty_tpl->tpl_vars['abono']->do_else = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['abono']->value->ID;?>
</td>
                    <td><span class="font-weight-normal moneda"><?php echo $_smarty_tpl->tpl_vars['abono']->value->ABONO;?>
 </span></td> 
                    <td><span class="font-weight-bold moneda"><?php echo $_smarty_tpl->tpl_vars['abono']->value->SALDO;?>
 </span></td>
                    <td><span class="font-weight-bold"><?php echo $_smarty_tpl->tpl_vars['abono']->value->FECHA;?>
 </span></td>
                    <td hidden>
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
        <div class="modal-body" style="min-height: 450px;">
            <p style="text-align: center;">
                <span style="font-weight: 700 !important;"> CRÉDITOS ROSSAGUISAN Y ASOCIADOS </span>
                <br />
                <span style="font-weight: 600 !important;"> Cambia tu deuda con nosotros y mejoramos tus intereses </span>
            </p>

            <span class="font-weight-bold">Nombre: </span>
            <?php echo $_smarty_tpl->tpl_vars['prestamo']->value->APELLIDO;?>
 <?php echo $_smarty_tpl->tpl_vars['prestamo']->value->NOMBRE;?>
 <br/>
            
            <span class="font-weight-bold">Préstamo: </span>
            <span class="moneda"> <?php echo $_smarty_tpl->tpl_vars['prestamo']->value->IMPORTE;?>
 </span><br/>

            <span class="font-weight-bold">Plazo: </span> 
            del <?php echo $_smarty_tpl->tpl_vars['prestamo']->value->FECHA_INICIO;?>
 al <?php echo $_smarty_tpl->tpl_vars['prestamo']->value->FECHA_FIN;?>


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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['abonos']->value, 'abono', false, 'key');
$_smarty_tpl->tpl_vars['abono']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['abono']->value) {
$_smarty_tpl->tpl_vars['abono']->do_else = false;
?>
                        <tr> 
                            <td><span class="font-weight-bold"><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
 </span></td> 
                            <td><span class="font-weight-bold moneda"><?php echo $_smarty_tpl->tpl_vars['abono']->value->ABONO;?>
 </span></td> 
                            <td><span class="font-weight-bold moneda"><?php echo $_smarty_tpl->tpl_vars['abono']->value->SALDO;?>
 </span></td>
                            <td data-field="fecha"><span class="font-weight-bold"><?php echo $_smarty_tpl->tpl_vars['abono']->value->FECHA;?>
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
            <a target="_blank" href="/Rocket/prestamos/pdf_abonos.php?prestamo=<?php echo $_smarty_tpl->tpl_vars['prestamo_id']->value;?>
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
