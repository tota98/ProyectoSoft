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



    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript" src="../js/bootstrap-datepicker.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/datepicker.css" >
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script>
    var j = jQuery.noConflict();
    j( function() {
        j( "#datepicker" ).datepicker();
    } );
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

            <div class="form-gruop">
                     <label for="inputState">Fecha inicio(*)</label>
            </div>
           

           

            <div class="row form-inline">
            <div class="form-row" >
                
           
            <div class="md-form">
  <input placeholder="Selected date" type="text" id="datepicker" class="form-control datepicker">
  <label for="date-picker-example">Try me...</label>
</div>



                <div class="form-gruop col-md-2">
                
                    <select id="dia" class="form-control" name ="dia" style="width:150px;">
                        <option value="" selected disabled>dia</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                        <option>13</option>
                        <option>14</option>
                        <option>15</option>
                        <option>16</option>
                        <option>17</option>
                        <option>18</option>
                        <option>19</option>
                        <option>20</option>
                        <option>21</option>
                        <option>22</option>
                        <option>23</option>
                        <option>24</option>
                        <option>25</option>
                        <option>26</option>
                        <option>27</option>
                        <option>28</option>
                        <option>29</option>
                        <option>30</option>
                        <option>31</option>
                     </select>

                </div>
               
                
                <div class="form-group col-md-2">
                    <select id="mes" class="form-control" name ="mes" style="width:150px;">
                    <option value="" selected disabled>mes</option>
                     <option >Enero</option>
                     <option>Febrero</option>
                     <option>Marzo</option>
                     <option>Abril</option>
                     <option>Mayo</option>
                     <option>Junio</option>
                     <option>Julio</option>
                     <option>Agosto</option>
                     <option>Septiembre</option>
                     <option>Octubre</option>
                     <option>Noviembre</option>
                     <option>Diciembre</option>
                     </select>
                </div>
                 

                <div class="form-group col-md-2">
                    <select id="año" class="form-control" name ="año" style="width:150px;">
                    <option value="" selected disabled>año</option>
                     <option >2019</option>
                     <option>2020</option>
                     <option>2021</option>
                     <option>2022</option>
                     <option>2023</option>
                     <option>2024</option>
                     <option>2025</option>
                     <option>2026</option>
                     </select>
                </div>

            </div>
            </div>
            <div class="row">
    
</div>
            
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
            
            
            
            


        </form>
    
    
    </div>

    
    </div>



</body>




  </html>