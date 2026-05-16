@extends('layout.site')

@section('titulo', 'Tripulação Registrada - Star Wars')

@section('conteudo')
<div class="row">
    <div class="col s12">
        <h3 class="center-align sw-title" style="margin-top: 40px; margin-bottom: 30px;">Registros da Galáxia</h3>
    </div>

    <div class="row">
        @foreach($contatos as $contato)
        <div class="col s12 m6">
            <div class="card card-sw black-card z-depth-3 hoverable">
                <div class="card-content white-text">
                    <span class="card-title font-bold" style="color: #FFE81F;">
                        <i class="material-icons left">person</i> {{ $contato->nome }}
                    </span>
                    <p><i class="material-icons left tiny" style="margin-top: 4px;">call</i> Comlink: {{ $contato->cel }}</p>
                    <br>
                    <div class="chip grey darken-4 white-text" style="border: 1px solid #555;">
                        Facção: {{ $contato->faccao }}
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="row center-align" style="margin-top: 30px;">
        <div class="col s6 right-align">
            <a href="{{ route('home') }}" class="btn-flat waves-effect waves-light blue-text text-lighten-2"><i class="material-icons left">add</i> Novo Alistamento</a>
        </div>
        <div class="col s6 left-align">
            <a href="{{ route('admin.contatos') }}" class="btn-flat waves-effect waves-red red-text text-lighten-2"><i class="material-icons right">security</i> Comando Central</a>
        </div>
    </div>
</div>
@endsection