@extends('layout/plantilla')

@section("tituloPagina","Actualizar registro")

@section('contenido')
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/crud.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="card">
        <h5 class="card-header">Actualizar alumno</h5>
        <div class="card-body">
            <p class="card-text">
            <form action="{{ route("alumnos.update", $alumno->id) }}" method="POST">
                @csrf
                @method("PUT")
                <label for="">Nombre</label>
                <input type="text" name="Nombre" class="form-control" required  value="{{ $alumno->Nombre }}">
                <label for="">Apellido Paterno</label>
                <input type="text" name="Apellido_P" class="form-control" required value="{{ $alumno->Apellido_P }}">
                <label for="">Apellido Materno</label>
                <input type="text" name="Apellido_M" class="form-control" required value="{{ $alumno->Apellido_M }}">
                <label for="">Fecha de nacimiento</label>
                <input type="date" name="Fecha_Nacimiento" class="form-control" required value="{{ $alumno->Fecha_Nacimiento }}">
                <label for="">Telefono</label>
                <input type="integer" name="Telefono" class="form-control" required value="{{ $alumno->Telefono }}">
                <label for="">Matricula</label>
                <input type="text" name="Matricula" class="form-control" required value="{{ $alumno->Matricula }}">
                <label for="">Correo institucional</label>
                <input type="text" name="Correo_Electronico" class="form-control" required value="{{ $alumno->Correo_Electronico }}">
                <label for="">CURP</label>
                <input type="text" name="Curp" class="form-control" required value="{{ $alumno->Curp }}">
                <label for="">NSS</label>
                <input type="text" name="NSS" class="form-control" required value="{{ $alumno->NSS }}">
                <br>
                <a href="{{ route("alumnos.index") }}" class="btn btn-info" >
                    <span class="fas fa-undo-alt"></span> Regresar
                </a>
                <button class="btn btn-warning">
                    <span class="fas fa-user-edit"></span> Actualizar
                </button>
            </form>
            </p>
    
        </div>
    </div>
</body>
</html>

@endsection