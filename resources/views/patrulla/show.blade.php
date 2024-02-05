


    <div class="container">
        <h1>Detalles de la Patrulla</h1>
        
        <div>
            <strong>Matrícula:</strong> {{ $patrulla->matricula }}
        </div>

        <div>
            <strong>Marca:</strong> {{ $patrulla->marca }}
        </div>

        <div>
            <strong>Modelo:</strong> {{ $patrulla->modelo }}
        </div>

        {{-- Agrega más campos según las propiedades de tu modelo Patrulla --}}

        {{-- Puedes añadir botones de edición, eliminación, etc. según tus necesidades --}}
        
        <a href="{{ route('nombre_de_la_ruta_para_editar', $patrulla->matricula) }}">Editar</a>
        {{-- Ajusta 'nombre_de_la_ruta_para_editar' con el nombre real de tu ruta para la edición --}}
    </div>
