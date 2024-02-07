@include('layouts.header')
<div class="container">
    <h1>Editar Incidente</h1>
    <!-- Formulario de edición -->
    <form action="{{ route('incidentes.update', $incidente->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="titulo">Título:</label>
            <input type="text" class="form-control" id="titulo" name="titulo" value="{{ $incidente->titulo }}" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea class="form-control" id="descripcion" name="descripcion" rows="4" required>{{ $incidente->descripcion }}</textarea>
        </div>
        <div class="form-group">
            <label for="fecha">Fecha:</label>
            <input type="datetime-local" class="form-control" id="fecha" name="fecha" value="{{ date('Y-m-d\TH:i', strtotime($incidente->fecha)) }}" required>
        </div>
        <div class="form-group">
            <label for="a_la_fuga">¿A la fuga?</label>
            <select class="form-control" id="a_la_fuga" name="a_la_fuga" required>
                <option value="1" {{ $incidente->a_la_fuga ? 'selected' : '' }}>Sí</option>
                <option value="0" {{ !$incidente->a_la_fuga ? 'selected' : '' }}>No</option>
            </select>
        </div>
        <div class="form-group">
            <label for="ubicacion">Ubicación:</label>
            <input type="text" class="form-control" id="ubicacion" name="ubicacion" value="{{ $incidente->ubicacion }}" required>
        </div>
        <div class="form-group">
            <label for="user_id">ID de Usuario:</label>
            <input type="text" class="form-control" id="user_id" name="user_id" value="{{ $incidente->user_id }}" disabled>
        </div>
        <!-- Agrega más campos si es necesario -->
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        <a href="{{ route('incidentes.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@include('layouts.footer')