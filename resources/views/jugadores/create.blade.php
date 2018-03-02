
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

    {!! Form::open(array('route' => 'jugadores.store','method'=>'POST')) !!}
         @include('jugadores.form')
    {!! Form::close() !!}

@endsection