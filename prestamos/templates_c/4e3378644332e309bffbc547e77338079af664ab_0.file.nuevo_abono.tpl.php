<?php
/* Smarty version 3.1.36, created on 2020-09-01 05:42:31
  from 'C:\xampp\htdocs\Rocket\prestamos\templates\nuevo_abono.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f4dc32781b039_36665840',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e3378644332e309bffbc547e77338079af664ab' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Rocket\\prestamos\\templates\\nuevo_abono.tpl',
      1 => 1598931749,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4dc32781b039_36665840 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row" style="margin-top: 30px"> 
    <div class="col-12 col-xl-8">
        <div class="d-block mb-4 mb-md-0">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item"><a href="#"><span class="fas fa-home"></span></a></li>
                    <li class="breadcrumb-item"><a href="#">Préstamos</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Abonos</li>
                    <li class="breadcrumb-item active" aria-current="page">Nuevo</li>
                </ol>
            </nav>
            <h2 class="h4">Registrar un abono de <?php echo $_smarty_tpl->tpl_vars['prestamo']->value->APELLIDO;?>
 <?php echo $_smarty_tpl->tpl_vars['prestamo']->value->NOMBRE;?>
</h2>
            <p class="mb-0">
                &nbsp; Préstamo: <span class="moneda bold"><?php echo $_smarty_tpl->tpl_vars['prestamo']->value->IMPORTE;?>
</span>.  <br/>
                &nbsp; Saldo actual: <span class="moneda bold"><?php echo $_smarty_tpl->tpl_vars['prestamo']->value->SALDO;?>
</span>.
            </p>
        </div>
        <div class="card card-body bg-white border-light shadow-sm mb-4" style="margin-top: 20px;">
            <h2 class="h5 mb-4">Ingrese los siguientes datos</h2>
            <form action="abonos.php?prestamo=<?php echo $_smarty_tpl->tpl_vars['prestamo']->value->ID;?>
" method="POST" autocomplete="off">
                <input hidden class="form-control" name="prestamo_id" id="first_name" type="text" placeholder="ID del cliente" required readonly value="<?php echo $_smarty_tpl->tpl_vars['prestamo']->value->ID;?>
" >
                <input hidden class="form-control" name="nombre" id="last_name" type="text" placeholder="Nombre del cliente" required readonly value="<?php echo $_smarty_tpl->tpl_vars['prestamo']->value->APELLIDO;?>
 <?php echo $_smarty_tpl->tpl_vars['prestamo']->value->NOMBRE;?>
">
                <div class="row align-items-center">
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="birthday">Cantidad</label>
                            <input type="number" class="form-control flatpickr-input" name="abono" d="birthday" data-toggle="date" placeholder="" required
                            onkeyup=" 
                                var etiqueta = document.getElementById('saldo');
                                var saldo = <?php echo $_smarty_tpl->tpl_vars['prestamo']->value->SALDO;?>
 - this.value;
                                etiqueta.value = saldo;
                            ">
                            </div>
                    </div> 
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="birthday">Fecha</label> 
                            <input type="text" name="fecha" class="form-control datepicker">
                        </div>
                    </div> 
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="gender">Saldo después del abono</label>
                        <input type="number" class="form-control flatpickr-input" name="saldo" id="saldo"  required value="<?php echo $_smarty_tpl->tpl_vars['prestamo']->value->SALDO;?>
">
                    </div>
                </div>
                </div>
                        
                <div class="mt-3">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div> 
</div><?php }
}
