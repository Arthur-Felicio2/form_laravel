@extends('layout.site')

@section('titulo', 'Comando Central - Administração')

@section('conteudo')
<div class="row">
    <div class="col s12">
        <div class="card black-card z-depth-5" style="margin-top: 40px; border-color: #b71c1c;">
            <div class="card-content white-text">
                <h4 class="center-align red-text text-darken-1" style="font-weight: bold; margin-bottom: 30px;">
                    <i class="material-icons medium">gavel</i> Painel de Comando
                </h4>

                <div class="row right-align" style="margin-bottom: 20px; margin-right: 10px;">
                    <a href="{{ route('admin.contatos.adicionar') }}" class="btn waves-effect waves-light green darken-2">
                        <i class="material-icons left">add</i> Novo Registro (Admin)
                    </a>
                </div>

                <table class="highlight responsive-table" style="color: #e0e0e0;">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Comlink</th>
                            <th>Facção</th>
                            <th class="center-align">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($rows as $row)
                        <tr>
                            <td>{{ $row->nome }}</td>
                            <td>{{ $row->cel }}</td>
                            <td>
                                <span class="chip grey darken-4 white-text">{{ $row->faccao }}</span>
                            </td>
                            <td class="center-align">
                                <a href="{{ route('admin.contatos.editar', $row->id) }}" class="btn-small waves-effect waves-light blue darken-2" title="Editar">
                                    <i class="material-icons">edit</i> Alterar
                                </a>
                                
                                <a href="{{ route('admin.contatos.excluir', $row->id) }}" class="btn-small waves-effect waves-light red darken-2" title="Excluir" onclick="return confirm('Deseja eliminar este registro da galáxia?');">
                                    <i class="material-icons">delete</i> Excluir
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="card-action center-align">
                <a href="{{ route('contato.lista_publico') }}" class="grey-text text-lighten-1"><i class="material-icons tiny">arrow_back</i> Voltar para visão geral</a>
            </div>
        </div>
    </div>
</div>
@endsection