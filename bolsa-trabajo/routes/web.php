<?php

use App\Http\Controllers\VacanteControlador;
use App\Vacante;

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




Auth::routes();

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', 'HomeController@index')->name('home');

Route::resource('vacantes', 'VacanteControlador');

Route::resource('categorias', 'CategoriaController');

Route::resource('status', 'StatusVacanteController');

Route::middleware(['auth', 'admin'])->group(function () {

    Route::resource('usuarios', 'UsuarioController');
});
