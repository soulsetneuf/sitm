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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

/*Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index');
*/

Route::group(['middleware' => ['auth'], 'prefix' => ''], function(){
    Route::resource('persona','PersonaController');
    Route::resource('medico','MedicoController');
    Route::resource('equipo','EquipoController');
    Route::resource('cama','CamaController');
    Route::resource('paciente','PacienteController');
    Route::resource('tratamiento','TratamientoController');
    Route::resource('file', 'FileController');
});