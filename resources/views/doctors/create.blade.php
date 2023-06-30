
    <h1>Agregar Doctor</h1>

    <form action="{{ route('doctors.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="DoctorId">DoctorId</label>
            <input type="text" name="DoctorId" id="DoctorId" class="form-control">
        </div>
        <div class="form-group">
            <label for="Nombre">Nombre</label>
            <input type="text" name="Nombre" id="Nombre" class="form-control">
        </div>
        <div class="form-group">
            <label for="MedicalBranchId">MedicalBranchId</label>
            <input type="text" name="MedicalBranchId" id="MedicalBranchId" class="form-control">
        </div>
        <div class="form-group">
            <label for="Especialidad">Especialidad</label>
            <input type="text" name="Especialidad" id="Especialidad" class="form-control">
        </div>
        <!-- Agrega más campos según los atributos -->
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>

