
    <h1>Lista de Doctores</h1>

    <a href="{{ route('doctors.create') }}" class="btn btn-primary mb-3">Agregar Doctor</a>

    <table class="table">
        <thead>
            <tr>
                <th>DoctorId</th>
                <th>Nombre</th>
                <th>MedicalBranchId</th>
                <th>Especialidad</th>
                <!-- Agrega más columnas según los atributos -->
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($doctors as $doctor)
                <tr>
                    <td>{{ $doctor->DoctorId }}</td>
                    <td>{{ $doctor->Nombre }}</td>
                    <td>{{ $doctor->MedicalBranchId }}</td>
                    <td>{{ $doctor->Especialidad }}</td>
                    <!-- Agrega más columnas según los atributos -->
                    <td>
                        <a href="{{ route('doctors.edit', $doctor->id) }}" class="btn btn-sm btn-primary">Editar</a>
                        <form action="{{ route('doctors.destroy', $doctor->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


