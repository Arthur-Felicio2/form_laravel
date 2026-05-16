<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contato;

class ContatoController extends Controller
{

    public function index()
    {
        
        $rows = Contato::orderBy('id', 'desc')->get();
        return view('admin.contatos.index', compact('rows'));
    }

    public function adicionar()
    {
        return view('admin.contatos.adicionar');
    }

    public function salvar(Request $req)
    {
        Contato::create($req->all());
        return redirect()->route('admin.contatos');
    }

    public function editar($id)
    {
        
        $linha = Contato::findOrFail($id);
        return view('admin.contatos.editar', compact('linha'));
    }

    public function atualizar(Request $req, $id)
    {
        $linha = Contato::findOrFail($id);
        $linha->update($req->all());
        return redirect()->route('admin.contatos');
    }

    public function excluir($id)
    {
        
        $linha = Contato::findOrFail($id);
        $linha->delete();
        return redirect()->route('admin.contatos');
    }

    

    public function adicionarPublico()
    {
        return view('view_form');
    }

    public function salvarPublico(Request $req)
    {
        Contato::create($req->all());
        return redirect()->route('contato.lista_publico');
    }

    public function listarPublico()
    {
        $contatos = Contato::orderBy('id', 'desc')->get();
        return view('view_contatos', compact('contatos'));
    }
}
