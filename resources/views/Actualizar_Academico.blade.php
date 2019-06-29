<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   

    <title>Titulación</title>

    <!-- Scripts -->
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

    <!-- Fonts -->
   
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    

    
     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">
    
</head>


<style type="text/css">

.error {
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

    <div class="container theme-showcase" role="main">
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
         
       
        
        <!-- FORMULARIO PARA ACTUALIZAR ACTIVIDAD -->
        <form id="form"style = "margin-bottom: 225px">

        <div class="flash-message"></div>
            {{ csrf_field() }}
            
            <div class="form-row" >
            

             
                <div class="form-group col-md-6">
                <div>
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" disabled>
                    </div>
                    <label for="apellido">Apellido</label>
                    <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" disabled>
                
                </div>
                <div>
                </div>
                <div class="form-group col-md-6">
                <label for="id">ID</label>
             <input id="id_Academico_aux" name ="id_Academico_aux" class="form-control" style="width: 100px;" disabled> 
             <input id="id_Academico" name ="id_Academico" class="form-control" style="width: 100px;" type="hidden"> 
                     <label for="inputAddress2">Correo</label>
                <input type="text" class="form-control" id="correo" name ="correo" placeholder="ejemplo@ejemplo.com" disabled>
                     </div>
                 
                 
            </div>

            <div class="form-group">
                
            </div>

            
         

        </form>
        <div>
            <div class="form-check">
                 <input class="form-check-input" type="checkbox" id="ELIMINAR" name="ELIMINAR"   disabled>
                 <label class="form-check-label" for="defaultCheck1">
                 Eliminar Academico
                 </label>
                 </div>
         
             <button  type="submit" class="btn btn-primary btn-submit" style = "margin-bottom: -55px">Aplicar</button>
             
            
          </div>
    </div>
    
    </div>
    

</body>


<script>



    $(document).ready(function () {
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
	maxlength: $.validator.format( "Por favor, no escribas más de {0} caracteres." ),
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

   
        // initialize the plugin
        rules: {
            nombre: {
                required: true,
                lettersonly: true
            },
            apellido: {
                required: true,
                lettersonly: true
            },
            correo: {
                required: true,
                email: true
            },
            minlength: {
                required: true,
                minlength: 5
                
            },
            maxlength: {
                required: true,
                maxlength: 8
                
            },
            minvalue: {
                required: true,
                min: 1
                
            },
            maxvalue: {
                required: true,
                max: 100
                
            },
            range: {
                required: true,
                range: [20, 40]
                
            },
            url: {
            required: true,
            url: true
            },
            filename: {
                required: true,
                extension: "jpeg|png"
            },
        }
    });
});
</script>

<script type="text/javascript">



    $.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

    });



    $(".btn-submit").click(function(e){
      

       
        if($('#ELIMINAR').is(":checked")){

            if(!confirm('Desea realmente eliminar este academico?')){
              e.preventDefault();
              
        }else{

            e.preventDefault();
        var nombre = $("input[id=nombre]").val();

        var apellido = $("input[id=apellido]").val();

        var id_Academico = $("input[id=id_Academico]").val();

        var correo = $("input[id=correo]").val();


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
          
           url:'/Modificar_Academico',
          
           data:{nombre:nombre,apellido:apellido,correo:correo,id_Academico:id_Academico,eliminar:eliminar,_token:_token},
        
           success:function(data){
            location.reload();
            
                
           }

        }).fail( function( jqXHR, textStatus, errorThrown ) {
            alert( 'ERROR, revise que los datos del formulario esten correctos. ' )
            //location.reload();
                });

            
            }

        }else{

            e.preventDefault();
        var nombre = $("input[id=nombre]").val();

        var apellido = $("input[id=apellido]").val();

        var id_Academico = $("input[id=id_Academico]").val();

        var correo = $("input[id=correo]").val();


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
          
           url:'/Modificar_Academico',
          
           data:{nombre:nombre,apellido:apellido,correo:correo,id_Academico:id_Academico,eliminar:eliminar,_token:_token},
        
           success:function(data){
            location.reload();
            
                
           }

        }).fail( function( jqXHR, textStatus, errorThrown ) {
            //swal("Hello world!");
            alert( 'ERROR, revise que los datos del formulario esten correctos. ' )
                });
        }
        

      
        
        

               

	});



</script>

</html>


<script>
         $(document).ready(function(){
           

            



            $('#buscar').keyup(function(event){

            var key = event.key;
            if(key == "Backspace"){
                if ($('#buscar').val() == '') 
                {
                    $('#sugerencias').fadeOut(0);
                }
            }
            var query = $(this).val();
            
            if(query != '')
            {

                
                var _token = $('input[name="_token"]').val();

                $.ajax({
                    
                    
                    url:'{{ route('autocomplete.academico') }}',
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
                //$('#id_Academico').prop('disabled',false);
                $('#ELIMINAR').prop('disabled',false);

              $('#buscar').val(""); 
              var array =  $(this).text().split(" | ").join("|");
              array = array.split("|");
              
              $('#nombre').val(array[0]);
              $('#apellido').val(array[1]);
              $('#correo').val(array[2]);
              $('#id_Academico').val(array[3]);
              $('#id_Academico_aux').val(array[3]);
             
              $('#sugerencias').fadeOut(0);
              
                
            });
         });
         
    </script>





