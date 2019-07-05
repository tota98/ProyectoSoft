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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
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
                     <a class="navbar-brand" href="{{ url('/') }}">
                     Inicio
                </ul>
             </a>
        </div>
    </nav>

<div class="container theme-showcase" role="main" id="main">
    <div class="jumbotron">
         <div class="input-group input-group-lg hidden">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-lg">BÚSQUEDA</span>
             </div>
             <input id="buscar" name="buscar" type="text" class="form-control" placeholder="numero"/>
             <div id="sugerencias"></div>
         </div>
         @include('Alerts.Notificacion')  

         <h1>Inscripción Formal<span class="badge badge-secondary"></span></h1>
   
    <!-- FORMULARIO PARA REGISTRAR INSCRIPCION -->
    
        <form>
            {{ csrf_field() }}                
            <div class="form-group col-md-12">
                    <div class="form-group">
                        <label for="inputState">Numero de inscripcion </label>
                        <input id="numero" name="numero" type="text" class="form-control" placeholder="numero"/>
            
                    </div>        
            </div>
            
                
               
            
                <button type="submit" class="btn btn-primary" style="margin-left: 15px;" id="boton">Registrar </button>
                <table class="table" id="tabla">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Fecha registro</th>
                    <th scope="col">Seleccion</th>
                  </tr>
                </thead>
                     <tbody>
                       

                       @foreach($actividad_titulacions as $actividad)
                       <tr>
                      <td id="id_actividad">{{$actividad->id}}</td>
                         <td>{{$actividad->titulo}}</td>
                         <td>{{$actividad->estado}}</td>
                         <td>{{$actividad->fecha_registro}}</td>
                         <td>
                         <input id="radio"  type="radio" class="form-check-input" id="seleccionar" name="seleccionar">
                         </td>
                       </tr>
                          @endforeach
                    
                     </tbody>
                </table>
        </form>
        
    </div>
</div>

</body>

<script type="text/javascript">

    //$(".btn-submit").click(){
        //swal({
            //title: "¿Seguro que ingresó el número de inscripción correcto?",
            //text: "Una vez ingresado, no podrá modificarse",
            //icon: "warning",
            //buttons: true,
            //dangerMode: true,
            //buttons: ["Cancelar", "Aceptar"],
        //})
        //Enviar();
    //});

</script>

<script>
$(document).ready(function(){
var cantidad = 10;
var aux = "asdasdasd";
var tabla = document.getElementById("tabla");

});
</script>

<script>
$("#boton1").click(function(e){

});

var id_actividad;


$('input[type="radio"]').on('click change', function(e) {

});
function Enviar(){
        $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });
            var numero = $("input[id=numero]").val();
            var id_Actividad = $("input[id=id_Actividad]").val();
            var id_Academico_1 = $("input[id=id_Academico_1]").val();
            var id_Academico_2 = $("input[id=id_Academico_2]").val();
            var fechaInicio = $("#fechaInicio").val();
            var fechaTermino = $("#fechaTermino").val();
            var estudiantes = 1;
            
            
            
                var _token = $('input[name="_token"]').val();
                $.ajax({
            
                    url:'{{ route('Inscripcion.registrar') }}',
                    method:"POST",
               data:{titulo:titulo,id_Actividad:id_Actividad,id_Academico_1:id_Academico_1,id_Academico_2:id_Academico_2,
                fechaInicio:fechaInicio,fechaTermino:fechaTermino,estudiantes:estudiantes,_token:_token},
               success:function(data){
                
               }
           
            }).fail( function( jqXHR, textStatus, errorThrown ) {
                alert( 'dead ajax' )
                //location.reload();
            });
}
</script>
</html>