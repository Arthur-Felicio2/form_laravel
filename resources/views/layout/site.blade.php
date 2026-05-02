<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'HoloRede Star Wars')</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="grey darken-4">

    <nav class="black" style="border-bottom: 2px solid #FFE81F;">
        <div class="nav-wrapper container">
            <a href="/" class="brand-logo sw-title"><i class="material-icons yellow-text text-accent-2">stars</i>
                HoloRede</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="/">Alistar</a></li>
                <li><a href="/contatos">Tripulação</a></li>
                <li><a href="/admin">Comando Central</a></li>
            </ul>
        </div>
    </nav>

    <main class="container" style="margin-top: 40px;">
        @yield('content')
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
