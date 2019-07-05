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
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.4/build/alertify.min.js"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.4/build/css/alertify.min.css"/>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>


<style type="text/css">
.error 
    {
     color: #F00;
    }

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
    
        <form id="form">
            {{ csrf_field() }} 
           
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="tipo">Tipo de actividad</label>
                    <input id="nombre" type="text" class="form-control" name = "nombre" placeholder="Nombre del tipo de actividad" disabled>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="cantEst">Estudiantes participantes</label>
                    <select class="form-control" id="cantEst"  name="cantEst" disabled>
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
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="semestres">Duración en semestres</label>
                <select class="form-control" id="duracion" name="duracion" disabled>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                </select>
            </div>

            <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="participacion_organizacion" name="participacion_organizacion" disabled>
            <label class="custom-control-label" for="defaultUnchecked">incluye participación externa</label>
        </div>

        
            <input id="id_Actividad" type="hidden" name ="id_Actividad" class="form-control" >
            <div class="form-check">
                 <input class="form-check-input" type="checkbox" id="ELIMINAR" name="ELIMINAR" disabled>
                 <label class="form-check-label" for="defaultCheck1">
                 Eliminar Actividad
                 </label>
                 
            </div>
            
             
        </form>
        <button type="submit" class="btn btn-primary btn-submit">Aplicar</button>

        
    </div>

   
    </div>

</body>

<script>



    $(document).ready(function () {

        jQuery.validator.addMethod('lettersonly', function(value, element) {
    return this.optional(element) || /^[a-z áãâäàéêëèíîïìóõôöòúûüùçñ]+$/i.test(value);
}, "Letters and spaces only please");

        $.extend( $.validator.messages, {
	required: "Este campo es obligatorio.",
	remote: "Por favor, rellena este campo.",
	email: "Por favor, escribe una dirección de correo válida.",
	url: "Por favor, escribe una URL válida.",
	date: "Por favor, escribe una fecha válida.",
	dateISO: "Por favor, escribe una fecha (ISO) válida.",
	number: "Por favor, escribe un número válido.",
    digits: "Por favor, escribe sólo dígitos.",
    lettersonly: "Por favor, incluir solo letras en el campo.",
	creditcard: "Por favor, escribe un número de tarjeta válido.",
	equalTo: "Por favor, escribe el mismo valor de nuevo.",
	extension: "Por favor, escribe un valor con una extensión aceptada.",
	maxlength: $.validator.format( "Por favor, no escribas más de {0} digitos." ),
	minlength: $.validator.format( "Por favor, no escribas menos de {0} caracteres." ),
	rangelength: $.validator.format( "Por favor, escribe un valor entre {0} y {1} caracteres." ),
	range: $.validator.format( "Por favor, escribe un valor entre {0} y {1}." ),
	max: $.validator.format( "Por favor, escribe un valor menor o igual a {0}." ),
	min: $.validator.format( "Por favor, escribe un valor mayor o igual a {0}." ),
	nifES: "Por favor, escribe un NIF válido.",
	nieES: "Por favor, escribe un NIE válido.",
	cifES: "Por favor, escribe un CIF válido."
} );

        
    $('#form').validate({

   
        //se inicia plugin para validar en tiempo real
        rules: {
            nombre: {
                required: true,
                lettersonly: true
            },
            duracion: {
                required: true,
            },
            cantEst: {
                required: true,
                 
            },
           
        }
    });
});
</script>


<script type="text/javascript">






    $(".btn-submit").click(function(e){
      if($('#ELIMINAR').is(":checked")){
            
            swal({
                        title: "Seguro que desea eliminar este academico?",
                        text: "Una vez eliminado, no podra recuperar la información perdida",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                        buttons: ["Cancelar", "Aceptar"],
                })
            .then((willDelete) => {
              if (willDelete) 
              {
                Enviar();
                }
             }); 
            }
        else
        {
           Enviar();
        }
    });
    

</script>
<script>

function Enviar(){
        $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });
            var nombre = $("input[id=nombre]").val();
            var cantEst = $("input[id=cantEst]").val();
            var duracion = $("input [id=duracion]").val();
            var id_Actividad = $("input [id=id_Actividad]").val();
            var participacion;
            var ischecked2 = $('#participacion_organizacion').is(":checked");
            if(ischecked2){
                participacion = "on";
            }
            else{
                participacion = "off;"
            }
            var eliminar = $('#ELIMINAR').val();
            var ischecked = $('#ELIMINAR').is(":checked");
            if (ischecked) {
                eliminar = "on";
            }
            else{
                eliminar = "off";
            }
                var _token = $('input[name="_token"]').val();
                $.ajax({
            
               type:'get',
               url:'/Modificar_Actividad',
               data:{nombre:nombre,cantEst:cantEst,duracion:duracion,participacion:participacion,eliminar:eliminar,_token:_token},
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
                    url:"{{ route('autocomplete.actividad') }}",
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
                $('#cantEst').prop('disabled',false);
                $('#duracion').prop('disabled',false);
                $('#participacion_organizacion').prop('disabled',false);
                $('#id_Actividad').prop('disabled',false);
                $('#ELIMINAR').prop('disabled',false);

                $('#buscar').val(""); 
              var array =  $(this).text().split(" | ");
              $('#nombre').val(array[0]);
              $('#cantEst').val(array[1]);
              $('#duracion').val(array[2]);
              if(array[3] == 'on'){
                $('#participacion_organizacion').prop('checked',true);
              }
              else{
                $('#participacion_organizacion').prop('checked',false);
              }
              
              $('#id_Actividad').val(array[4]);
             
             
              $('#sugerencias').fadeOut(0);
                
            });
         });
         
    </script>