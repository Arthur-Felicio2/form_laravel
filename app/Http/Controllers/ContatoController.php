<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContatoController extends Controller
{
    // Caminho do arquivo local (salvo em storage/app/contatos.json)
    private $filePath = 'contatos.json';

    // Mostra a view do formulário
    public function create()
    {
        return view('view_form');
    }

    // Recebe a requisição (Request) do form e salva [cite: 456]
    public function store(Request $req)
    {
        $contatos = [];

        // Verifica se o arquivo local já existe e carrega os dados
        if (Storage::disk('local')->exists($this->filePath)) {
            $conteudo = Storage::disk('local')->get($this->filePath);
            $contatos = json_decode($conteudo, true) ?? [];
        }

        // Recupera os campos informados pelo Request [cite: 468, 469]
        $novoContato = [
            'nome' => $req['nome'],
            'cel' => $req['cel'],
            'faccao' => $req['faccao'] // Adição do tema Star Wars
        ];

        $contatos[] = $novoContato;

        // Salva as informações de volta no arquivo local
        Storage::disk('local')->put($this->filePath, json_encode($contatos));

        return redirect('/contatos');
    }

    // Mostra a listagem de contatos
    public function index()
    {
        $contatos = [];

        if (Storage::disk('local')->exists($this->filePath)) {
            $conteudo = Storage::disk('local')->get($this->filePath);
            $contatos = json_decode($conteudo, true) ?? [];
        } else {
            // Matriz inicial simulando o banco de dados (exigência da Aula 5) [cite: 471]
            $contatos = [
                ["nome" => "Luke Skywalker", "cel" => "998881121", "faccao" => "Jedi"],
                ["nome" => "Darth Vader", "cel" => "977881111", "faccao" => "Sith"]
            ];
        }

        // Enviando os dados para a visão com a função compact [cite: 472]
        return view('view_contatos', compact('contatos'));
    }
}
