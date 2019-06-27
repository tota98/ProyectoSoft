<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">



<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Titulación</title>

    <!-- Scripts -->
    

    <!-- Fonts -->
   
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


  
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    
 
    
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/i18n/jquery-ui-i18n.min.js"></script>
  
    <script src="../js/locale/bootstrap-datepicker.es.js" charset="UTF-8"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="../css/datepicker.css" >

  
 



<script>
 $(document).ready(function(){

    $('#fecha').datepicker({

        language: 'es'
		
    });
    $.datepicker.setDefaults($.datepicker.regional['es']);
 });
</script>




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
            <a class="navbar-brand">
                Titulación

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                     <a class="navbar-brand" href="{{ URL::previous() }}">
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
   
   
   
     <h1>INSCRIPCIÓN<span class="badge badge-secondary"></span></h1>
     <label>(*) Campos Obligatorios</label>
   
     <!-- FORMULARIO PARA REGISTRAR ESTUDIANTE -->
    
        <form method ="post" action="{{route('estudiantes.store')}}">
            {{ csrf_field() }}
           
            
            <div class="form-group">
                
                    <label for="nombre">Título(*)</label>
                    <input id="titulo" type="text" class="form-control" name = "titulo" placeholder="Titulo">
               

            </div>
            
            <div class="form-group">
                 <label for="inputState">Tipo de actividad(*)</label>
                 <select id="actividad" class="form-control" name ="actividad">
                     <option value="" selected disabled>seleccione actividad</option>
                     @foreach($actividad_list as $actividad)
                    <option value = "{{$actividad->nombre }}">{{$actividad ->nombre}}</option>
                     @endforeach
                     
                 </select>
            </div>
           
            <div class="form-group">
                     <label for="inputState">Alumnos(*)</label>
                     <select id="alumno" class="form-control" name ="alumno">
                        <option value="" selected disabled>seleccione estudiante</option>
                        @foreach($estudiante_list as $estudiante)
                    <option value = "{{$estudiante->nombre }}">{{$estudiante ->nombre}}</option>
                     @endforeach
                    </select>
            </div>
            
            <div class="form-group">
                     <label for="inputState">Academico(*)</label>
                     <select id="academico" class="form-control" name ="academico">
                        <option value="" selected disabled>seleccione academico</option>
                        @foreach($academico_list as $academico)
                    <option value = "{{$academico->nombre }}">{{$academico ->nombre}}</option>
                     @endforeach
                         
                    </select>
            </div>

            <div class="form-group">
                     <label for="inputState">Fecha inicio(*)</label>
                     <input placeholder="fecha" type="text" id="fecha" name="fecha" class="form-control datepicker" style="width: 120px;">
            
            </div>
           

           

         
            
        
        <div class="row">
    

        
            <button type="submit" class="btn btn-primary" style="display: inline-block;vertical-align: top; margin-top:20px">Inscribir</button>
           
           
            <div class="form-group">
                     <label for="inputState">Nombre organización</label>
                     <input id="nombreOrganizacion" type="text" class="form-control" name = "nombre" placeholder="Nombre organización">
            </div>
            
            <div class="form-group">
                     <label for="inputState">Tutor</label>
                     <input id="tutor" type="text" class="form-control" name = "tutor" placeholder="Tutor">
            </div>

            <button type="submit" class="btn btn-primary" style="display: inline-block;vertical-align: top; margin-top:20px">Inscribir</button>
            
            
        </div> 
            


        </form>
    
    
    </div>
    </div>



</body>




  </html>

  