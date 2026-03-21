@extends('layout.site')

@section('title', 'Alistamento - Star Wars')

@section('content')
<div class="min-h-screen flex items-center justify-center p-4">
    <div class="max-w-md w-full p-8 border border-gray-800 rounded-lg bg-black/80 shadow-2xl">
        <h2 class="text-3xl text-center font-bold mb-6 sw-title">Alistamento Galáctico</h2>

        <form action="/contato" method="post" class="space-y-6">
            {{ csrf_field() }}
            <div>
                <label class="block text-sm font-medium mb-2 text-gray-300">Nome do Tripulante</label>
                <input type="text" name="nome" required class="w-full px-4 py-2 rounded-md input-sw" placeholder="Ex: Han Solo">
            </div>

            <div>
                <label class="block text-sm font-medium mb-2 text-gray-300">Frequência do Comlink (Celular)</label>
                <input type="text" name="cel" required class="w-full px-4 py-2 rounded-md input-sw" placeholder="Ex: 99888-1121">
            </div>

            <div>
                <label class="block text-sm font-medium mb-2 text-gray-300">Aliança / Facção</label>
                <select name="faccao" class="w-full px-4 py-2 rounded-md input-sw">
                    <option value="Jedi">Ordem Jedi</option>
                    <option value="Sith">Lorde Sith</option>
                    <option value="Rebelde">Aliança Rebelde</option>
                    <option value="Imperio">Império Galáctico</option>
                </select>
            </div>

            <button type="submit" class="w-full py-3 rounded-md btn-sw mt-4">ENVIAR TRANSMISSÃO</button>
        </form>

        <div class="mt-6 text-center">
            <a href="/contatos" class="text-sm text-blue-400 hover:text-blue-300 transition">Ver tripulação registrada -></a>
        </div>
    </div>
</div>
@endsection