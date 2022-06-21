<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/login.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="container-form sign-up">
        <div class="welcome-back">
            <div class="message">
                <h2>Bienvenido</h2>
                <p>Sí ya tienes cuenta inicia sesión aquí</p>
                <button class="sign-up-btn">Iniciar Sesión</button>
            </div>
        </div>
        <form class="formulario" action="{{ route("alumnos.store") }}" method="POST">
            @csrf
            <h2>Crear cuenta</h2>
            <input style="text-transform:uppercase" placeholder="Nombre" type="text" name="Nombre" id="Nombre" value="{{ old('Nombre') }}">
            @error('Nombre')
            <small>
                <strong>{{ $message }}</strong>
            </small>
            @enderror
            <br>
            <input style="text-transform:uppercase" placeholder="Apellido paterno" type="text" name="Apellido_P" id="Apellido_P" value="{{ old('Apellido_P') }}">
            @error('Apellido_P')
            <small>
                <strong>{{ $message }}</strong>
            </small>
            @enderror
            <br>
            <input style="text-transform:uppercase" placeholder="Apellido materno" type="text" name="Apellido_M" id="Apellido_M" value="{{ old('Apellido_M') }}">
            @error('Apellido_M')
            <small>
                <strong>{{ $message }}</strong>
            </small>
            @enderror
            <br>
            <input type="date" name="Fecha_Nacimiento" placeholder="Fecha de nacimiento" id="Fecha_Nacimiento" value="{{ old("
                Fecha_Nacimiento") }}">
            @error('Fecha_Nacimiento')
            <small>
                <strong>{{ $message }}</strong>
            </small>
            @enderror
            <br>
            <input type="integer" name="Telefono" placeholder="Telefono" id="Telefono" value="{{ old('Telefono') }}">
            @error('Telefono')
            <small>
                <strong>{{ $message }}</strong>
            </small>
            @enderror
            <br>
            <input style="text-transform:uppercase" placeholder="Matricula" type="text" name="Matricula" id="Matricula" value="{{ old('Matricula') }}">
            @error('Matricula')
            <small>
                <strong>{{ $message }}</strong>
            </small>
            @enderror
            <br>
            <input style="text-transform:uppercase" placeholder="Correo institucional" type="text" name="Correo_Electronico" id="Correo_Electronico"
                value="{{ old('Correo_Electronico') }}" placeholder="ejemplo@utnay.edu.mx">
            @error('Correo_Electronico')
            <small>
                <strong> {{ $message }}</strong>
            </small>
            @enderror
            <br>
            <input style="text-transform:uppercase" placeholder="CURP" type="text" name="Curp" id="Curp" value="{{ old('Curp') }}" >
            @error('Curp')
            <small>
                <strong>{{ $message }} </strong>
            </small>
            @enderror
            <br>
            <input type="text" placeholder="NSS" name="NSS" id="NSS" value="{{ old('NSS') }}">
            @error('NSS')
            <small>
                <strong>{{ $message }}</strong>
            </small>
            @enderror
            <br>
            <br>
            <input type="button" value="Registrarse">
        </form>
    </div>
    <div class="container-form sign-in">
        <form class="formulario" action="{{ route("alumnos.store") }}" method="POST">
            @csrf
            <h2>Iniciar Sesión</h2>
            <input style="text-transform:uppercase" type="text" name="Matricula" placeholder="Matricula" id="Matricula" value="{{ old('Matricula') }}">
            @error('Matricula')
            <small>
                <strong>{{ $message }}</strong>
            </small>
            @enderror
            <br>
            <input type="date" name="Fecha_Nacimiento" id="Fecha_Nacimiento" placeholder="Fecha de nacimiento" value="{{ old("
                Fecha_Nacimiento") }}">
            @error('Fecha_Nacimiento')
            <small>
                <strong>{{ $message }}</strong>
            </small>
            @enderror
            <br>
            <br>
            <input type="button" value="Registrarse">
        </form>
        <div class="welcome-back">
            <div class="message">
                <h2>Bienvenido</h2>
                <p>Sí ya tienes cuenta inicia sesión aquí</p>
                <button class="sign-up-btn">Iniciar Sesión</button>
            </div>
        </div>

    </div>

    <script src="./js/login.js"></script>
</body>

</html>