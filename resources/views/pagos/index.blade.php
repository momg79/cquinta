@extends('layouts.app')

@section('content')
<div class="container">
        
        @php
            use Carbon\Carbon;
        @endphp
        @if ($message = Session::get('success'))           
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <p>{{ $message }}</p>
            </div>
        @endif
    <div class="row">
        <div class="col-sm-6">
            <div class="well">Monto Total Adeudado:  $ {{ number_format($deuda, 0, ',', '.') }} </div>
        </div>
        <div class="col-sm-6">
            <div class="well">Monto Total Pagado:  $ {{ number_format($pagado, 0, ',', '.') }} </div>
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

                    @php 
                        $x=1;
                    @endphp
                    @foreach ($pagos as $pago)
                        @php                        
                            $now  = Carbon::parse($pago->periodo);
                            $end  = Carbon::now();
                        @endphp
                        <tr>
                        <th scope="row">{{ $x }}</th>
                        <td>{{ $pago->apoderado }}</td>
                        <td>{{ $pago->correoapoderado }}</td>
                        <td>{{ date('m-Y', strtotime($pago->periodo)) }}</td>
                        <td>{{ $now->diffInDays($end) }}</td>
                        <td>${{ number_format($pago->montoCobro, 0, ',', '.') }}.-</td>
                        <td>                            
                            
                            {!! Form::open(['method' => 'GET','action' => ['PagoController@correo',
                                        $pago->correoapoderado, 
                                        $pago->apoderado, 
                                        number_format($pago->montoCobro, 0, ',', '.'),
                                        date('m-Y', strtotime($pago->periodo)),
                                        $pago->nombreJugador
                                        ],'style'=>'display:inline']) !!}                            
                            {!! Form::submit('Cobrar', ['class' => 'btn btn-primary']) !!}
                            {!! Form::close() !!}  
                           
                        </td>
                        </tr>
                    
                    {{ $x++ }}
                    @endforeach 
                    </tbody>
                    </table>           
                </div>                
            </div>
        </div>
        
</div>


</div>
@endsection
