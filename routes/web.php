<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/reg_1A', function () 
{
    return view('Registrar_Estudiante');
});



Route::resource('estudiantes','EstudianteController');


//Rutas para controlador autoComplete, utilizado en vistas de actualizacion
Route::get('/Modificar_Estudiante','EstudianteController@Modificar')
    ->name('estudiantes.modificar');
Route::get('/Modificar_Academico','AcademicoController@Modificar')
    ->name('academicos.modificar');
    Route::get('/Modificar_Actividad','ActividadController@Modificar')
    ->name('actividades.modificar');

Route::resource('actividades','ActividadController');

Route::resource('academicos','AcademicoController');


Route::get('/Menu_Secretaria','SecretariaController@Menu')
    ->name('MenuSecretaria');

Route::get('/Menu_Encargado_V','EncargadoController@Menu')
    ->name('MenuEncargado');

Route::get('/Registrar_Estudiante','EstudianteController@Registrar')
    ->name('RegistrarEstudiante');

Route::get('/Actualizar_Estudiante','EstudianteController@Actualizar')
    ->name('ActualizarEstudiante');

Route::get('/Registrar_Actividad','ActividadController@Registrar')
    ->name('RegistrarActividad');

Route::get('/Actualizar_Actividad','ActividadController@Actualizar')
    ->name('ActualizarActividad');
Route::get('/Inscripcion','ActividadController@Inscripcion')->name('InscripcionActividad');


Route::get('/reg_1B', function () {
    return view('Actualizar_Estudiante');
});

Route::get('/reg_2A', function () {
    return view('Registrar_Academico');
});

Route::get('/reg_2B', function () {
    return view('Actualizar_Academico');
});

Route::get('/reg_3A', function () {
    return view('Registrar_Actividad');
});

Route::get('/reg_3B', function () {
    return view('Actualizar_Actividad');
});

Route::get('/reg_4A', function () {
    return view('Registrar_Inscripcion');
});

Route::get('/reg_5A', function () {
    return view('Registrar_Examen');
});

Route::get('/secre', function () {
    return view('Menu_Secretaria');
});

Route::get('/titulacion', function () {
    return view('Menu_Titulacion');
});

Route::get('/reporte', function () {
    return view('Reportes');
});

Route::get('/inscripcion', function () {
    return view('Inscripcion');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/autocomplete/fetch','AutoCompleteController@ActualizarEstudiante')->name('autocomplete.estudiante');
Route::post('/autocomplete/store','AutoCompleteController@ActualizarAcademico')->name('autocomplete.academico');
Route::post('/autocomplete/A_Actividad','AutoCompleteController@ActualizarActividad')->name('autocomplete.actividad');

Route::post('/Inscripcion/registrar','InscripcionController@registrar')->name('Inscripcion.registrar');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
