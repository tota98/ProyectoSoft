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
                            </a>
                        </ul>
                        
                     </div>
                </div>
         </nav>


    <div class="container theme-showcase" role="main" id="main">
        <div class="jumbotron">
            <div class="input-group input-group-lg hidden">
            
            </div>
            @include('Alerts.Notificacion')  

            <h2>Inscripción Formal<span class="badge badge-secondary"></span></h2>
            <div class="form-group">
                <label for="inputAddress2">ID buscada</label>
            </div>

   
    <!-- FORMULARIO PARA REGISTRAR INSCRIPCION -->
    
            <form method ="post" id="form">
                {{ csrf_field() }}
                @php
                    $count = 0;
                @endphp
                <input type="text" id="ID1" onkeyup="myFunction()" placeholder="Search for names..">                      
                <table class="table" id="tabla" >
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Estado</th>
                            
                            <th scope="col">Seleccion</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($actividad_titulacions as $actividad)
                        @if($actividad->estado == "INGRESADA")
                        @break($count == 10)
                        <tr>
                            <td id="id_actividad">{{$actividad->id}}</td>
                            <td>{{$actividad->titulo}}</td>
                            <td>{{$actividad->estado}}</td>
                            
                            <td>
                            @php
                                $count++;
                            @endphp              
                            <input class="form-check-input" type="radio" id="seleccionar" name="seleccionar">
                            <script>
                                if($('#seleccionar').is(":checked")){
                                    ID = id;
                                }
                            </script>
                            </td>
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
                            <div id="sugerencias"></div>
                        
                         </div>  
        
                     </div>
                     <button type="submit" class="btn btn-primary btn-submit" style="margin-left: 15px;"name="Actualizar" id="boton">Aplicar </button>
                </form>
                
                
                
         </div>
     </div>

</body>

<script type="text/javascript">

    $(".btn-submit").click(){
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
    //$("#boton1").click(function(e){

    //});

    //var id_actividad;


    //$('input[type="radio"]').on('click change', function(e) {

    //});
function Enviar(){
        $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });
        
        if($('#seleccionar').is(":checked")){
            Seleccionar = "on"
        }
        else{
            Seleccionar = "off"
        }
        var id_actividad = ID;

        var _token = $('input[name="_token"]').val();
        $.ajax({
            
        type:'get',
        url:'/Modificar_Incripcion',
        data:{id_actividad:id_actividad,Seleccionar:Seleccionar,_token:_token},
        success:function(data){
            location.reload();
        }
           
        }).fail( function( jqXHR, textStatus, errorThrown ) {
            alert( 'dead ajax' )
                //location.reload();
        });
}
</script>
<script>
 $(document).ready(function(){

    $('#buscar').keyup(function(event){

    var key = event.key;
    if(key == "Backspace"){
        if ($('#buscar').val() == '') {
        $('#sugerencias').fadeOut(0);
        }
    }
    var query = $(this).val();
            
    if(query != ''){ 
    var _token = $('input[name="_token"]').val();
        $.ajax({
                    
                    
                    url:'{{ route('autocomplete.estudiante') }}',
                    method:"POST",
                    data:{query:query, _token:_token},
                    success:function(data){
                        $('#sugerencias').fadeIn(0);
                        $('#sugerencias').html(data);
                    }
                }).fail( function( jqXHR, textStatus, errorThrown ) {
                        alert( 'Error, revise la conexion con la base de datos ' )
                });


            }
});
            $(document).on('click', 'li', function(){ 
                 
                
              $('#id').prop('disabled',false);
              $('#buscar').val(""); 
              var array =  $(this).text().split(" | ").join("|");
              array = array.split("|");
              $('#ID1').val(array[5]);

              $('#sugerencias').fadeOut(0);
              
              
                
            });
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
</html>