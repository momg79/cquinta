@extends('layouts.app')

@section('content')

<div class="container">
       @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
            <div class="pull-right">
                <a  class="btn btn-primary" href="{{ route('jugadores.create') }}">Nuevo Jugador</a>
            </div>
            <div class="panel panel-primary">            
                <div class="panel-heading">
                    <h3 class="panel-title">Jugadores(as)</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Apellido Materno</th>
                        <th>Apellido Paterno</th>
                        <th>Fono Contacto</th>
                        <th>Categoria</th>
                        <th>Ver</th>
                        </thead>
                        <tbody>
                        @foreach ($jugadores as $jugador)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $jugador->Nombre}}</td>
                                <td>{{ $jugador->apellido_materno}}</td>
                                <td>{{ $jugador->apellido_paterno}}</td>
                                <td>{{ $jugador->telefono1}}</td>
                                <td>{{ $jugador->categoria}}</td>
                                <td>
                                    <div class="dropdown">
                                        <a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" type="button"                                              >
                                                Acción 
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="{{ route('jugadores.show',$jugador->id) }}">Ver</a>                                       
                                            </li>
                                            <li>
                                                <a href="{{ route('jugadores.edit',$jugador->id) }}">Editar</a>                                        
                                            </li>
                                            <li>
                                                {!! Form::open(['method' => 'DELETE','route' => ['jugadores.destroy', $jugador->id],'style'=>'display:inline']) !!}
                                                {!! Form::submit('..Delete', ['class' => 'btn btn-link']) !!}
                                                {!! Form::close() !!}                                       
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="panel-footer">
                    
                </div>
                 
            </div>
        </div>
    {!! $jugadores->links() !!}
@endsection