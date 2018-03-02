@extends('layouts.app')

@section('content')
 

       @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> El registro presento un problema.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {!! Form::model($jugador, ['method' => 'PATCH','route' => ['jugadores.update', $jugador->id]]) !!}
            @include('jugadores.form')
        {!! Form::close() !!}

@endsection