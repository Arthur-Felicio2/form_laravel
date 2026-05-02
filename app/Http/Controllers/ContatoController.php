<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato; // Importante chamar o Model

class ContatoController extends Controller
{
    public function create()
    {
        return view('view_form');
    }

    public function store(Request $req)
    {
        // O Laravel pega os dados, protege contra SQL Injection e salva
        Contato::create($req->all());

        return redirect('/contatos');
    }

    public function index()
    {
        // Busca todos os registros ordenados do mais recente para o mais antigo
        $contatos = Contato::orderBy('id', 'desc')->get();
        return view('view_contatos', compact('contatos'));
    }

    public function admin()
    {
        // Aqui também listamos todos, mas a view será a de administração
        $contatos = Contato::orderBy('id', 'desc')->get();
        return view('view_admin', compact('contatos'));
    }

    public function edit($id)
    {
        // Busca o contato pelo ID ou retorna erro 404 automaticamente se não achar
        $contato = Contato::findOrFail($id);
        return view('view_edit', compact('contato'));
    }

    public function update(Request $req, $id)
    {
        $contato = Contato::findOrFail($id);
        $contato->update($req->all());

        return redirect('/contatos');
    }

    public function destroy($id)
    {
        $contato = Contato::findOrFail($id);
        $contato->delete();

        return redirect('/contatos');
    }
}