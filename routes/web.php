<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index-conta',[ContaController::class, 'index']) -> name('conta.index'); //visualizar

Route::get('/create-conta',[ContaController::class, 'create']) -> name('conta.create'); //carregar
Route::post('/store-conta',[ContaController::class, 'store']) -> name('conta.store'); //receber os dados e cadastrar

Route::get('/show-conta',[ContaController::class, 'show']) -> name('conta.show'); //visualizar
Route::get('/edit-conta',[ContaController::class, 'edit']) -> name('conta.edit'); //carregar e editar
Route::put('/update-conta',[ContaController::class, 'update']) -> name('conta.update'); //receber os dados e editar
Route::get('/destroy-conta',[ContaController::class, 'destroy']) -> name('conta.destroy'); //deletar os dados