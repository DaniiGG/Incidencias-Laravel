<html>
    <head>
    <link rel="stylesheet" href="{!! asset('css/policias/ver.css') !!}">
    </head>
@include('layouts.header')
<div class="container">
    <h1>Detalles del Usuario</h1>
    <div class="info">
    <p><strong>ID:</strong> {{ $usuario->id }}</p>
    <p><strong>Nombre:</strong> {{ $usuario->name }}</p>
    <p><strong>Apellidos:</strong> {{ $usuario->apellidos }}</p>
    <p><strong>Correo Electrónico:</strong> {{ $usuario->email }}</p>
    <p><strong>Rol:</strong> {{ $usuario->roles }}</p>
    <a href="{{ route('usuarios.index') }}" class="btn btn-primary">Volver</a>
    </div>
</div>
@include('layouts.footer')
</html>