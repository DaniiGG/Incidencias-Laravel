<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Incidencias</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{!! asset('css/style.css') !!}"> 
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body class="antialiased">
    @include('layouts.header')
        <main>
        
        <div class="incidencias">

           <h1>Anotación de incidentes</h1>
           <p>Por favor, anote las incidencias que ocurren a lo largo de la jornada</p>

           <button>
            <a href="#"><span>Anotar</span></a>
            </button>

        </div>
        
        </main>
        @include('layouts.footer')
    </body>
</html>