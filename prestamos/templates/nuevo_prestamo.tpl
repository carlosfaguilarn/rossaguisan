<div class="row" style="margin-top: 30px">  
    <div class="col-12 col-xl-12"> 
        <div class="d-block mb-4 mb-md-0"> 
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item"><a href="#"><span class="fas fa-home"></span></a></li>
                    <li class="breadcrumb-item"><a href="index.php">Préstamos</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Nuevo</li>
                </ol>
            </nav>
            <h2 class="h4">Registrar un nuevo préstamo</h2>
        </div>   
    </div>
</div>

<form action="index.php" method="POST" autocomplete="off">
    <div class="row" style="margin-top: 10px"> 
        <div class="col-12 col-xl-6"> 
            <div class="card card-body bg-white border-light shadow-sm mb-4" style="margin-top: 20px;">
                {if isset($cliente->ID)}
                    <h2 class="h5 mb-4">Datos del cliente registrado</h2>
                        <div class="row align-items-center">
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label for="birthday">ID: </label>
                                <input type="number" class="form-control flatpickr-input" name="cliente_id" d="birthday" data-toggle="date" value="{$cliente->ID}" required readonly>
                            </div>
                        </div>
                    </div> 
                {else}
                    <h2 class="h5 mb-4">Registre al nuevo cliente</h2>
                {/if}

                
                <div class="row align-items-center">
                    <div class="col-md-12 mb-3">
                        <div class="form-group">
                            <label for="birthday">Nombre: </label>
                            <input type="text" class="form-control flatpickr-input" name="nombre" data-toggle="date" value="{if isset($cliente->NOMBRE)}{$cliente->NOMBRE}{/if}" required {if isset($cliente->NOMBRE)} readonly {/if}>
                        </div>
                    </div> 
                </div>
                <div class="row align-items-center">
                    <div class="col-md-12 mb-3">
                        <div class="form-group">
                            <label for="birthday">Apellido: </label>
                            <input type="text" class="form-control flatpickr-input" name="apellido" data-toggle="date" value="{if isset($cliente->APELLIDO)}{$cliente->APELLIDO}{/if}" required {if isset($cliente->APELLIDO)} readonly {/if}>
                        </div>
                    </div> 
                </div>
            </div> 
        </div>
        <div class="col-12 col-xl-6"> 
            <div class="card card-body bg-white border-light shadow-sm mb-4" style="margin-top: 20px;">
                <h2 class="h5 mb-4">Datos del préstamo</h2>
                    <div class="row align-items-center">
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label for="birthday">Préstamo: </label>
                                <input type="number" id="prestamo" class="form-control input-moneda" name="prestamo" d="birthday" data-toggle="date" placeholder="" required>
                            </div>
                        </div>
                    </div>  
                    <div class="row align-items-center">
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="birthday">Fecha inicio: </label> 
                                <input type="text" id="fecha_inicio" name="fecha_inicio" class="form-control datepicker">
                            </div>
                        </div> 
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="birthday">Fecha finalización:</label> 
                                <input type="text" id="fecha_fin" name="fecha_fin" class="form-control datepicker datepicker-end">
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center"> 
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="birthday">Meses: </label>
                                <input type="number" id="meses" class="form-control flatpickr-input" name="meses" required>
                            </div>
                        </div> 
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="birthday">Plazos (semanas): </label>
                                <input type="number" id="plazos" class="form-control flatpickr-input" name="plazos" required>
                            </div>
                        </div> 
                    </div> 
                    <div class="row align-items-center">
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label for="birthday">Comisión: </label>
                                <input type="text" id="comision" class="form-control flatpickr-input" name="comision" d="birthday" data-toggle="date" placeholder="" required
                                onkeyup=" 
                                    var importe = document.getElementById('importe');
                                    var prestamo = document.getElementById('prestamo');
                                    var valor = prestamo.value * (1 + parseFloat(this.value) / 100);
                                    importe.value = valor; 
                                ">
                            </div>
                        </div> 
                    </div>
                    <div class="row align-items-center"> 
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label for="birthday">Total a cobrar: </label>
                                <input type="number" id="importe" class="form-control flatpickr-input" name="importe" d="birthday" data-toggle="date" placeholder="" required>
                            </div>
                        </div> 
                    </div>
                    <div class="row align-items-center"> 
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label for="birthday">Abono: </label>
                                <input type="number" id="abono" class="form-control flatpickr-input" name="abono" required>
                            </div>
                        </div>  
                    </div>
            </div>
        </div> 
    </div>

    

    <div class="row" style="margin-top: 30px; text-align: center">  
        <div class="col-12 col-xl-12">  
            <button type="submit" name="nuevo_prestamo" class="btn btn-primary">Guardar</button>
        </div>
    </div>    
</form>  
