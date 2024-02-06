@include('layouts.header')
<div class="container">
    <h1>Detalles de la Patrulla</h1>
    @foreach ($patrullas as $patrulla)
    
        <div>
            <strong>Matrícula:</strong> {{ $patrulla->matricula }}
        </div>
        <div>
            <strong>Vehículo:</strong> {{ $patrulla->vehiculo }}
        </div>
        
        {{-- Botón para ir a la página de edición --}}
        <a href="{{ url('/patrulla/edit/'.$patrulla->id) }}" class="btn btn-primary">Editar</a>
    @endforeach
    
    <a href="{{ url('/dashboard') }}">Dashboard</a>
</div>
@include('layouts.footer')