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

  
 



<script type="text/javascript">

 $(document).ready(function(){
    $.datepicker.setDefaults($.datepicker.regional['es']);

    $('#fecha1').datepicker({
        inline: true,
        minDate: "dateToday",
        onClose: function( selectedDate ) {
        $( "#fecha2").datepicker( "option", "minDate", selectedDate );
    }
    });
    $('#fecha2').datepicker({
        
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
                 <input id="cantidadEstudiantes" type="hidden" class="form-control" name = "cantidadEstudiantes" placeholder="cant.Estudiantes" >
                 <input id="participacion"  type="hidden" type="text" class="form-control" name = "participacion" placeholder="participacion " >
          
                 <select id="actividad" class="form-control" name ="actividad">
                     <option value="" selected disabled>seleccione actividad</option>
                     @foreach($actividad_list as $actividad)
        'nombre','cant_max','duracion','participacion_organizacion',
                    <option value = "{{$actividad->nombre }}" data-cant_max = "{{$actividad->cant_max}}" data-organizacion ="{{$actividad->participacion_organizacion}}"  >{{"nombre :".$actividad ->nombre." | "."cant. maxima de estudiantes: ".$actividad->cant_max}}</option>
                     @endforeach
                     
                 </select>
            </div>
           
            
            <div class="form-group form-inline">
                     <label for="inputState">Alumnos(*)</label> 
                     <div class="btn btn-primary btn-circle" id="botonMas">+</div>
                     
            </div>         
            
            
                <div id="original0">
                    <select id="alumno" class="form-control" name ="alumno" style = "width: 565px">
                        
                        <option value="" selected disabled>seleccione estudiante</option>
                          @foreach($estudiante_list as $estudiante)
                        <option value = "{{$estudiante->nombre }}">{{"rut: ".$estudiante ->rut." | "."nombre: ".$estudiante ->nombre}}</option>
                       @endforeach
                    
                    </select>
                </div>
               

           
            <div  id="asd"></div>
           
            
            
            
            <div class="form-group" style = "margin-top: 40px;">
            
                     <label for="inputState">Academico(*)</label>
                   
                        <select id="academico1" class="form-control" name ="academico1">
                        <option value="" selected disabled>seleccione academico</option>
                        @foreach($academico_list as $academico)
                        <option value = "{{$academico->nombre }}">{{"rut: ".$academico ->rut." | "."nombre: ".$academico ->nombre}}</option>
                        @endforeach
                        </select>
                        <select id="academico2" class="form-control" name ="academico2">
                        <option value="" selected disabled>seleccione academico (opcional)</option>
                        @foreach($academico_list as $academico)
                        <option value = "{{$academico->nombre }}">{{"rut: ".$academico ->rut." | "."nombre: ".$academico ->nombre}}</option>
                        @endforeach
                        </select>
                     
            </div>
            <div class="form-group form-inline">
                    <div class="form-group">
                             <label for="inputState">Fecha inicio(*)</label>
                             <input placeholder="fecha" type="text" id="fecha1" name="fecha1" class="form-control datepicker" style="width: 120px;">
                    </div>
                    <div class="form-group" style="margin-left: 30px;">
                             <label for="inputState">Fecha termino(*)</label>
                             <input placeholder="fecha" type="text" id="fecha2" name="fecha2" class="form-control datepicker" style="width: 120px;">
                    </div>
            </div>
           

           

            <button type="submit" id="boton1" class="btn btn-primary" style="display: inline-block;vertical-align: top; margin-top:20px">Inscribir</button>
            
        
        
            


        </form>
    
        <div class="row">
    

        
            
           
    <div class = "form-group hidden" id="menu_extra" >       
    <div class="form-group">
             <label for="inputState">Nombre organización</label>
             <input id="nombreOrganizacion" type="text" class="form-control" name = "nombre" placeholder="Nombre organización">
    </div>
    
    <div class="form-group">
             <label for="inputState">Tutor</label>
             <input id="tutor" type="text" class="form-control" name = "tutor" placeholder="Tutor">
    </div>
    <button type="submit" id="boton2" class="btn btn-primary" style="display: inline-block;vertical-align: top; margin-top:20px">Inscribir</button>
    
    </div>
    
    
</div> 
    </div>
</div>



</body>
<script>
$('#actividad').on('change',function(){
    var cantidadEstudiantes = $(this).children('option:selected').data('cant_max');
    var participacion = $(this).children('option:selected').data('organizacion');
    $('#cantidadEstudiantes').val(cantidadEstudiantes);
    $('#participacion').val(participacion);

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
});
</script>

<script type='text/javascript'>

document.getElementById("botonMas").onclick = function() {agregarEstudiantes()};


var i = 0;




function agregarEstudiantes(){
if(i < $("#cantidadEstudiantes").val()-1){
    var original;
    
    original = document.getElementById("original" +i);

  
var clone = original.cloneNode(true); // "deep" clone
clone.id = "original" + ++i; // there can only be one element with an ID

original.appendChild(clone);


}
else if ($("#cantidadEstudiantes").val() == 0){
    alert("error, seleccione previamente una actividad"); 
}
else{
    alert("error, se llego a la cantidad maxima de estudiantes de esta actividad.");
}
    
}


    </script>

  </html>

  