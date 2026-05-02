@extends('layout.site')

@section('title', 'Comando Central - Administração')

@section('content')
<div class="row">
    <div class="col s12">
        <div class="card black-card z-depth-5" style="margin-top: 40px; border-color: #b71c1c;">
            <div class="card-content white-text">
                <h4 class="center-align red-text text-darken-1" style="font-weight: bold; margin-bottom: 30px;">
                    <i class="material-icons medium">gavel</i> Painel de Comando
                </h4>

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
                        @foreach($contatos as $contato)
                        <tr>
                            <td>{{ $contato->nome }}</td>
                            <td>{{ $contato->cel }}</td>
                            <td>
                                <span class="chip grey darken-4 white-text">{{ $contato->faccao }}</span>
                            </td>
                            <td class="center-align">
                                <a href="/contato/{{ $contato->id }}/edit" class="btn-small waves-effect waves-light blue darken-2" title="Editar">
                                    <i class="material-icons">edit</i>
                                </a>
                                
                                <form action="/contato/{{ $contato->id }}" method="POST" onsubmit="return confirm('Deseja eliminar este registro da galáxia?');" style="display: inline-block;">
                                    {{ csrf_field() }}
                                    @method('DELETE')
                                    <button type="submit" class="btn-small waves-effect waves-light red darken-2" title="Excluir">
                                        <i class="material-icons">delete</i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="card-action center-align">
                <a href="/contatos" class="grey-text text-lighten-1"><i class="material-icons tiny">arrow_back</i> Voltar para visão geral</a>
            </div>
        </div>
    </div>
</div>
@endsection