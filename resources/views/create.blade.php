@extends('layout/plantilla')

@section("tituloPagina","Crear nueva consulta")

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
        <h5 class="card-header">Consulta de alumno</h5>
        <div class="card-body">
            <p class="card-text">
                <!-- Con esta variable traemos un arreglo con  todos los mensajes de error -->
                <!-- {{$errors}} -->
            <form action="{{ route("alumnos.store") }}" method="POST">
                @csrf
                <label for="">Nombre</label>
                <input style="text-transform:uppercase" type="text" name="Nombre" class="form-control" id="Nombre" value="{{ old('Nombre') }}">
                @error('Nombre')
                <small>
                    <strong>{{ $message }}</strong>
                </small>
                @enderror
                <br>
                <label for="">Área de atención</label>
                <br>
                <ul class="list-group">
                    <li class="list-group-item">
                      <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                      Medica
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                      Psicopedagogica
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                      Quiropractica
                    </li>
                  </ul>
                <br>
                <label for="">Matricula</label>
                <input style="text-transform:uppercase" type="text" name="Matricula" class="form-control" id="Matricula" value="{{ old('Matricula') }}">
                @error('Matricula')
                <small>
                    <strong>{{ $message }}</strong>
                </small>
                @enderror
                <br>
                <label for="">Diagnostico</label>
                <br>
                <textarea name="" id="" cols="100" rows="10"></textarea>
                <br>
                <br> <br>
                <a href="{{ ('consulta') }}" class="btn btn-outline-success">
                    <span class="fa fa-heartbeat"></span> Regresar
                </a>
                <button class="btn btn-outline-success">
                    <span class="fas fa-user-plus"></span> Agregar
                </button>
            </form>
            </p>
        </div>
    </div>
</body>

</html>

@endsection