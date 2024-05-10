<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [FormController::class, 'index']);
Route::get('/exibir-dados', [FormController::class, 'exibirDados']);
Route::post('/atualizar-dados', [FormController::class, 'atualizarDados']);
