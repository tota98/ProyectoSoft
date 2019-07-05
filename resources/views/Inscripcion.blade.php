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
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.4/build/alertify.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.4/build/css/alertify.min.css"/>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/i18n/jquery-ui-i18n.min.js"></script>
  
    <script src="../js/locale/bootstrap-datepicker.es.js" charset="UTF-8"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="../css/datepicker.css" >
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
  
 



<script type="text/javascript">

 $(document).ready(function(){
    $.datepicker.setDefaults($.datepicker.regional['es']);

    $('#fechaInicio').datepicker({
        inline: true,
        minDate: "dateToday",
        onClose: function( selectedDate ) {
        $( "#fechaTermino").datepicker( "option", "minDate", selectedDate );
    }
    });
    $('#fechaTermino').datepicker({
        
    });
    
    
 });


  

</script>






</head>



<style type="text/css">
.btn-circle {
  width: 30px;
  height: 30px;
  line-height: 30px; /* adjust line height to align vertically*/
  padding:0;
  border-radius: 50%;
}
.error 
    {
     color: #F00;
    }

.alertify-notifier .ajs-message.ajs-error{
    color: #ffffff;
    background: rgba(217, 92, 92, 0,95);
    text-shadow: -1px -1px 0 rgba(0, 0, 0, 0,5);
    width:500px;
}
.alertify-notifier.ajs-right .ajs-message.ajs-visible {
  right: 530px;
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
                     <a class="navbar-brand" href="{{ url('/') }}">
                     Inicio
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
    
        <form  method ="post" action="{{route('Inscripcion.registrar')}}" id="form">
            {{ csrf_field() }}
           
            
            <div class="form-group">
                
                    <label for="nombre">Título(*)</label>
                    <input id="titulo" type="text" class="form-control" name = "titulo" placeholder="Titulo">
               
            </div>
            
            <div class="form-group">
                 <label for="inputState">Tipo de actividad(*)</label>
                 <input id="cantidadEstudiantes" type="hidden" class="form-control" name = "cantidadEstudiantes" placeholder="cant.Estudiantes" >
                 <input id="participacion"  type="hidden" type="text" class="form-control" name = "participacion" placeholder="participacion " >
                 <input id="id_Actividad" type="hidden" class="form-control" name = "id_Actividad" placeholder="cant.Estudiantes" >
          
                 <select id="actividad" class="form-control" name ="actividad">
                     <option value="" selected disabled>seleccione actividad</option>
                     @foreach($actividad_list as $actividad)
                        'nombre','cant_max','duracion','participacion_organizacion',
                     <option value = "{{$actividad->nombre }}" data-cant_max = "{{$actividad->cant_max}}" data-organizacion ="{{$actividad->participacion_organizacion}}" data-id="{{$actividad->id}}" >{{"nombre :".$actividad ->nombre." | "."cant. maxima de estudiantes: ".$actividad->cant_max}}</option>
                     @endforeach
                     
                 </select>
            </div>
           
            
            <div class="form-group form-inline">
                     <label for="inputState">Alumnos(*)</label> 
                     <div class="btn btn-primary btn-circle" id="botonMas">+</div>
                     <div class="btn btn-primary btn-circle" id="botonMenos">-</div>
                     
            </div>         
            
            
                <div id="original0" value="">
                    <select id="alumno0" class="form-control" name ="alumno0" style = "width: 565px; margin-top: 5px;">
                        
                        <option value=""  selected disabled>seleccione estudiante</option>
                          @foreach($estudiante_list as $estudiante)
                        <option value = "{{$estudiante->id}}" data-id="{{$estudiante->id}}">{{"rut: ".$estudiante ->rut." | "."nombre: ".$estudiante ->nombre}}</option>
                       @endforeach
                    
                    </select>
                </div>
               

           
            <div  id="asd"></div>
           
            
            
            
            <div class="form-group" style = "margin-top: 40px;">
                       
                     <label for="inputState">Academico(*)</label>
                   
                        <select id="id_academico_1" class="form-control" name ="id_academico_1">
                        <option value="" selected disabled>seleccione academico</option>
                        @foreach($academico_list as $academico)
                        <option value = "{{$academico->id }}" data-id = "{{$academico->id}}">{{"rut: ".$academico ->rut." | "."nombre: ".$academico ->nombre}}</option>
                        @endforeach
                        </select>
                        <select id="id_academico_2" class="form-control" name ="id_academico_2" style = "margin-top: 5px;">
                        <option value="" selected disabled>seleccione academico (opcional)</option>
                        @foreach($academico_list as $academico)
                        <option value = "{{$academico->id }}" data-id = "{{$academico->id}}">{{"rut: ".$academico ->rut." | "."nombre: ".$academico ->nombre}}</option>
                        @endforeach
                        </select>
                     
            </div>
            <div class="form-group form-inline">
                    <div class="form-group">
                             <label for="inputState">Fecha inicio(*)</label>
                             <input placeholder="fecha" type="text" id="fechaInicio" name="fechaInicio" class="form-control datepicker" style="width: 120px;">
                    </div>
                    <div class="form-group" style="margin-left: 30px;">
                             <label for="inputState">Fecha termino(*)</label>
                             <input placeholder="fecha" type="text" id="fechaTermino" name="fechaTermino" class="form-control datepicker" style="width: 120px;">
                    </div>
            </div>
           

           

           
        
            


       
    
        <div class="row">
    

        
            
           
    <div class = "form-group hidden" id="menu_extra" >       
    <div class="form-group">
             <label for="inputState">Nombre organización</label>
             <input id="nombreOrganizacion" type="text" class="form-control" name = "nombreOrganizacion" placeholder="Nombre organización">
    </div>
    
    <div class="form-group">
             <label for="inputState">Tutor</label>
             <input id="nombreTutor" type="text" class="form-control" name = "nombreTutor" placeholder="Tutor">
    </div>
    <button type="submit" id="boton2" class="btn btn-primary" style="display: inline-block;vertical-align: top; margin-top:20px">Inscribir</button>
    
    </div>
  
    <button type="submit" id="boton1" class="btn btn-primary" style="display: inline-block;vertical-align: top; margin-top:20px">Inscribir</button>
    </form>       
        
    
</div> 
    </div>
</div>



</body>
<script>



$('#actividad').on('change',function(){
    renovar = true;
    var cantidadEstudiantes = $(this).children('option:selected').data('cant_max');
    var participacion = $(this).children('option:selected').data('organizacion');
    var id = $(this).children('option:selected').data('id');
    $('#cantidadEstudiantes').val(cantidadEstudiantes);
    $('#participacion').val(participacion);
    $('#id_Actividad').val(id);
    if($("#participacion").val() == "on")
    {
        $("#menu_extra").removeClass('hidden'); 
        $("#boton2").removeClass('hidden'); 
        $("#boton1").addClass('hidden'); 
    }
    else{
        $("#menu_extra").addClass('hidden');
        $("#boton2").addClass('hidden'); 
        $("#boton1").removeClass('hidden'); 
    }

   
    //En caso de escoger otra actividad, se deben eliminar los estudiantes agregados anteriormente.
    while(i != 0){
        quitarEstudiantes();
    }
    renovar = false;
});

</script>

<script type='text/javascript'>

document.getElementById("botonMas").onclick = function() {agregarEstudiantes()};
document.getElementById("botonMenos").onclick = function() {quitarEstudiantes()};

var i = 0;
var renovar = false;



function agregarEstudiantes(){
    alertify.set('notifier','delay', 5);
    alertify.set('notifier','position', 'top-right');
              
    if(i < $("#cantidadEstudiantes").val()-1){
        var original;
        
        original = document.getElementById("alumno" +i);
        aux = document.getElementById("original0");
    
    var clone = original.cloneNode(true); // "deep" clone
    clone.id = "alumno" + ++i; // para asegurar que no se repita ninguna id
    clone.name = clone.id;
    aux.appendChild(clone);
    
    
    }
            else if ($("#cantidadEstudiantes").val() == 0)
                    {
                        alertify.error('Error, seleccione previamente una actividad.');

                    }
            else{
              

                alertify.error('Error, se llego a la cantidad maxima de estudiantes de esta actividad.');

                    //alert("error, se llego a la cantidad maxima de estudiantes de esta actividad.");
                }
        
}

function quitarEstudiantes(){

    alertify.set('notifier','delay', 5);
    alertify.set('notifier','position', 'top-right');

if((i <= $("#cantidadEstudiantes").val()-1 && i != 0) || renovar == true){
    var original;
    
    original = document.getElementById("alumno" +i);


original.parentNode.removeChild(original);
--i;


}
        else if ($("#cantidadEstudiantes").val() == 0)
                {
                    alertify.error('Error, seleccione previamente una actividad.');
                }
        else{
            alertify.error('Error, no puede inscribir una actividad sin estudiantes.');

            }
    
}

$("#boton1").click(function(e){

});

function EnviarOrganizacion(){

}
function Enviar(){
        $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });
            var titulo = $("input[id=titulo]").val();
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
            titulo: {
                required: true,
                lettersonly: true
            },
            actividad: {
                required: true,
            },
            correo: {
                required: true,
                email: true   
            },
            fechaInicio: {
                required:true,
            },
            fechaTermino:{
                required: true,
            },
            alumno0:{
                required: true,
            },
            id_academico_1:{
                required:true,
            },
            nombreOrganizacion:{
                required:true,
                lettersonly: true,
            },
            nombreTutor:{
                required:true,
                lettersonly: true,
            },
           
        }
    });
});
</script>






  </html>

  