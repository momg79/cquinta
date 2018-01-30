@extends('layouts.app')

@section('content')

<div class="container">
       @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
            <div class="pull-right">
                <a  class="btn btn-primary" href="{{ route('categorias.create') }}">Nueva Categoria</a>
            </div>
            <div class="panel panel-primary">            
                <div class="panel-heading">
                    <h3 class="panel-title">Categorias</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                        <th>Id</th>
                        <th>Categoria</th>
                        <th>Edad Minima</th>
                        <th>Edad Máxima</th>
                        <th>Ver</th>
                        </thead>
                        <tbody>
                        @foreach ($categorias as $categoria)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $categoria->categoria}}</td>
                                <td>{{ $categoria->edad_minima}}</td>
                                <td>{{ $categoria->edad_maxima}}</td>
                                <td>
                                    <div class="dropdown">
                                        <a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" type="button"                                              >
                                                Acción 
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="{{ route('categorias.show',$categoria->id) }}">Ver</a>                                       
                                            </li>
                                            <li>
                                                <a href="{{ route('categorias.edit',$categoria->id) }}">Editar</a>                                        
                                            </li>
                                            <li>
                                                {!! Form::open(['method' => 'DELETE','route' => ['categorias.destroy', $categoria->id],'style'=>'display:inline']) !!}
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
    {!! $categorias->links() !!}
@endsection