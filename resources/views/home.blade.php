@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col">
            <div class="panel panel-default">
                <div class="panel-heading">Proximos Partidos</div>
                <div class="panel-body">
                        <table class="table">
                                <thead>
                                  <tr>
                                    <th>#</th>
                                    <th>Fecha</th>
                                    <th>Equipo</th>
                                    <th>Lugar</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">1</th>
                                    <td>04-03-2018</td>
                                    <td>Leonas</td>
                                    <td>Santiago</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">2</th>
                                    <td>25-03-2018</td>
                                    <td>QuintaViña</td>
                                    <td>Viña del Mar</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">3</th>
                                    <td>04-04-2018</td>
                                    <td>Italiano</td>
                                    <td>Quilpue</td>
                                  </tr>
                                </tbody>
                              </table>           
                </div>                
            </div>
        </div>
        <div class="col">
                <div class="panel panel-default">
                    <div class="panel-heading">Ultimos Resultados</div>
                    <div class="panel-body">
                        <table class="table">
                        <thead>
                            <tr>
                            <th>#</th>
                            <th>Fecha</th>
                            <th>Equipo</th>
                            <th>Username</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>04-03-2018</td>
                            <td>Leonas</td>
                            <td>V 20 L 30 Ganan</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>25-03-2018</td>
                            <td>QuintaViña</td>
                            <td>V 20 L 30 Ganan</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>04-04-2018</td>
                            <td>Italiano</td>
                            <td>V 20 L 30 Ganan</td>
                        </tr>
                        </tbody>
                        </table>                            
                    </div>                
                </div>
            </div>
    </div>

    <div class="col">
            <div class="panel panel-default">
                <div class="panel-heading">Cumpleaños</div>
                <div class="panel-body">
                    <table class="table">
                    <thead>
                        <tr>
                        <th>#</th>
                        <th>Fecha</th>
                        <th>Jugador</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>04-03-2018</td>
                        <td>Pablo Jefe</td>                 
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>25-03-2018</td>
                        <td>Ivanna Antonia</td>                    
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>04-04-2018</td>
                        <td>Luisa A.</td>
                         </tr>
                    </tbody>
                    </table>                            
                </div>                
            </div>
        </div>
</div>


</div>
@endsection
