@include('layouts.header')
<div class="container">
    <h1 class="heading">Lista de Usuarios</h1>
    <table class="table table-users">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Correo Electrónico</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->id }}</td>
                <td>{{ $usuario->name }}</td>
                <td>{{ $usuario->apellidos }}</td>
                <td>{{ $usuario->email }}</td>
                <td>
                    <a href="{{ route('usuarios.show', $usuario->id) }}" class="btn btn-primary btn-action">Ver</a>
                    <a href="{{ route('usuarios.edit', $usuario->id) }}" class="btn btn-warning btn-action">Editar</a>
                    <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST" class="form-inline form-delete">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-action" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@include('layouts.footer')