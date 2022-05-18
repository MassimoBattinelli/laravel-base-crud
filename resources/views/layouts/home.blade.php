<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <title>@yield('pageTitle')</title>
</head>
<body>
    <div id="welcomePage">
        <h1>
            Benvenuto in Comics
        </h1>
    
        <p>
            Visita l'archivio
        </p>
        
        <a href="{{ route('comics.index') }}">
            <div class="button">
                Entra
            </div>
        </a>
    </div>
</body>
</html>