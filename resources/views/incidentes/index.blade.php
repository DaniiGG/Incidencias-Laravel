<div class="container">
    <h1>Listado de Incidentes</h1>
    <a href="{{ route('incidentes.create') }}" class="btn btn-success">Crear Incidente</a>
    <hr>
    <table class="table">
        <thead>
            <tr>
                <th>Título</th>
                <th>Descripción</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($incidentes as $incidente)
                <tr>
                    <td>{{ $incidente->titulo }}</td>
                    <td>{{ $incidente->descripcion }}</td>
                    <td>{{ $incidente->fecha }}</td>
                    <td>
                        <a href="{{ route('incidentes.show', $incidente->id) }}" class="btn btn-primary">Ver</a>
                        @if (auth()->user()->id === $incidente->user_id || auth()->user()->rol === 'Oficial')
                            <a href="{{ route('incidentes.edit', $incidente->id) }}" class="btn btn-info">Editar</a>
                        @endif
                        <form action="{{ route('incidentes.destroy', $incidente->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>