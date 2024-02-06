


<div class="container">
        <h1>Detalles de la Patrulla</h1>
        @foreach ($patrullas as $patrulla)
        <div>
            <strong>Matrícula:</strong> {{ $patrulla->matricula }}
        </div>

        <div>
            <strong>Vehiculo:</strong> {{ $patrulla->vehiculo }}
        </div>
        @endforeach

        {{-- Agrega más campos según las propiedades de tu modelo Patrulla --}}

        {{-- Puedes añadir botones de edición, eliminación, etc. según tus necesidades --}}
        
        <a href="{{ url('/dashboard') }}" >Dashboard</a>
        {{-- Ajusta 'nombre_de_la_ruta_para_editar' con el nombre real de tu ruta para la edición --}}
    </div>
