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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/i18n/jquery-ui-i18n.min.js"></script>
  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="../js/locale/bootstrap-datepicker.es.js" charset="UTF-8"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="../css/datepicker.css" >
    
    
<script type="text/javascript">

 $(document).ready(function(){
    $.datepicker.setDefaults($.datepicker.regional['es']);

    $('#fechaExamen').datepicker({
        inline: true,
        minDate: "dateToday",
        
    });
     
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
                        <input id="buscar" name="buscar" type="text" class="form-control" placeholder="Buscar por rut" />
                        <div id="sugerencias"></div>
                    </div>
                    @include('Alerts.Notificacion')  

                    <h2>Exámenes de Título <span class="badge badge-secondary"></span></h2>
            
                    <!-- FORMULARIO PARA REGISTRAR EXAMEN -->
                
                    <form method ="post" id="form">
                        {{ csrf_field() }}
                        <div class="container">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputState">Fecha examen </label>
                                    <input id="fechaExamen" name="fechaExamen" type="text" class="form-control datepicker" style="width: 120px" placeholder="Fecha Examen"/>
                                </div>
                    
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputState">Nota </label>
                                    <input id="nota" name="nota" type="text" class="form-control" style="width: 120px" placeholder="Notas"/>  
                                </div>
                            </div>
                        </div>

                        @php
                            $count = 0;
                        @endphp
                        <input type="text" id="ID1" onkeyup="myFunction()" placeholder="Buscar rut..">                 
                        <table class="table" id="tabla">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Título</th>
                                <th scope="col">Estado</th>
                                    
                                <th scope="col">Seleccion</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($actividad_titulacions as $actividad)
                                    @if($actividad->estado == "ACEPTADA")
                                        @break($count == 10)
                                    <tr>
                                        <td id="id_actividad">{{$actividad->id}}</td>
                                        <td>{{$actividad->titulo}}</td>
                                        <td>{{$actividad->estado}}</td>
                                        <td>
                                        <input class="form-check-input" type="radio" id="seleccionar" name="seleccionar">
                                        <script>
                                        if($('#seleccionar').is(":checked")){
                                            id1 = id};
                                        }
                                        </script>
                                        </td>
                                        @php
                                            $count++;
                                        @endphp
                                    @endif
                                    </tr>
                                    @endforeach
                                </tbody>
                         </table>
                         <div class="form-group col-md-12">
                            <div class="form-group">
                                    
                                @if($count < 10 )
                                <input class="form-control" id="disabledInput" type="text" placeholder="Rut" disabled>
                                @else
                                <input id="numero" name="numero" type="text" class="form-control" placeholder="Rut"/>
                                @endif
                            </div>  
            
                         </div>
                         <button  type="submit" class="btn btn-primary btn-submit" style = "margin-bottom: -55px">Aplicar</button>
                     </form>
                     
                            
                        
             </div>     
         </div>     
 
    

</body>

<script type="text/javascript">

    $(".btn-submit").click(function(e){
      
        Enviar();    
      
    });
    

</script>

<script>
$(document).ready(function(){
var cantidad = 10;
var aux = "asdasdasd";
var tabla = document.getElementById("tabla");

});
</script>
<script>
    function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i, j, visible;
  input = document.getElementById("ID1");
  filter = input.value.toUpperCase();
  table = document.getElementById("tabla");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    visible = false;
    /* Obtenemos todas las celdas de la fila, no sólo la primera */
    td = tr[i].getElementsByTagName("td");
    for (j = 0; j < td.length; j++) {
      if (td[j] && td[j].innerHTML.toUpperCase().indexOf(filter) > -1) {
        visible = true;
      }
    }
    if (visible === true) {
      tr[i].style.display = "";
    } else {
      tr[i].style.display = "none";
    }
  }
}
</script>

<script>
function Enviar(){
        $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });
            var id = id1;
            var nota = $("input[id=nota]").val();
            var fechaExamen = $("input[id=fechaExamen]").val()

            var _token = $('input[name="_token"]').val();
            $.ajax({
            
            type:'get',
            url:'/Modificar_Examen',
            data:{id:id,nota:nota,fechaExamen:fechaExamen,_token:_token},
            success:function(data){
                location.reload(); 
            }
           
            }).fail( function( jqXHR, textStatus, errorThrown ) {
                alert( 'ERROR, revise que los datos del formulario esten correctos. ' )
                //location.reload();
            });
            }


</script>
</html>