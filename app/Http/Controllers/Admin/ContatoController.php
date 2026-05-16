<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contato;
use Illuminate\Support\Facades\File;

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

    private function uploadImagem(Request $req)
    {
        if ($req->hasFile('imagem') && $req->file('imagem')->isValid()) {
            $imagem = $req->file('imagem');
            $extensao = $imagem->extension();
            $nomeImagem = md5($imagem->getClientOriginalName() . strtotime("now")) . "." . $extensao;
            
            // Salva na pasta public/img/tripulantes
            $imagem->move(public_path('img/tripulantes'), $nomeImagem);
            
            return 'img/tripulantes/' . $nomeImagem;
        }
        return null;
    }

    public function salvar(Request $req)
    {
        $dados = $req->all();
        $caminhoImagem = $this->uploadImagem($req);
        
        if ($caminhoImagem) {
            $dados['imagem'] = $caminhoImagem;
        }

        Contato::create($dados);
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
        $dados = $req->all();

        // Se uma nova imagem for enviada
        if ($req->hasFile('imagem') && $req->file('imagem')->isValid()) {
            // Apaga a imagem antiga se existir
            if ($linha->imagem && File::exists(public_path($linha->imagem))) {
                File::delete(public_path($linha->imagem));
            }
            
            $dados['imagem'] = $this->uploadImagem($req);
        }

        $linha->update($dados);
        return redirect()->route('admin.contatos');
    }

    public function excluir($id)
    {
        $linha = Contato::findOrFail($id);
        
        // Apaga a imagem do servidor ao excluir o registro
        if ($linha->imagem && File::exists(public_path($linha->imagem))) {
            File::delete(public_path($linha->imagem));
        }

        $linha->delete();
        return redirect()->route('admin.contatos');
    }

    

    public function adicionarPublico()
    {
        return view('view_form');
    }

    public function salvarPublico(Request $req)
    {
        $dados = $req->all();
        $caminhoImagem = $this->uploadImagem($req);
        
        if ($caminhoImagem) {
            $dados['imagem'] = $caminhoImagem;
        }

        Contato::create($dados);
        return redirect()->route('contato.lista_publico');
    }
    public function listarPublico()
    {
        $contatos = Contato::orderBy('id', 'desc')->get();
        return view('view_contatos', compact('contatos'));
    }
}
