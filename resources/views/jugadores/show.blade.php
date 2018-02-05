@extends('layouts.app')
@section('content')
 <div class="container">
    <div class="row">    
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">                
                <div class="panel-heading">Jugador</div>                
                <div class="panel-body">
                    <form>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Nombre Completo</label>
                            <div class="col-sm-10">
                                {{ $jugador->nombre}} {{ $jugador->apellido_materno}} {{ $jugador->apellido_paterno}}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Fecha Nacimiento</label>
                            <div class="col-sm-10">
                                {{ $jugador->fecha_nacimiento}}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Fecha Ingreso al Club</label>
                            <div class="col-sm-10">
                                {{ $jugador->fecha_ingreso}}
                            </div>
                        </div>
                       <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Categoria</label>
                            <div class="col-sm-10">
                                {{ $jugador->categoria}}
                            </div>
                        </div>
                       <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Telefono Principal</label>
                            <div class="col-sm-10">
                                {{ $jugador->telefono1}}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Telefono 2</label>
                            <div class="col-sm-10">
                                {{ $jugador->telefono2}}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Correo</label>
                            <div class="col-sm-10">
                                {{ $jugador->correo}}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Dirección</label>
                            <div class="col-sm-10">
                                {{ $jugador->direccion}}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Apoderador</label>
                            <div class="col-sm-10">
                                {{ $jugador->apoderado}}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Fono Apoderado</label>
                            <div class="col-sm-10">
                                {{ $jugador->telefonoapoderado}}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Correo Apoderado</label>
                            <div class="col-sm-10">
                                {{ $jugador->correoapoderado}}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Estado en el club</label>
                            <div class="col-sm-10">
                                {{ $jugador->estado_alumno}}
                            </div>
                        </div>

                        <div class="pull-right">
                            <a class="btn btn-primary" href="{{ route('jugadores.index') }}"> Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>    
</div>
  

@endsection