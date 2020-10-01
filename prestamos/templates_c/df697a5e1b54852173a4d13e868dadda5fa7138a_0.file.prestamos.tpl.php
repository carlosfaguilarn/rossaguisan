<?php
/* Smarty version 3.1.36, created on 2020-09-18 16:54:25
  from 'C:\xampp\htdocs\prestamos\templates\prestamos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f64ca21385442_86453150',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df697a5e1b54852173a4d13e868dadda5fa7138a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestamos\\templates\\prestamos.tpl',
      1 => 1600440840,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f64ca21385442_86453150 (Smarty_Internal_Template $_smarty_tpl) {
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
        <button type="button" class="btn btn-sm btn-outline-secondary" onclick="location.href='nuevo_prestamo.php'">Nuevo préstamo</button>
        <div class="btn-group">
            <button type="button" class="btn btn-sm btn-outline-secondary" onclick="window.open('pdf_prestamos.php', '_blank')" hidden>Exportar</button>
        </div>
    </div>
</div>
<div class="table-settings mb-4">
    <div class="row align-items-center justify-content-between">
        <div class="col col-md-6 col-lg-3 col-xl-4">
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><span class="fas fa-search"></span></span></div>
                <input class="form-control" id="search" placeholder="Buscar" onkeyup="myFunction()" value="<?php if ((isset($_smarty_tpl->tpl_vars['search']->value))) {
echo $_smarty_tpl->tpl_vars['search']->value;
}?>">
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
<div class="card card-body border-light shadow-sm table-wrapper table-responsive pt-0 padding-0">
    <table class="table table-hover table-search tabla">
        <thead>
            <tr>
                <th class="border-0">ID</th> 
                <th class="border-0">IMPORTE</th> 
                <th class="border-0">SALDO ACTUAL</th> 
                <th class="border-0">INICIO</th> 
                <th class="border-0">FINALIZACION</th> 
                <th class="border-0">COMISION</th> 
                <th class="border-0">CLIENTE</th>	 
                <th class="border-0" hidden>ACCIONES</th> 
            </tr>
        </thead>
        <tbody> 
            <!-- Item -->  
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['prestamos']->value, 'prestamo', false, 'key');
$_smarty_tpl->tpl_vars['prestamo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['prestamo']->value) {
$_smarty_tpl->tpl_vars['prestamo']->do_else = false;
?>
                <tr style="cursor: pointer;" onclick="location.href='abonos.php?prestamo=<?php echo $_smarty_tpl->tpl_vars['prestamo']->value->ID;?>
'">
                    <td><?php echo $_smarty_tpl->tpl_vars['prestamo']->value->ID;?>
</td> 
                    <td><span class="font-weight-normal moneda"><?php echo $_smarty_tpl->tpl_vars['prestamo']->value->IMPORTE;?>
 </span></td> 
                    <td><span class="font-weight-normal moneda"><?php echo $_smarty_tpl->tpl_vars['prestamo']->value->SALDO;?>
 </span></td> 
                    <td><span class="font-weight-normal"><?php echo $_smarty_tpl->tpl_vars['prestamo']->value->FECHA_INICIO;?>
 </span></td> 
                    <td><span class="font-weight-normal"><?php echo $_smarty_tpl->tpl_vars['prestamo']->value->FECHA_FIN;?>
 </span></td> 
                    <td><span class="font-weight-normal"><?php echo $_smarty_tpl->tpl_vars['prestamo']->value->COMISION*100;?>
 %</span></td> 
                    <td>
                        <span class="font-weight-normal">
                            (<?php echo $_smarty_tpl->tpl_vars['prestamo']->value->CLIENTE_ID;?>
) <?php echo $_smarty_tpl->tpl_vars['prestamo']->value->NOMBRE;?>
 <?php echo $_smarty_tpl->tpl_vars['prestamo']->value->APELLIDO;?>
 
                        </span>
                    </td>
                    <td hidden>
                        <div class="btn-group">
                            <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="icon icon-sm">
                                    <span class="fas fa-ellipsis-h icon-dark"></span>
                                </span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="abonos.php?prestamo=<?php echo $_smarty_tpl->tpl_vars['prestamo']->value->ID;?>
"><span class="fas fa-eye mr-2"></span>Ver sus abonos</a>
                                <a class="dropdown-item" href="nuevo_abono.php?prestamo=<?php echo $_smarty_tpl->tpl_vars['prestamo']->value->ID;?>
"><span class="fas fa-plus mr-2"></span>Nuevo abono</a>
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
            td = tr[i].getElementsByTagName("td")[6];
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

    myFunction();
 
<?php echo '</script'; ?>
><?php }
}
