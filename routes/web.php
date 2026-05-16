<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ContatoController;

// --- Rotas Públicas (Mantendo as funcionalidades originais do usuário) ---
Route::get('/', [ContatoController::class, 'adicionarPublico'])->name('home');
Route::post('/contato/salvar', [ContatoController::class, 'salvarPublico'])->name('contato.salvar_publico');
Route::get('/contatos', [ContatoController::class, 'listarPublico'])->name('contato.lista_publico');

// --- Rotas Administrativas (Estrutura e nomes idênticos ao PDF) ---
Route::get('/admin/contatos', [ContatoController::class, 'index'])->name('admin.contatos');
Route::get('/admin/contatos/adicionar', [ContatoController::class, 'adicionar'])->name('admin.contatos.adicionar');
Route::post('/admin/contatos/salvar', [ContatoController::class, 'salvar'])->name('admin.contatos.salvar');
Route::get('/admin/contatos/editar/{id}', [ContatoController::class, 'editar'])->name('admin.contatos.editar');
Route::put('/admin/contatos/atualizar/{id}', [ContatoController::class, 'atualizar'])->name('admin.contatos.atualizar');
Route::get('/admin/contatos/excluir/{id}', [ContatoController::class, 'excluir'])->name('admin.contatos.excluir');