    <!doctype html>
    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet"/>
        <title> B3Map - {{ $title }}</title>
    </head>
    <body>
    <div id="menu-bar">
        <nav>
            <a id="text-logo" href="{{ route('stocks.index') }}">Logo</a>
            <ul id="menu">
                <li>Funcionalidades</li>
                <li>App</li>
                <li>Planos</li>
                <li>Contato</li>
            </ul>
        </nav>
    </div>
    <div id="top-slot">
        <h1 id="text-title-stock">{{ $title }}</h1>
        <div id="slot">
            {{ $slot }}
        </div>
    </div>

    </body>
    </html>
