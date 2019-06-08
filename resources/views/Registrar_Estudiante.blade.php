<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">



<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Titulación</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
   
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>


<style type="text/css">
    .navbar {
        background-color: #23415b;
    }
    .navbar .navbar-brand {
        color: #ffffff;
    }
    .navbar .navbar-brand:hover,
    .navbar .navbar-brand:focus {
        color: #e6ecf2;
    }
    .navbar .navbar-text {
        color: #ffffff;
    }
    .navbar .navbar-text a {
        color: #e6ecf2;
    }
    .navbar .navbar-text a:hover,
    .navbar .navbar-text a:focus {
        color: #e6ecf2;
    }
    .navbar .navbar-nav .nav-link {
        color: #ffffff;
        border-radius: .25rem;
        margin: 0 0.25em;
    }
    .navbar .navbar-nav .nav-link:not(.disabled):hover,
    .navbar .navbar-nav .nav-link:not(.disabled):focus {
        color: #e6ecf2;
    }
    .navbar .navbar-nav .nav-item.active .nav-link,
    .navbar .navbar-nav .nav-item.active .nav-link:hover,
    .navbar .navbar-nav .nav-item.active .nav-link:focus,
    .navbar .navbar-nav .nav-item.show .nav-link,
    .navbar .navbar-nav .nav-item.show .nav-link:hover,
    .navbar .navbar-nav .nav-item.show .nav-link:focus {
        color: #e6ecf2;
        background-color: #4e7ca8;
    }
    .navbar .navbar-toggle {
        border-color: #4e7ca8;
    }
    .navbar .navbar-toggle:hover,
    .navbar .navbar-toggle:focus {
        background-color: #4e7ca8;
    }
    .navbar .navbar-toggle .navbar-toggler-icon {
        color: #ffffff;
    }
    .navbar .navbar-collapse,
    .navbar .navbar-form {
        border-color: #ffffff;
    }
    .navbar .navbar-link {
        color: #ffffff;
    }
    .navbar .navbar-link:hover {
        color: #e6ecf2;
    }

    @media (max-width: 575px) {
        .navbar-expand-sm .navbar-nav .show .dropdown-menu .dropdown-item {
            color: #ffffff;
        }
        .navbar-expand-sm .navbar-nav .show .dropdown-menu .dropdown-item:hover,
        .navbar-expand-sm .navbar-nav .show .dropdown-menu .dropdown-item:focus {
            color: #e6ecf2;
        }
        .navbar-expand-sm .navbar-nav .show .dropdown-menu .dropdown-item.active {
            color: #e6ecf2;
            background-color: #4e7ca8;
        }
    }

    @media (max-width: 767px) {
        .navbar-expand-md .navbar-nav .show .dropdown-menu .dropdown-item {
            color: #1C2D3F;
        }
        .navbar-expand-md .navbar-nav .show .dropdown-menu .dropdown-item:hover,
        .navbar-expand-md .navbar-nav .show .dropdown-menu .dropdown-item:focus {
            color: #1C2D3F;
        }
        .navbar-expand-md .navbar-nav .show .dropdown-menu .dropdown-item.active {
            color: #1C2D3F;
            background-color: #4e7ca8;
        }
    }

    @media (max-width: 991px) {
        .navbar-expand-lg .navbar-nav .show .dropdown-menu .dropdown-item {
            color: #1C2D3F;
        }
        .navbar-expand-lg .navbar-nav .show .dropdown-menu .dropdown-item:hover,
        .navbar-expand-lg .navbar-nav .show .dropdown-menu .dropdown-item:focus {
            color: #1C2D3F;
        }
        .navbar-expand-lg .navbar-nav .show .dropdown-menu .dropdown-item.active {
            color: #1C2D3F;
            background-color: #4e7ca8;
        }
    }

    @media (max-width: 1199px) {
        .navbar-expand-xl .navbar-nav .show .dropdown-menu .dropdown-item {
            color: #1C2D3F;
        }
        .navbar-expand-xl .navbar-nav .show .dropdown-menu .dropdown-item:hover,
        .navbar-expand-xl .navbar-nav .show .dropdown-menu .dropdown-item:focus {
            color: #1C2D3F;
        }
        .navbar-expand-xl .navbar-nav .show .dropdown-menu .dropdown-item.active {
            color: #1C2D3F;
            background-color: #4e7ca8;
        }
    }

    .navbar-expand .navbar-nav .show .dropdown-menu .dropdown-item {
        color: #1C2D3F;
    }
    .navbar-expand .navbar-nav .show .dropdown-menu .dropdown-item:hover,
    .navbar-expand .navbar-nav .show .dropdown-menu .dropdown-item:focus {
        color: #1C2D3F;
    }
    .navbar-expand .navbar-nav .show .dropdown-menu .dropdown-item.active {
        color: #1C2D3F;
        background-color: #4e7ca8;
    }

    .navbar-nav > li > .dropdown-menu {
        background-color: #23415B;
    }

    body{
        background-color: #ffffff;
    }

</style>

    

<body>

    <div id="app" >
    
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                Titulación

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                     <a class="navbar-brand" href="{{ url('/') }}">
                     Inicio
                     <a class="navbar-brand" href="{{ url('/') }}">
                     Cerrar Sesion
                </ul>
             </a>
        </div>
    </nav>

    <div class="container theme-showcase" role="main">
    <div class="jumbotron">
    <!-- El include permite el uso del blade 'Notificacion', muestra los banners de alerta y errores  -->
    @include('Alerts.Notificacion')
   
   
   
    <h1>REGISTRO<span class="badge badge-secondary"></span></h1>

   
    <!-- FORMULARIO PARA REGISTRAR ESTUDIANTE -->
    
        <form method ="post" action="{{route('estudiantes.store')}}">
            {{ csrf_field() }}
           
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nombre">Nombre</label>
                    <input id="nombre" type="text" class="form-control" name = "nombre" placeholder="Nombre">
                </div>

                 <div class="form-group col-md-6">
                     <label for="apellido">Apellido</label>
                     <input id="apellido"  type="text" class="form-control" name = "apellido" placeholder="Apellido">
                 </div>

            </div>

            <div class="form-group">
                <label for="rut">Rut</label>
                <input id="rut" type="text" class="form-control" name = "rut" placeholder="12.345.678-9">
            </div>

            <div class="form-group">
                <label for="inputAddress2">Correo</label>
                <input id="correo" type="email" class="form-control" name ="correo" placeholder="example@example.com">
            </div>

            <div class="form-group">
                <div class="form-group">
                     <label for="inputState">Carrera</label>
                     <select id="carrera" class="form-control" name ="carrera">
                        <option value="" selected disabled>seleccione carrera</option>
                         <option>ICCI</option>
                         <option>IenCI</option>
                         <option>IECI</option>
                    </select>
                </div>
                
            
            </div>

            <div class="form-group">
                 <label for="telefono">Telefono</label>
                 <input id="telefono" name = "telefono" type="text" class="form-control" >
                



            </div>
        
             <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
    
    
    </div>
    

    </div>

</body>
</html>