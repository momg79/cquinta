
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="wcRqG4faOUPBcLTW4iAnUQI7ThVdKtOvhNyjbMi1">

    <title>ClubQuinta</title>

    <!-- Styles -->
    <link href="http://localhost:4200/cquinta/public/css/app.css" rel="stylesheet">

    <!-- Jquery -->
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <!-- Datepicker Files -->
    <link rel="stylesheet" href="http://localhost:4200/cquinta/public/datePicker/css/bootstrap-datepicker3.css ">
    <!--<link rel="stylesheet" href="http://localhost:4200/cquinta/public/datePicker/css/bootstrap-standalone.css "> -->

    <link media="all" type="text/css" rel="stylesheet" href="http://localhost:4200/cquinta/public/datePicker/css/bootstrap-datepicker.standalone.css">


    <script src="http://localhost:4200/cquinta/public/datePicker/js/bootstrap-datepicker.js"></script>
    <!-- Languaje -->
    <script src="http://localhost:4200/cquinta/public/datePicker/locales/bootstrap-datepicker.es.min.js"></script>

 

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="http://localhost:4200/cquinta/public">
                        ClubQuinta
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                                                
                          <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    Administrar <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="http://localhost:4200/cquinta/public/jugadores">
                                            Jugadoras
                                        </a>                                        
                                    </li>
                                    <li>
                                        <a href="http://localhost:4200/cquinta/public/categorias">
                                            Categorias
                                        </a>                                        
                                    </li>
                                    <li>
                                        <a href="http://localhost:4200/cquinta/public/articles">
                                            Gestión Pagos
                                        </a>                                        
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    Mario Muñoz <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="http://localhost:4200/cquinta/public/logout"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="http://localhost:4200/cquinta/public/logout" method="POST" style="display: none;">
                                            <input type="hidden" name="_token" value="wcRqG4faOUPBcLTW4iAnUQI7ThVdKtOvhNyjbMi1">
                                        </form>
                                    </li>
                                </ul>
                            </li>
                                            </ul>
                </div>
            </div>
        </nav>

         
    <form method="POST" action="http://localhost:4200/cquinta/public/jugadores" accept-charset="UTF-8"><input name="_token" type="hidden" value="wcRqG4faOUPBcLTW4iAnUQI7ThVdKtOvhNyjbMi1">
         <div class="container">
    <div class="row">    
        <div class="col">
            <div class="panel panel-default">                
                <div class="panel-heading">Jugador</div>
                <div class="panel-body">
                    <form>
                        
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">F. Ingreso</label>
                            <div class="col-sm-10">
                                <input placeholder="Fecha Ingreso al Club" class="form-control" name="fecha_ingreso" type="text" value="2018-03-01">                               
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="date2" class="col-sm-2 col-form-label">Fecha</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control datepicker2" name="date2">
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Registrar</button>
                        <div class="pull-right">
                            <a class="btn btn-primary" href="http://localhost:4200/cquinta/public/jugadores"> Back</a>
                        </div>
                    </form>                 
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('.datepicker2').datepicker({
        format: "yyyy/mm/dd",
        language: "es",
        autoclose: true
    });
</script>   
</form>
    </div>

    <!-- Scripts 
    <script src="http://localhost:4200/cquinta/public/js/app.js"></script>
-->
</body>
</html>