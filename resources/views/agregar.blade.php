@extends('layout/plantilla')

@section("tituloPagina","Crear nuevo registro")

@section('contenido')
<div class="card">
    <h5 class="card-header">Registro de alumno</h5>
    <div class="card-body">
        <p class="card-text">
            <!-- Con esta variable traemos un arreglo con  todos los mensajes de error -->
            <!-- {{$errors}} -->
        <form action="{{ route("alumnos.store") }}" method="POST">
            @csrf
            <label for="">Nombre</label>
            <input type="text" name="Nombre" class="form-control" id="Nombre" value="{{ old('Nombre') }}">
            @error('Nombre')
            <small>
                <strong>{{ $message }}</strong>
            </small>
            @enderror
            <br>
            <label for="">Apellido Paterno</label>
            <input type="text" name="Apellido_P" class="form-control" id="Apellido_P" value="{{ old('Apellido_P') }}">
            @error('Apellido_P')
            <small>
                <strong>{{ $message }}</strong>
            </small>
            @enderror
            <br>
            <label for="">Apellido Materno</label>
            <input type="text" name="Apellido_M" class="form-control" id="Apellido_M" value="{{ old('Apellido_M') }}">
            @error('Apellido_M')
            <small>
                <strong>{{ $message }}</strong>
            </small>
            @enderror
            <br>
            <label for="">Fecha de nacimiento</label>
            <input type="date" name="Fecha_Nacimiento" class="form-control" id="Fecha_Nacimiento" value="{{ old("
                Fecha_Nacimiento") }}">
            @error('Fecha_Nacimiento')
            <small>
                <strong>{{ $message }}</strong>
            </small>
            @enderror
            <br>
            <label for="">Telefono</label>
            <input type="integer" name="Telefono" class="form-control" id="Telefono" value="{{ old('Telefono') }}">
            @error('Telefono')
            <small>
                <strong>{{ $message }}</strong>
            </small>
            @enderror
            <br>
            <label for="">Matricula</label>
            <input type="text" name="Matricula" class="form-control" id="Matricula" value="{{ old('Matricula') }}">
            @error('Matricula')
            <small>
                <strong>{{ $message }}</strong>
            </small>
            @enderror
            <br>
            <label for="">Correo institucional</label>
            <input type="text" name="Correo_Electronico" class="form-control" id="Correo_Electronico"
                value="{{ old('Correo_Electronico') }}">
            @error('Correo_Electronico')
            <small>
                <strong> {{ $message }}</strong>
            </small>
            @enderror
            <br>
            <label for="">CURP</label>
            <input type="text" name="Curp" class="form-control" id="Curp" value="{{ old('Curp') }}">
            @error('Curp')
            <small>
                <strong>{{ $message }} </strong>
            </small>
            @enderror
            <br>
            <label for="">NSS</label>
            <input type="text" name="NSS" class="form-control" id="NSS" value="{{ old('NSS') }}">
            @error('NSS')
                <small>
                    <strong>{{ $message }}</strong>
                </small>
            @enderror
            <br>
            <label for="">Edad</label>
            <input type="text" name="Edad" class="form-control" id="Edad" value="{{ old('Edad') }}">
            @error('Edad')
                <small>
                    <strong>{{ $message }}</strong>
                </small>
            @enderror
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