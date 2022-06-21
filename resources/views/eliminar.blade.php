@extends('layout/plantilla')

@section("tituloPagina","Crear nuevo registro")

@section('contenido')
<div class="card">
    <h5 class="card-header">Eliminar alumno</h5>
    <div class="card-body">
        <p class="card-text">
        <div class="alert alert-danger" role="alert">
            ¿Quiere eliminar este registro?
            <table class="table table-sm table-hover table-bordered" style="background-color: white">
                <thead>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Fecha de nacimiento</th>
                    <th>Telefono</th>
                    <th>Matricula</th>
                    <th>Correo institucional</th>
                    <th>CURP</th>
                    <th>NSS</th>
                    <th>Edad</th>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $alumno->Nombre }}</td>
                        <td>{{ $alumno->Apellido_P }}</td>
                        <td>{{ $alumno->Apellido_M }}</td>
                        <td>{{ $alumno->Fecha_Nacimiento }}</td>
                        <td>{{ $alumno->Telefono }}</td>
                        <td>{{ $alumno->Matricula }}</td>
                        <td>{{ $alumno->Correo_Electronico }}</td>
                        <td>{{ $alumno->Curp }}</td>
                        <td>{{ $alumno->NSS }}</td>
                    </tr>
                </tbody>
            </table>
            <hr>
            <form action="{{ route("alumnos.destroy", $alumno->id) }}" method="POST">
                @csrf
                @method("DELETE")
                <a href="{{ route("alumnos.index") }}" class="btn btn-info">
                    <span class="fas fa-undo-alt"></span> Regresar</a>
                <button class="btn btn-danger">
                    <span class="fas fa-user-times"></span> Eliminar
                </button>
            </form>
        </div>
        </p>

    </div>
</div>
@endsection