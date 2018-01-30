@extends('layouts.app')

@section('content')
 <div class="container">
    <div class="row">    
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">                
                <div class="panel-heading">Categorias</div>                
                <div class="panel-body">
                @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif      
                    <form>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Categoria</label>
                            <div class="col-sm-10">
                                {{ $categoria->categoria}}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Edad mínima</label>
                            <div class="col-sm-10">
                                {{ $categoria->edad_minima}}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Edad máxima</label>
                            <div class="col-sm-10">
                                {{ $categoria->edad_maxima}}
                            </div>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-primary" href="{{ route('categorias.index') }}"> Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection