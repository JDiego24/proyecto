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
                <label for="">Área</label>
                <br>
                <select name="" id="">
                    <option value="">Medica</option>
                    <option value="">Psicopedagogica</option>
                    <option value="">Quiropractica</option>
                </select>
                <br>
                <br>
                <label for="">Comentarios</label>
                <br>
                <textarea name="" id="" cols="30" rows="10"></textarea>
                <br>
                <br> <br>
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
</body>

</html>

@endsection