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

Route::get('/Menu_Secretaria','SecretariaController@Menu')
    ->name('MenuSecretaria');

Route::get('/reg_1A', function () 
{
    return view('Registrar_Estudiante');
});

Route::get('/reg_1B', function () {
    return view('Actualizar_Estudiante');
});

Route::get('/reg_2A', function () {
    return view('Registrar_Academico');
});

Route::get('/reg_1B', function () {
    return view('Actualizar_Estudiante');
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
