<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles  -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">    
    <!--
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Jquery -->
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <!-- Datepicker Files -->
    <link rel="stylesheet" href="{{ URL::asset('datePicker/css/bootstrap-datepicker3.css') }} ">
    <!--<link rel="stylesheet" href="{{ URL::asset('datePicker/css/bootstrap-standalone.css') }} "> -->
    
    {!! Html::style('datePicker/css/bootstrap-datepicker.standalone.css') !!}
    
    <script src="{{ URL::asset('datePicker/js/bootstrap-datepicker.js') }}"></script>
    <!-- Languaje -->
    <script src="{{ URL::asset('datePicker/locales/bootstrap-datepicker.es.min.js') }}"></script>

  



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
                    <a class="navbar-brand" href="{{ url('/home') }}">
                        {{ config('app.name', 'Laravel') }}
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
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Registro</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Notifications <span class="badge">{{count(Auth::user()->unreadNotifications)}}</span>
                                </a>
                            
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        @foreach (Auth::user()->unreadNotifications as $notification)
                                            <a href="{{ route('posts.show', $notification->data['post']['id']) }}"><i>{{ $notification->data["user"]["name"] }}</i> has commented in <b>{{ $notification->data["post"]["title"] }}</b></a>
                                        @endforeach
                                    </li>
                                </ul>
                            </li>    
                            @if ( Auth::user()->tipo == "2")      
                                <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                            Administrar <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu">                                   
                                            <li>
                                                <a href="{{url('/jugadores')}}">
                                                    Jugadoras
                                                </a>                                        
                                            </li>
                                            <li>
                                                <a href="{{url('/categorias')}}">
                                                    Categorias
                                                </a>                                        
                                            </li>
                                            <li>
                                                <a href="{{url('/pagos')}}">
                                                    Gestión de Pagos
                                                </a>                                        
                                            </li>
                                        </ul>
                                    </li>
                                @endif
                                @if ( Auth::user()->tipo == "1")
                                <li>
                                    <a href="{{url('/jugadores')}}">
                                        Jugadores
                                    </a>                                        
                                </li>
                                <li>
                                        <a href="{{url('/mispagos')}}">
                                            Cartola de Pagos
                                        </a>                                    
                                    </li>  
                                @endif
                                @if ( Auth::user()->tipo == "0")
                                    <li>
                                        <a href="{{url('/jugadores')}}">
                                            Jugadores
                                        </a>                                        
                                    </li>                                        
                                @endif
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }}  <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts 
    <script src="{{ asset('js/app.js') }}"></script>
    -->
</body>
</html>
