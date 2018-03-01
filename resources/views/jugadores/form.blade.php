
<div class="container">
    <div class="row">    
        <div class="col">
            <div class="panel panel-default">                
                <div class="panel-heading">Jugador</div>
                <div class="panel-body">
                    <form>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Rut</label>
                            <div class="col-sm-10">
                            {!! Form::text('rut', null, array('placeholder' => 'Rut','class' => 'form-control', 'maxlength' => '10')) !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Nombre</label>
                            <div class="col-sm-10">
                             {!! Form::text('nombre', null, array('placeholder' => 'Nombre completo','class' => 'form-control', 'maxlength' => '40')) !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Apellido M.</label>
                            <div class="col-sm-10">
                            {!! Form::text('apellido_materno', null, array('placeholder' => 'Apellido Materno','class' => 'form-control', 'maxlength' => '40')) !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Apellido P.</label>
                            <div class="col-sm-10">
                            {!! Form::text('apellido_paterno', null, array('placeholder' => 'Apellido Paterno','class' => 'form-control', 'maxlength' => '40')) !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fnacimiento" class="col-sm-2 col-form-label">F. Nacimiento</label>
                            <div class="col-sm-10">
                                 {!! Form::text('fecha_nacimiento', null, array('placeholder' => 'Fecha Nacimiento','class' => 'form-control fecha_nacimiento', 'maxlength' => '10')) !!}                          
                            </div>
                        </div>                      
                        <div class="form-group row">
                            <label for="fingreso" class="col-sm-2 col-form-label">F. Ingreso</label>
                            <div class="col-sm-10">
                                <!-- <input type="text" class="form-control fecha_ingreso" name="fingreso"> -->
                                {!! Form::text('fecha_ingreso',  null, array('placeholder' => 'Fecha Ingreso al Club','class' => 'form-control fecha_ingreso', 'maxlength' => '10')) !!}
                            </div>
                        </div>
                        <div class="form-group row">                            
                            {!! Form::label('categoria', 'Categorias', ['class' => 'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-10">                                
                                {!! Form::select('categoria', $categorias, null, ['class' => 'form-control']) !!}                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Telefono 1</label>
                            <div class="col-sm-10">
                            {!! Form::text('telefono1', null, array('placeholder' => 'Número Telefono Principal','class' => 'form-control', 'maxlength' => '12')) !!}
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Telefono 2</label>
                            <div class="col-sm-10">
                            {!! Form::text('telefono2', null, array('placeholder' => 'Número Telefono Emergencia','class' => 'form-control', 'maxlength' => '12')) !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Correo</label>
                            <div class="col-sm-10">
                            {!! Form::text('correo', null, array('placeholder' => 'Correo principal de contacto','class' => 'form-control', 'maxlength' => '20')) !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Dirección</label>
                            <div class="col-sm-10">
                            {!! Form::text('direccion', null, array('placeholder' => 'Dirección casa','class' => 'form-control', 'maxlength' => '45')) !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Apoderado</label>
                            <div class="col-sm-10">
                            {!! Form::text('apoderado', null, array('placeholder' => 'Nombre completo del apoderado','class' => 'form-control', 'maxlength' => '45')) !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Telefono Apoderado</label>
                            <div class="col-sm-10">
                            {!! Form::text('telefonoapoderado', null, array('placeholder' => 'Fono apoderado principal','class' => 'form-control', 'maxlength' => '12')) !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Correo Apoderado</label>
                            <div class="col-sm-10">
                            {!! Form::text('correoapoderado', null, array('placeholder' => 'Correo contacto principal','class' => 'form-control', 'maxlength' => '20')) !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Estado en el club</label>
                            <div class="col-sm-10">
                               {!! Form::select('estado_alumno', array('1' => 'Activo', '2' => 'Inactivo'), null,  ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="pull-right">
                            <button type="submit" class="btn btn-primary">Registrar</button>
                            <a class="btn btn-primary" href="{{ route('jugadores.index') }}"> Back</a>
                        </div>
                    </form>                 
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('.fecha_ingreso').datepicker({
        format: "dd-mm-yyyy",
        language: "es",
        autoclose: true
    });

    $('.fecha_nacimiento').datepicker({
        format: "dd-mm-yyyy",
        language: "es",
        autoclose: true
    });

    
</script>


