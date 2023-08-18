<?php


use App\Http\Controllers\Controller;
use App\Http\Controllers\testeController;
use Illuminate\Support\Facades\Route;

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

Route::prefix('dashboard')
    ->middleware('auth')
    ->controller(Controller::class)
    ->group(function(){
    Route::get('/sobrenos', 'teste');
    Route::get('/sucesso/empresa/cargo/presidente', 'testeSucesso')->name('sucesso');

});

//Route::get('/sobrenos', [Controller::class, 'teste']);
//Route::get('/sucesso', [Controller::class, 'testeSucesso']);
//Route::get('/sucesso/empresa/cargo/presidente', [Controller::class, 'testeSucesso'])->name('sucesso');
//Route::get('/user/{id}', [Controller::class, 'usuario']);
Route::get('/user/{id?}', [Controller::class, 'usuario']);
Route::get('/teste', testeController::class);//metodo invoke

Route::fallback([Controller::class, 'pagina404']);


//---------------------------------
Route::get('/', function () {
    return view('welcome');
});
