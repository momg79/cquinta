@extends('layouts.app')
@section('content')
 <div class="container">
    <div class="row">    
        <div class="col">
            <div class="panel panel-default">                
                <div class="panel-heading">Jugador</div>                
                <div class="panel-body">
                    <form>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Nombre Completo</label>
                            <div class="col-sm-10">
                                {{ $jugador[0]->nombre}} {{ $jugador[0]->apellido_materno}} {{ $jugador[0]->apellido_paterno}}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Fecha Nacimiento</label>
                            <div class="col-sm-10">
                                {{  date('d-m-Y', strtotime($jugador[0]->fecha_nacimiento)) }}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Fecha Ingreso al Club</label>
                            <div class="col-sm-10">
                                {{ date('d-m-Y', strtotime($jugador[0]->fecha_ingreso)) }}
                            </div>
                        </div>
                       <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Categoria</label>
                            <div class="col-sm-10">
                                {{ $jugador[0]->categoria}}
                            </div>
                        </div>
                       <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Telefono Principal</label>
                            <div class="col-sm-10">
                                {{ $jugador[0]->telefono1}}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Telefono 2</label>
                            <div class="col-sm-10">
                                {{ $jugador[0]->telefono2}}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Correo</label>
                            <div class="col-sm-10">
                                {{ $jugador[0]->correo}}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Dirección</label>
                            <div class="col-sm-10">
                                {{ $jugador[0]->direccion}}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Apoderador</label>
                            <div class="col-sm-10">
                                {{ $jugador[0]->apoderado}}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Fono Apoderado</label>
                            <div class="col-sm-10">
                                {{ $jugador[0]->telefonoapoderado}}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Correo Apoderado</label>
                            <div class="col-sm-10">
                                {{ $jugador[0]->correoapoderado}}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Estado en el club</label>
                            <div class="col-sm-10">
                                {{ $jugador[0]->estado_alumno}}
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
