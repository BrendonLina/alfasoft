<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;

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

// Route::get('/', 'ContatoController@index');
// Route::get('/contatos/create', 'ContatoController@create');
// Route::post('/contatos', 'ContatoController@store');
// Route::get('/contatos/{contato}', 'ContatoController@show');
// Route::get('/contatos/{contato}/edit', 'ContatoController@edit');
// Route::put('/contatos/{contato}', 'ContatoController@update');
// Route::delete('/contatos/{contato}', 'ContatoController@destroy');

Route::get('/', [ContatoController::class, 'index']);
Route::get('/contatos/create', [ContatoController::class, 'create']);
Route::post('/contatos', [ContatoController::class, 'store']);
Route::get('/contatos/{id}', [ContatoController::class, 'show']);
Route::get('/contatos/{id}/edit', [ContatoController::class, 'edit']);
Route::put('/contatos/{id}/edit', [ContatoController::class, 'edit']);
Route::put('/contatos/{id}', [ContatoController::class, 'update']);
Route::delete('/contatos/{id}', [ContatoController::class, 'destroy']);