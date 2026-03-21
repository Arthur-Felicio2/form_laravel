@extends('layout.site')

@section('title', 'HoloRede - Contatos')

@section('content')
<div class="min-h-screen p-8">
    <div class="max-w-4xl mx-auto">
        <h2 class="text-4xl text-center font-bold mb-10 sw-title">Registros da HoloRede</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($contatos as $contato)
            <div class="card-sw p-6 rounded-lg flex flex-col items-center text-center {{ isset($contato['faccao']) && in_array($contato['faccao'], ['Sith', 'Imperio']) ? 'sith' : '' }}">

                <h3 class="text-xl font-bold mb-2">{{ $contato['nome'] }}</h3>
                <p class="text-gray-400 mb-2">Comlink: {{ $contato['cel'] }}</p>

                <p class="text-sm font-semibold mt-auto {{ isset($contato['faccao']) && in_array($contato['faccao'], ['Sith', 'Imperio']) ? 'sith-text' : 'jedi-text' }}">
                    [ {{ $contato['faccao'] ?? 'Desconhecido' }} ]
                </p>
            </div>
            @endforeach
        </div>

        <div class="mt-10 text-center">
            <a href="/" class="inline-block py-2 px-6 rounded-md bg-gray-800 hover:bg-gray-700 text-white font-bold transition border border-gray-600">
                <- Novo Registro
                    </a>
        </div>
    </div>
</div>
@endsection