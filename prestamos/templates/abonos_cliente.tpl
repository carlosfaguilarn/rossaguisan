<div class="row" style="margin-top: 30px"> 
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
            <h2 class="h4">Abonos de {$cliente->APELLIDO} {$cliente->NOMBRE}</h2>
        </div> 
        <form action="abonos.php?cliente={$cliente->ID}" method="POST" autocomplete="off">
            {foreach key=key item=prestamo from=$prestamos}
                <div class="card card-body bg-white border-light shadow-sm mb-4" style="margin-top: 20px;">
                    <h2 class="h5 mb-4 moneda">{$prestamo->IMPORTE}</h2>
                    <input hidden class="form-control" name="prestamo_id[{$key}]" id="first_name" type="text" placeholder="ID del cliente" required readonly value="{$prestamo->ID}" >
                    <input hidden class="form-control" name="nombre" id="last_name" type="text" placeholder="Nombre del cliente" required readonly value="{$cliente->APELLIDO} {$cliente->NOMBRE}">
                    <div class="row align-items-center">
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label for="birthday">Cantidad</label>
                                <input type="number" class="form-control flatpickr-input" name="abono[{$key}]" d="birthday" data-toggle="date" placeholder="" required value="{$prestamo->ABONOS}"
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
                                <input type="text" name="fecha[{$key}]" class="form-control datepicker hoy">
                            </div>
                        </div> 
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label for="gender">Saldo después del abono</label>
                                <input type="number" class="form-control flatpickr-input" name="saldo[{$key}]" id="saldo"  required value="{$prestamo->SALDO - $prestamo->ABONOS}">
                            </div>
                        </div>
                    </div> 
                </div>
            {/foreach}
            <div class="mt-3" style="text-align: center">
                <button type="submit" name="guardar_varios" class="btn btn-primary">Guardar Abonos</button>
            </div>
        </form> 
    </div> 
</div>