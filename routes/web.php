<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;

// Rota para mostrar o formulário de cadastro (raiz)
Route::get('/', [ContatoController::class, 'create']);
Route::post('/contato', [ContatoController::class, 'store']);

// Rota para listar os contatos
Route::get('/contatos', [ContatoController::class, 'index']);

// Novas rotas para Editar e Excluir
Route::get('/contato/{id}/edit', [ContatoController::class, 'edit']);
Route::put('/contato/{id}', [ContatoController::class, 'update']);
Route::delete('/contato/{id}', [ContatoController::class, 'destroy']);