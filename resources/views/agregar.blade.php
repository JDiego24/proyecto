@extends('layout/plantilla')

@section("tituloPagina","Crear nuevo registro")

@section('contenido')
<div class="card">
    <h5 class="card-header">Registro de alumno</h5>
    <div class="card-body">
        <p class="card-text">
        <form action="{{ route("alumnos.store") }}" method="POST">
            @csrf
            <label for="">Nombre</label>
            <input type="text" name="Nombre" class="form-control" required>
            <label for="">Apellido Paterno</label>
            <input type="text" name="Apellido_P" class="form-control" required>
            <label for="">Apellido Materno</label>
            <input type="text" name="Apellido_M" class="form-control" required>
            <label for="">Fecha de nacimiento</label>
            <input type="date" name="Fecha_Nacimiento" class="form-control" required>
            <label for="">Telefono</label>
            <input type="integer" name="Telefono" class="form-control" required>
            <label for="">Matricula</label>
            <input type="text" name="Matricula" class="form-control" required>
            <label for="">Correo institucional</label>
            <input type="text" name="Correo_Electronico" class="form-control" required>
            <label for="">CURP</label>
            <input type="text" name="Curp" class="form-control" required>
            <label for="">NSS</label>
            <input type="text" name="NSS" class="form-control" required>
            <label for="">Edad</label>
            <input type="text" name="Edad" class="form-control" required>
            <br>
            <a href="{{ route("alumnos.index") }}" class="btn btn-info">
                <span class="fas fa-undo-alt"></span> Regresar
            </a>
            <button class="btn btn-primary">
                <span class="fas fa-user-plus"></span> Agregar
            </button>
        </form>
        </p>

    </div>
</div>
@endsection