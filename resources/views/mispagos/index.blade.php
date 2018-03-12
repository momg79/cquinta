@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="card text-white bg-danger mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total Deudores ultimos 3 meses</h5>
                    <p class="card-text">$90.000.-</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card text-white bg-success mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total Pagados ultimos 3 meses</h5>
                    <p class="card-text">$500.000</p>
                </div>
            </div>
        </div>
    </div> 

    <div class="row">
        <div class="col">
            <div class="panel panel-default">
                <div class="panel-heading">Cuotas Pendiente</div>
                <div class="panel-body">
                <table class="table">
                    <thead>
                        <tr>
                        <th>#</th>
                        <th>Apoderado</th>
                        <th>Correo</th>
                        <th>Periodo</th>
                        <th>Dias de atraso</th>
                        <th>Monto</th>
                        <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>Juan X.</td>
                        <td>j@j.cl</td>
                        <td>Enero 2018</td>
                        <td>90 días</td>
                        <td>$15.000</td>
                        <td><button type="button" class="btn btn-primary">Cobrar</button></td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>Pedro X.</td>
                        <td>p@p.cl</td>
                        <td>Febrero</td>
                        <td>30 dias</td>
                        <td>$15.000</td>
                        <td><button type="button" class="btn btn-primary">Cobrar</button></td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td>Pedro X.</td>
                        <td>p@p.cl</td>
                        <td>Marzo</td>
                        <td>7 dias</td>
                        <td>$15.000</td>
                        <td><button type="button" class="btn btn-primary">Cobrar</button></td>
                        </tr>
                    </tbody>
                    </table>           
                </div>                
            </div>
        </div>
        
</div>


</div>
@endsection
