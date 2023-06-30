
    <h1>Editar Doctor</h1>

    <form action="{{ route('doctors.update', $doctor->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="DoctorId">DoctorId</label>
            <input type="text" name="DoctorId" id="DoctorId" class="form-control" value="{{ $doctor->DoctorId }}">
        </div>
        <div class="form-group">
            <label for="Nombre">Nombre</label>
            <input type="text" name="Nombre" id="Nombre" class="form-control" value="{{ $doctor->Nombre }}">
        </div>
        <div class="form-group">
            <label for="MedicalBranchId">MedicalBranchId</label>
            <input type="text" name="MedicalBranchId" id="MedicalBranchId" class="form-control" value="{{ $doctor->MedicalBranchId }}">
        </div>
        <div class="form-group">
            <label for="CelulaProfesional">CelulaProfecional</label>
            <input type="text" name="CelulaProfecional" id="CelulaProfecional" class="form-control" value="{{ $doctor->CelulaProfecional }}">
        </div>

        <div class="form-group">
            <label for="Especialidad">Especialidad</label>
            <input type="text" name="Especialidad" id="Especialidad" class="form-control" value="{{ $doctor->Especialidad }}">
        </div>
        <!-- Agrega más campos según los atributos -->
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>

