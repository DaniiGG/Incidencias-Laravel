@include('layouts.header')
<div class="container">
        <h1>Detalles del Incidente</h1>
        <p><strong>Título:</strong> {{ $incidente->titulo }}</p>
        <p><strong>Descripción:</strong> {{ $incidente->descripcion }}</p>
        <p><strong>Fecha:</strong> {{ $incidente->fecha }}</p>
        <!-- Muestra otros detalles del incidente aquí -->
        <a href="{{ route('incidentes.index') }}" class="btn btn-secondary">Volver</a>
    </div>
    @include('layouts.footer')