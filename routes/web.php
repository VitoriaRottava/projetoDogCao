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

Route::get('pdfDog', 'App\Http\Controllers\PdfDogController@geraPdf');

Route::get('pdfAgenda', 'App\Http\Controllers\PdfAgendaController@geraPdf');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group (['middleware' => 'auth'], function (){

//FUNCIONÁRIO

Route::get('/funcionario','App\Http\Controllers\FuncionarioController@listar');
Route::get('/funcionario/cadastrar','App\Http\Controllers\FuncionarioController@cadastrar');
Route::post('/funcionario/salvar/{id}','App\Http\Controllers\FuncionarioController@salvar');
Route::get('/funcionario/editar/{id}','App\Http\Controllers\FuncionarioController@editar');
Route::get('/funcionario/deletar/{id}','App\Http\Controllers\FuncionarioController@deletar');
Route::post('/funcionario/pesquisar','App\Http\Controllers\FuncionarioController@pesquisar');

//PRODUTO

Route::get('/produto','App\Http\Controllers\ProdutoController@listar');
Route::get('/produto/cadastrar','App\Http\Controllers\ProdutoController@cadastrar');
Route::post('/produto/salvar/{id}','App\Http\Controllers\ProdutoController@salvar');
Route::get('/produto/editar/{id}','App\Http\Controllers\ProdutoController@editar');
Route::get('/produto/deletar/{id}','App\Http\Controllers\ProdutoController@deletar');
Route::post('/produto/pesquisar','App\Http\Controllers\ProdutoController@pesquisar');

//DONO

Route::get('/dono','App\Http\Controllers\DonoController@listar');
Route::get('/dono/cadastrar','App\Http\Controllers\DonoController@cadastrar');
Route::post('/dono/salvar/{id}','App\Http\Controllers\DonoController@salvar');
Route::get('/dono/editar/{id}','App\Http\Controllers\DonoController@editar');
Route::get('/dono/deletar/{id}','App\Http\Controllers\DonoController@deletar');
Route::post('/dono/pesquisar','App\Http\Controllers\DonoController@pesquisar');

//CACHORRO

Route::get('/cachorro','App\Http\Controllers\CachorroController@listar');
Route::get('/cachorro/cadastrar','App\Http\Controllers\CachorroController@cadastrar');
Route::post('/cachorro/salvar/{id}','App\Http\Controllers\CachorroController@salvar');
Route::get('/cachorro/editar/{id}','App\Http\Controllers\CachorroController@editar');
Route::get('/cachorro/deletar/{id}','App\Http\Controllers\CachorroController@deletar');
Route::post('/cachorro/pesquisar','App\Http\Controllers\CachorroController@pesquisar');

//AGENDA DE BANHOS

Route::get('/agenda','App\Http\Controllers\AgendaController@listar');
Route::get('/agenda/cadastrar','App\Http\Controllers\AgendaController@cadastrar');
Route::post('/agenda/salvar/{id}','App\Http\Controllers\AgendaController@salvar');
Route::get('/agenda/editar/{id}','App\Http\Controllers\AgendaController@editar');
Route::get('/agenda/deletar/{id}','App\Http\Controllers\AgendaController@deletar');
Route::post('/agenda/pesquisar','App\Http\Controllers\AgendaController@pesquisar');


});
