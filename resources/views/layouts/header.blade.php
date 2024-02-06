<html>
<head>
<link rel="stylesheet" href="{!! asset('css/header.css') !!}">
</head>
<div class="navbar">
    <h1>Incidencias</h1>
        @if (Route::has('login'))
                <div >
                
                @auth
                    <a href="{{ url('/dashboard') }}" >Dashboard</a>
                    <a href="{{ url('/patrulla/create') }}" >Patrullas</a>
                @else
                    <a href="{{ route('login') }}" >Log in&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                    <a href="{{ url('/patrulla/create') }}" >Insertar Patrullas</a>
                    <a href="{{ url('/patrulla/showAll') }}" >Ver patrullas</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" >Register</a>
                    @endif
                @endauth
                </div>
        @endif
</div>
</html>