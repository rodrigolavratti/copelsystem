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

/**
* Routes to Contratos
*/
Route::resource('/contratos', 'ContratosController');
Route::resource('/aes', 'AesController');

// Route::get('/aes', 'AesController@index')->name('aes');
// Route::get('/empreiteiras', 'EmpreiteirasController@index')->name('empreiteiras');
// Route::get('/projetos', 'ProjetosController@index')->name('projetos');
// Route::get('/pde', 'PdeController@index')->name('pde');
// Route::get('/obras', 'ObrasController@index')->name('obras');
// Route::get('/relatorios', 'RelatoriosController@index')->name('relatorios');
