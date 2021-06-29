<?php

use Illuminate\Support\Facades\Route;

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

//CLIENTE

Route::get('/cliente','App\Http\Controllers\ClienteController@listar');
Route::get('/cliente/cadastrar','App\Http\Controllers\ClienteController@cadastrar');//chamar view clienteCadastrar
Route::post('/cliente/salvar/{id}','App\Http\Controllers\ClienteController@salvar');//chama metodo salvar o cliente
Route::get('/cliente/editar/{id}','App\Http\Controllers\ClienteController@editar');//editar cliente
Route::get('/cliente/deletar/{id}','App\Http\Controllers\ClienteController@deletar');//deletar cliente
Route::post('/cliente/pesquisar','App\Http\Controllers\ClienteController@pesquisar');

//FUNCIONÁRIO

Route::get('/funcionario','App\Http\Controllers\FuncionarioController@listar');
Route::get('/funcionario/cadastrar','App\Http\Controllers\FuncionarioController@cadastrar');//chamar view clienteCadastrar
Route::post('/funcionario/salvar/{id}','App\Http\Controllers\FuncionarioController@salvar');//chama metodo salvar o cliente
Route::get('/funcionario/editar/{id}','App\Http\Controllers\FuncionarioController@editar');//editar cliente
Route::get('/funcionario/deletar/{id}','App\Http\Controllers\FuncionarioController@deletar');//deletar cliente
Route::post('/funcionario/pesquisar','App\Http\Controllers\FuncionarioController@pesquisar');

//PRODUTO

Route::get('/produto','App\Http\Controllers\ProdutoController@listar');
Route::get('/produto/cadastrar','App\Http\Controllers\ProdutoController@cadastrar');//chamar view clienteCadastrar
Route::post('/produto/salvar/{id}','App\Http\Controllers\ProdutoController@salvar');//chama metodo salvar o cliente
Route::get('/produto/editar/{id}','App\Http\Controllers\ProdutoController@editar');//editar cliente
Route::get('/produto/deletar/{id}','App\Http\Controllers\ProdutoController@deletar');//deletar cliente
Route::post('/produto/pesquisar','App\Http\Controllers\ProdutoController@pesquisar');

//DONO

Route::get('/dono','App\Http\Controllers\DonoController@listar');
Route::get('/dono/cadastrar','App\Http\Controllers\DonoController@cadastrar');//chamar view clienteCadastrar
Route::post('/dono/salvar/{id}','App\Http\Controllers\DonoController@salvar');//chama metodo salvar o cliente
Route::get('/dono/editar/{id}','App\Http\Controllers\DonoController@editar');//editar cliente
Route::get('/dono/deletar/{id}','App\Http\Controllers\DonoController@deletar');//deletar cliente
Route::post('/dono/pesquisar','App\Http\Controllers\DonoController@pesquisar');

//CACHORRO

Route::get('/cachorro','App\Http\Controllers\CachorroController@listar');
Route::get('/cachorro/cadastrar','App\Http\Controllers\CachorroController@cadastrar');//chamar view clienteCadastrar
Route::post('/cachorro/salvar/{id}','App\Http\Controllers\CachorroController@salvar');//chama metodo salvar o cliente
Route::get('/cachorro/editar/{id}','App\Http\Controllers\CachorroController@editar');//editar cliente
Route::get('/cachorro/deletar/{id}','App\Http\Controllers\CachorroController@deletar');//deletar cliente
Route::post('/cachorro/pesquisar','App\Http\Controllers\CachorroController@pesquisar');
