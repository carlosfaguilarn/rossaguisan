<?php
/* Smarty version 3.1.36, created on 2020-09-04 19:12:34
  from 'C:\xampp\htdocs\clientes\templates\clientes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f527582b4b633_77172296',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b067952f69f18381a4648bb3713a499c3a3a437c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clientes\\templates\\clientes.tpl',
      1 => 1599239553,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f527582b4b633_77172296 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
    <div class="d-block mb-4 mb-md-0">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
            </ol>
        </nav>
        <h2 class="h4">Clientes</h2>
        <p class="mb-0">Listado de clientes registrados.</p>
    </div>
    <div class="btn-toolbar mb-2 mb-md-0" hidden>
        <div class="btn-group">
            <button type="button" class="btn btn-sm btn-outline-secondary" onclick="location.href='nuevo_prestamo.php'">Nuevo cliente</button>
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
                <input class="form-control" id="search" placeholder="Buscar" onkeyup="myFunction()">
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
    <table class="table table-hover table-search">
        <thead>
            <tr>
                <th class="border-0">ID</th> 
                <th class="border-0">APELLIDO</th> 
                <th class="border-0">NOMBRE</th> 
                <th class="border-0">ACCIONES</th> 
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
                <tr style="cursor: pointer;">
                    <td><?php echo $_smarty_tpl->tpl_vars['cliente']->value->ID;?>
</td> 
                    <td><span class="font-weight-normal"><?php echo $_smarty_tpl->tpl_vars['cliente']->value->APELLIDO;?>
 </span></td> 
                    <td><span class="font-weight-normal"><?php echo $_smarty_tpl->tpl_vars['cliente']->value->NOMBRE;?>
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
                                <a class="dropdown-item" href="../prestamos/index.php?search=(<?php echo $_smarty_tpl->tpl_vars['cliente']->value->ID;?>
) <?php echo $_smarty_tpl->tpl_vars['cliente']->value->NOMBRE;?>
 <?php echo $_smarty_tpl->tpl_vars['cliente']->value->APELLIDO;?>
"><span class="fas fa-list mr-2"></span>Ver sus Préstamos</a>
                                <a class="dropdown-item" href="../prestamos/nuevo_prestamo.php?cliente=<?php echo $_smarty_tpl->tpl_vars['cliente']->value->ID;?>
"><span class="fas fa-plus mr-2"></span>Agregar Préstamo</a>
                                <a class="dropdown-item text-danger" href="#" hidden><span class="fas fa-trash-alt mr-2"></span>Remover</a>
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
>

<?php echo '<script'; ?>
>
    function myFunction() {
        // Declare variables
        var input, filter, table, tr, tds, td, i, j, txtValue;
        table = document.getElementsByClassName("table-search")[0];
        input = document.getElementById("search");
        filter = input.value.toUpperCase();
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[5];
            if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
            }       
        }
    }
<?php echo '</script'; ?>
><?php }
}
