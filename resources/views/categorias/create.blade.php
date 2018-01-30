
@extends('layouts.app')

@section('content')
 
    {!! Form::open(array('route' => 'categorias.store','method'=>'POST')) !!}
         @include('categorias.form')
    {!! Form::close() !!}

@endsection