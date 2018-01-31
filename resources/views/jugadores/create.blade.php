
@extends('layouts.app')

@section('content')
 
    {!! Form::open(array('route' => 'jugadores.store','method'=>'POST')) !!}
         @include('jugadores.form')
    {!! Form::close() !!}

@endsection