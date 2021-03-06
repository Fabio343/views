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


Route::get('/', function()
{
  $nome = "Fabio";
  return View('ola', compact('nome'));
});

Route::get('/cursos', 'cursosController@index'); //uso de Controllers para melhorar as views nas rotas
Route::get('/cursos/{index}','CursosController@show');


Route::get('/produtos', 'produtosController@index'); //uso de Controllers para melhorar as views nas rotas
Route::get('/produtos/{index}','produtosController@show');
