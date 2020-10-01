<?php
/* Smarty version 3.1.36, created on 2020-09-18 16:47:46
  from 'C:\xampp\htdocs\prestamos\templates\abonos_cliente.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f64c8921f11c9_48350744',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c11faa7a65a0dd2eb359bc59d4dee6b94504191' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestamos\\templates\\abonos_cliente.tpl',
      1 => 1600403480,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f64c8921f11c9_48350744 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row" style="margin-top: 30px"> 
    <div class="col-12 col-xl-12">
        <div class="d-block mb-4 mb-md-0">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item"><a href="#"><span class="fas fa-home"></span></a></li>
                    <li class="breadcrumb-item"><a href="#">Préstamos</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Abonos</li>
                    <li class="breadcrumb-item active" aria-current="page">Nuevo</li>
                </ol>
            </nav>
            <h2 class="h4">Abonos de <?php echo $_smarty_tpl->tpl_vars['cliente']->value->APELLIDO;?>
 <?php echo $_smarty_tpl->tpl_vars['cliente']->value->NOMBRE;?>
</h2>
        </div> 
        <form action="abonos.php?cliente=<?php echo $_smarty_tpl->tpl_vars['cliente']->value->ID;?>
" method="POST" autocomplete="off">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['prestamos']->value, 'prestamo', false, 'key');
$_smarty_tpl->tpl_vars['prestamo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['prestamo']->value) {
$_smarty_tpl->tpl_vars['prestamo']->do_else = false;
?>
                <div class="card card-body bg-white border-light shadow-sm mb-4" style="margin-top: 20px;">
                    <h2 class="h5 mb-4 moneda"><?php echo $_smarty_tpl->tpl_vars['prestamo']->value->IMPORTE;?>
</h2>
                    <input hidden class="form-control" name="prestamo_id[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
]" id="first_name" type="text" placeholder="ID del cliente" required readonly value="<?php echo $_smarty_tpl->tpl_vars['prestamo']->value->ID;?>
" >
                    <input hidden class="form-control" name="nombre" id="last_name" type="text" placeholder="Nombre del cliente" required readonly value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value->APELLIDO;?>
 <?php echo $_smarty_tpl->tpl_vars['cliente']->value->NOMBRE;?>
">
                    <div class="row align-items-center">
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label for="birthday">Cantidad</label>
                                <input type="number" class="form-control flatpickr-input" name="abono[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
]" d="birthday" data-toggle="date" placeholder="" required value="<?php echo $_smarty_tpl->tpl_vars['prestamo']->value->ABONOS;?>
"
                                    onkeyup=" 
                                        var etiqueta = document.getElementById('saldo');
                                        var saldo =  - this.value;
                                        etiqueta.value = saldo;
                                    ">
                                </div>
                        </div> 
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label for="birthday">Fecha</label> 
                                <input type="text" name="fecha[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
]" class="form-control datepicker hoy">
                            </div>
                        </div> 
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label for="gender">Saldo después del abono</label>
                                <input type="number" class="form-control flatpickr-input" name="saldo[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
]" id="saldo"  required value="<?php echo $_smarty_tpl->tpl_vars['prestamo']->value->SALDO-$_smarty_tpl->tpl_vars['prestamo']->value->ABONOS;?>
">
                            </div>
                        </div>
                    </div> 
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <div class="mt-3" style="text-align: center">
                <button type="submit" name="guardar_varios" class="btn btn-primary">Guardar Abonos</button>
            </div>
        </form> 
    </div> 
</div><?php }
}
