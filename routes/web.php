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
    return view('welcome');
});

Route::get('/reg_1A', function () 
{
    return view('Registrar_Estudiante');
});



Route::resource('estudiantes','EstudianteController');

Route::resource('actividades','ActividadController');



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

    Route::get('/Actualizar_Actividad','ActividadController@Registrar')
    ->name('ActualizarActividad');



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

Route::get('/secre', function () {
    return view('Menu_Secretaria');
});

Route::get('/titulacion', function () {
    return view('Menu_Titulacion');
});

Route::get('/reporte', function () {
    return view('Reportes');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/autocomplete/fetch','AutoCompleteController@fetch')->name('autocomplete.fetch');
