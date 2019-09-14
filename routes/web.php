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

// Route::get('/obras', function () {
//     return view('obras');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/usuarios', 'UsuariosController@index')->name('usuarios');


Route::resource('/contratos', 'ContratosController');
Route::resource('/aes', 'AesController');
Route::resource('/empreiteiras', 'EmpreiteirasController');
Route::resource('/projetos', 'ProjetosController');
Route::resource('/pde', 'PdeController');
Route::resource('/obras', 'ObrasController');
Route::resource('/relatorios', 'RelatoriosController');

