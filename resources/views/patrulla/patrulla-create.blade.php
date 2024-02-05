<!-- resources/views/patrulla/create.blade.php -->

<!-- Asegúrate de tener un layout base, puede variar según tu aplicación -->


    <div class="container">
        <h2>Crear Nueva Patrulla</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="post" action="{{ route('patrulla.store') }}">
            @csrf

            <div class="form-group">
                <label for="matricula">Matrícula:</label>
                <input type="text" class="form-control" id="matricula" name="matricula" required>
            </div>

            <div class="form-group">
                <label for="vehiculo">Vehículo:</label>
                <input type="text" class="form-control" id="vehiculo" name="vehiculo" required>
            </div>

            <button type="submit" class="btn btn-primary">Crear Patrulla</button>
        </form>
    </div>
