<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;

// Rotas Públicas / Usuários Comuns
Route::get('/', [ContatoController::class, 'create']);
Route::post('/contato', [ContatoController::class, 'store']);
Route::get('/contatos', [ContatoController::class, 'index']);

// Rotas Protegidas (Exclusivas para Administradores)
// Idealmente, elas ficariam dentro de um: Route::middleware(['auth', 'admin'])->group(function () { ... });
Route::get('/admin', [ContatoController::class, 'admin']);
Route::get('/contato/{id}/edit', [ContatoController::class, 'edit']);
Route::put('/contato/{id}', [ContatoController::class, 'update']);
Route::delete('/contato/{id}', [ContatoController::class, 'destroy']);