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
//Poner las acciones definidas por el programador antes del CRUD por defecto que monta Laravel
Route::delete('especialidades/destroyAll', 'EspecialidadController@destroyAll')->name('especialidades.destroyAll');

Route::resource('users', 'UserController');
Route::resource('citas', 'CitaController');
Route::resource('centroSanitarios', 'CentroSanitariosController');
Route::resource('localizacions', 'LocalizacionController');
Route::resource('companias', 'companiaController');
Route::resource('polizas', 'PolizaController');
Route::resource('especialidads', 'EspecialidadController');



Auth::routes();

Route::get('/home', 'HomeController@index');

