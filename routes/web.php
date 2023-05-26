<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicoController;

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
    return view('index');
});

Route::post('adicionar-agendamento', [ServicoController::class, 'create']);
Route::get('consultar', [ServicoController::class, 'listar']);
Route::post('editar/{id}', [ServicoController::class, 'editar']);
Route::post('atualizar', [ServicoController::class, 'atualizar']);
Route::get('excluir/{id}', [ServicoController::class, 'excluir']);
