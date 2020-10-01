<div class="row" style="margin-top: 30px"> 
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
            <h2 class="h4">Registrar un abono de {$prestamo->APELLIDO} {$prestamo->NOMBRE}</h2>
            <p class="mb-0">
                &nbsp; Préstamo: <span class="moneda bold">{$prestamo->IMPORTE}</span>.  <br/>
                &nbsp; Saldo actual: <span class="moneda bold">{$prestamo->SALDO}</span>.
            </p>
        </div>
        <div class="card card-body bg-white border-light shadow-sm mb-4" style="margin-top: 20px;">
            <h2 class="h5 mb-4">Ingrese los siguientes datos</h2>
            <form action="abonos.php?prestamo={$prestamo->ID}" method="POST" autocomplete="off">
                <input hidden class="form-control" name="prestamo_id" id="first_name" type="text" placeholder="ID del cliente" required readonly value="{$prestamo->ID}" >
                <input hidden class="form-control" name="nombre" id="last_name" type="text" placeholder="Nombre del cliente" required readonly value="{$prestamo->APELLIDO} {$prestamo->NOMBRE}">
                <div class="row align-items-center">
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="birthday">Cantidad</label>
                            <input type="number" class="form-control flatpickr-input" name="abono" d="birthday" data-toggle="date" placeholder="" required value="{$prestamo->ABONOS}"
                            onkeyup=" 
                                var etiqueta = document.getElementById('saldo');
                                var saldo = {$prestamo->SALDO} - this.value;
                                etiqueta.value = saldo;
                            ">
                            </div>
                    </div> 
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="birthday">Fecha</label> 
                            <input type="text" name="fecha" class="form-control datepicker hoy">
                        </div>
                    </div> 
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="gender">Saldo después del abono</label>
                        <input type="number" class="form-control flatpickr-input" name="saldo" id="saldo"  required value="{$prestamo->SALDO}">
                    </div>
                </div>
                </div>
                        
                <div class="mt-3">
                    <button type="submit" name="guardar_abono" class="btn btn-primary">Guardar Abono</button>
                </div>
            </form>
        </div>
    </div> 
</div>