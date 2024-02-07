
@include('layouts.header')
<div class="container">
    <h1>Detalles del Usuario</h1>
    <p><strong>ID:</strong> {{ $usuario->id }}</p>
    <p><strong>Nombre:</strong> {{ $usuario->name }}</p>
    <p><strong>Correo Electrónico:</strong> {{ $usuario->email }}</p>
    <a href="{{ route('usuarios.index') }}" class="btn btn-primary">Volver</a>
</div>
@include('layouts.footer')