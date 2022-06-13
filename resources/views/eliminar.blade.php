@extends('layout/plantilla')

@section("tituloPagina","Crear nuevo registro")

@section('contenido')
<div class="card">
    <h5 class="card-header">Eliminar alumno</h5>
    <div class="card-body">
        <p class="card-text">
        <div class="alert alert-danger" role="alert">
            ¿Quiere eliminar este registro?
            <table class="table table-sm table-hover">
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
                    <th>Editar</th>
                    <th>Eliminar</th>
                </thead>
                <tbody>
                    <tr>
                    </tr>
                </tbody>
            </table>
            <hr>
            <form action="">
                <a href="{{ route(" alumnos.index") }}" class="btn btn-info">
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