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
    <script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"
  integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="
  crossorigin="anonymous"></script>
  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script
            src="https://code.jquery.com/jquery-3.4.1.js"
            integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
            crossorigin="anonymous"></script>
    <!-- Fonts -->
   
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
   
    

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    
    
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

    <div class="container theme-showcase" role="main" id="main">


    
    <div class="jumbotron">
    
         <div class="input-group input-group-lg">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-lg">BUSQUEDA</span>
             </div>

             

            <input id="buscar" name="buscar" type="text" class="form-control" placeholder="Buscar" />
             <div id="sugerencias"></div>
         </div>
         @include('Alerts.Notificacion')    

        
         <h1>ACTUALIZACION<span class="badge badge-secondary"></span></h1>
        
        <!-- FORMULARIO PARA ACTUALIZAR ESTUDIANTE -->
                                    
        <form method ="GET" action="{{route('estudiantes.modificar')}}">
            {{ csrf_field() }}

        
        
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name = "nombre" placeholder="Nombre" disabled>
                </div>

                 <div class="form-group col-md-6">
                     <label for="apellido">Apellido</label>
                     <input type="text" class="form-control" id="apellido" name ="apellido" placeholder="Apellido" disabled>
                 </div>

            </div>

            <div class="form-group">
                <label for="inputAddress2">Correo</label>
                <input type="email" class="form-control" id="correo" name ="correo" placeholder="example@example.com" disabled>
            </div>

            <div class="form-group">
                <div class="form-group">
                     <label for="inputState">Carrera</label>
                     <select id="carrera" name ="carrera" class="form-control" disabled>
                         <option value="" selected disabled>seleccione carrera</option>
                         <option>ICCI</option>
                         <option>IenCI</option>
                         <option>IECI</option>
                    </select>
                </div>
                
            
            </div>

            <div class="form-group">
                 <label for="telefono">Telefono</label>
                 <input type="text" class="form-control" id="telefono" name = "telefono" disabled>
            </div>
        
            <div class="form-group">
                 <input class="form-check-input" type="checkbox" id="ELIMINAR" name="ELIMINAR" disabled>
                 <label class="form-check-label" for="defaultCheck1">
                 Eliminar Alumno
                 </label>
                 <input id="id_Estudiante" type="hidden" name ="id_Estudiante" class="form-control" >
            </div>
            

             <button type="submit" class="btn btn-primary">Aplicar</button>

            
            
        </form>

    
    
    </div>

</body>

</html>

<script>
         $(document).ready(function(){
           

            $('#buscar').keyup(function(){
            var query = $(this).val();
            var key = event.key;
            if(key == "Backspace"){
                if ($('#buscar').val() == '') 
                {
                    $('#sugerencias').fadeOut(0);
                }
            }
            if(query != '')
            {
                var _token = $('input[name="_token"]').val();

                $.ajax({
                    url:"{{ route('autocomplete.fetch') }}",
                    method:"POST",
                    data:{query:query, _token:_token},
                    success:function(data){
                        $('#sugerencias').fadeIn(0);
                           $('#sugerencias').html(data);

                    }

                }).fail( function( jqXHR, textStatus, errorThrown ) {
                        alert( 'Error!! AJAX IS DED' )
                });;


            }
});
            $(document).on('click', 'li', function(){  
                $('#nombre').prop('disabled',false);
                $('#apellido').prop('disabled',false);
                $('#correo').prop('disabled',false);
                $('#carrera').prop('disabled',false);
                $('#telefono').prop('disabled',false);
                $('#id_Estudiante').prop('disabled',false);
                $('#ELIMINAR').prop('disabled',false);

                $('#buscar').val("");  
              var array =  $(this).text().split(" | ");
              $('#nombre').val(array[0]);
              $('#apellido').val(array[1]);
              $('#correo').val(array[2]);
              $('#carrera').val(array[3]);
              $('#telefono').val(array[4]);
              $('#id_Estudiante').val(array[5]);
             
             
              $('#sugerencias').fadeOut();
                
            });
         });
         
    </script>


