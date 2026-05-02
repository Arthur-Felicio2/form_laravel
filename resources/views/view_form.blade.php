@extends('layout.site')

@section('title', 'Alistamento - Star Wars')

@section('content')
<div class="row">
    <div class="col s12 m8 offset-m2 l6 offset-l3">
        <div class="card black-card z-depth-5" style="margin-top: 40px;">
            <div class="card-content white-text">
                <h4 class="center-align sw-title" style="margin-bottom: 30px;">Alistamento Galáctico</h4>

                <form action="/contato" method="post">
                    {{ csrf_field() }}
                    
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="nome" type="text" name="nome" required>
                            <label for="nome">Nome do Tripulante</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">settings_cell</i>
                            <input id="cel" type="text" name="cel" required>
                            <label for="cel">Frequência do Comlink</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">group_work</i>
                            <select name="faccao" required>
                                <option value="" disabled selected>Escolha seu lado</option>
                                <option value="Jedi">Ordem Jedi</option>
                                <option value="Sith">Lorde Sith</option>
                                <option value="Rebelde">Aliança Rebelde</option>
                                <option value="Imperio">Império Galáctico</option>
                            </select>
                            <label>Aliança / Facção</label>
                        </div>
                    </div>

                    <div class="row center-align" style="margin-top: 20px;">
                        <button class="btn waves-effect waves-light btn-sw btn-large w-full" type="submit" style="width: 100%;">
                            ENVIAR TRANSMISSÃO
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </form>
            </div>
            
            <div class="card-action center-align">
                <a href="/contatos" class="blue-text text-lighten-2">Ver tripulação registrada <i class="material-icons tiny">arrow_forward</i></a>
            </div>
        </div>
    </div>
</div>
@endsection