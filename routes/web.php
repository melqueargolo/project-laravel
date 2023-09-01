<?php


use App\Http\Controllers\Controller;
use App\Http\Controllers\FilmeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NomeController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\testeController;
use App\Http\Controllers\PedidoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//get, post, put, patch, delete, options 
//match, any
//resource

// Route::prefix('dashboard')
//     ->middleware('auth')
//     ->controller(Controller::class)
//     ->group(function(){
//     Route::get('/sobrenos', 'teste');
//     Route::get('/sucesso/empresa/cargo/presidente', 'testeSucesso')->name('sucesso');
   
// });

Route::get('/sobrenos', [Controller::class, 'teste']);
Route::get('/pesquisa', [Controller::class, 'pesquisa']);
Route::post('/pesquisa', [NomeController::class, 'pesquisa']);
Route::get('/sucesso', [Controller::class, 'testeSucesso']);
Route::get('/sucesso/empresa/cargo/presidente', [Controller::class, 'testeSucesso'])->name('sucesso');
Route::get('/user/{id}', [Controller::class, 'usuario']);
Route::get('/user/{id?}', [Controller::class, 'usuario']);
Route::get('/teste', testeController::class);//metodo invoke
Route::get('/todo', [TodoController::class, 'dados']);
Route::get('/relacionamento', [TodoController::class, 'pegarRelacionamento']);
Route::get('/inserir', [TodoController::class, 'inserir'])->name('iserir');
Route::get('/update', [TodoController::class, 'update'])->name('update');
Route::get('/delete/{id}', [TodoController::class, 'delete'])->name('delete');
Route::get('/pedidos', [PedidoController::class, 'index'])->name('pedidos.index');
Route::resource('/filmes', FilmeController::class);






Route::fallback([Controller::class, 'pagina404']);


//---------------------------------
Route::get('/', function () {
    return view('welcome');
});
