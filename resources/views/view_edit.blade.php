@extends('layout.site')

@section('title', 'Editar Registro - Star Wars')

@section('content')
<div class="row">
    <div class="col s12 m8 offset-m2 l6 offset-l3">
        <div class="card black-card z-depth-5" style="margin-top: 40px; border-color: #1976d2;">
            <div class="card-content white-text">
                <h4 class="center-align blue-text text-lighten-2" style="margin-bottom: 30px;">
                    <i class="material-icons">build</i> Modificar Registro
                </h4>

                <form action="/contato/{{ $contato->id }}" method="post">
                    {{ csrf_field() }}
                    @method('PUT') 

                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="nome" type="text" name="nome" value="{{ $contato->nome }}" required>
                            <label for="nome" class="active">Nome do Tripulante</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">settings_cell</i>
                            <input id="cel" type="text" name="cel" value="{{ $contato->cel }}" required>
                            <label for="cel" class="active">Frequência do Comlink</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">group_work</i>
                            <select name="faccao" required>
                                <option value="Jedi" {{ $contato->faccao == 'Jedi' ? 'selected' : '' }}>Ordem Jedi</option>
                                <option value="Sith" {{ $contato->faccao == 'Sith' ? 'selected' : '' }}>Lorde Sith</option>
                                <option value="Rebelde" {{ $contato->faccao == 'Rebelde' ? 'selected' : '' }}>Aliança Rebelde</option>
                                <option value="Imperio" {{ $contato->faccao == 'Imperio' ? 'selected' : '' }}>Império Galáctico</option>
                            </select>
                            <label>Aliança / Facção</label>
                        </div>
                    </div>

                    <div class="row center-align" style="margin-top: 20px;">
                        <button class="btn waves-effect waves-light blue darken-2 btn-large" type="submit" style="width: 100%;">
                            SALVAR ALTERAÇÕES
                            <i class="material-icons right">save</i>
                        </button>
                    </div>
                </form>
            </div>
            
            <div class="card-action center-align">
                <a href="/admin" class="grey-text text-lighten-1"><i class="material-icons tiny">cancel</i> Cancelar e voltar</a>
            </div>
        </div>
    </div>
</div>
@endsection