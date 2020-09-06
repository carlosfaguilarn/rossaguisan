<?php
/* Smarty version 3.1.36, created on 2020-08-22 21:46:15
  from 'C:\xampp\htdocs\Rocket\abonos\templates\clientes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f417607e8c5b0_25816785',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ac08a568c67b3e7247f5a05de3e41e8d9297e97' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Rocket\\abonos\\templates\\clientes.tpl',
      1 => 1598125569,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f417607e8c5b0_25816785 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
    <div class="d-block mb-4 mb-md-0">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="breadcrumb-item"><a href="#"><span class="fas fa-home"></span></a></li>
                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Abonos</li>
            </ol>
        </nav>
        <h2 class="h4">Préstamos</h2>
        <p class="mb-0">Listado de préstamos registrados.</p>
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
                <th class="border-0">APELLIDO</th>						
                <th class="border-0">NOMBRE</th> 
            </tr>
        </thead>
        <tbody>
            <!-- Item -->  
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clientes']->value, 'cliente', false, 'key');
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
                        <span class="font-weight-normal"><?php echo $_smarty_tpl->tpl_vars['cliente']->value->APELLIDO;?>
 </span>
                    </td> 
                    <td><span class="font-weight-bold"><?php echo $_smarty_tpl->tpl_vars['cliente']->value->NOMBRE;?>
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
                                <a class="dropdown-item" href="abonos.php?cliente=<?php echo $_smarty_tpl->tpl_vars['cliente']->value->ID;?>
"><span class="fas fa-eye mr-2"></span>Ver sus abonos</a>
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
 
<?php echo '<script'; ?>
>
    function modalReporteAbonos(){
        $('#modal-advertencia').modal('show');
    }
<?php echo '</script'; ?>
><?php }
}
