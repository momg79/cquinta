<div class="container">
    <div class="row">    
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">                
                <div class="panel-heading">Categoria</div>
                <div class="panel-body">
                    <form>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Categoria</label>
                            <div class="col-sm-10">
                            {!! Form::text('categoria', null, array('placeholder' => 'Categoria','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Edad mínima</label>
                            <div class="col-sm-10">
                             {!! Form::text('edad_minima', null, array('placeholder' => 'Edad Mínima','class' => 'form-control')) !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Edad máxima</label>
                            <div class="col-sm-10">
                            {!! Form::text('edad_maxima', null, array('placeholder' => 'Edad Máxima','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Registrar</button>
                        <div class="pull-right">
                            <a class="btn btn-primary" href="{{ route('categorias.index') }}"> Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
