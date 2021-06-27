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

Route::get('/aluno_', function () {
    return view('main');
});

Route::get('/aluno','App\Http\Controllers\AlunoController@listar');

Route::get('/cliente','App\Http\Controllers\ClienteController@listar');
Route::get('/cliente/cadastrar','App\Http\Controllers\ClienteController@cadastrar');//chamar view clienteCadastrar
Route::post('/cliente/salvar/{id}','App\Http\Controllers\ClienteController@salvar');//chama metodo salvar o cliente
Route::get('/cliente/editar/{id}','App\Http\Controllers\ClienteController@editar');//editar cliente
Route::get('/cliente/deletar/{id}','App\Http\Controllers\ClienteController@deletar');//deletar cliente
Route::post('/cliente/pesquisar','App\Http\Controllers\ClienteController@pesquisar');
