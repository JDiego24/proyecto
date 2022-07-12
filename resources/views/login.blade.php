<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>UTN</title>
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">

</head>
<header class="header2">
    <div class="wrapper">
        <nav>
            <a href="{{ '/' }}">Volver</a>
        </nav>
    </div>
</header>

<body>
    <div class="container-form sign-up">
        <div class="welcome-back">
            <div class="message">
                <h2>Bienvenido</h2>
                <p>Si eres administrativo presiona aqui</p>
                <button class="sign-up-btn">Iniciar Sesion</button>
            </div>
        </div>
        <!-- Con esta variable traemos un arreglo con  todos los mensajes de error -->
        <!-- {{$errors}} -->
        <form action="{{ route("alumnos.store") }}" method="POST" class="formulario2">
            @csrf
            <h2 class="create-account">Registro de estudiantes</h2>
            <input type="text" name="Nombre" placeholder="Nombre" id="Nombre" value="{{ old('Nombre') }}">
            @error('Nombre')
            <small>
                <strong>{{ $message }}</strong>
            </small>
            @enderror
            <br>
            <input type="text" name="Apellido_P" placeholder="Apellido paterno" id="Apellido_P" value="{{ old('Apellido_P') }}">
            @error('Apellido_P')
            <small>
                <strong>{{ $message }}</strong>
            </small>
            @enderror
            <br>
            <input type="text" name="Apellido_M" placeholder="Apellido materno" id="Apellido_M" value="{{ old('Apellido_M') }}">
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
            <input type="text" name="Matricula" placeholder="Matricula" id="Matricula" value="{{ old('Matricula') }}">
            @error('Matricula')
            <small>
                <strong>{{ $message }}</strong>
            </small>
            @enderror
            <br>
            <input type="text" name="Correo_Electronico" placeholder="Correo" id="Correo_Electronico"
                value="{{ old('Correo_Electronico') }}" placeholder="ejemplo@utnay.edu.mx">
            @error('Correo_Electronico')
            <small>
                <strong> {{ $message }}</strong>
            </small>
            @enderror
            <br>
            <input type="text" name="Curp" placeholder="CURP" id="Curp" value="{{ old('Curp') }}">
            @error('Curp')
            <small>
                <strong>{{ $message }} </strong>
            </small>
            @enderror
            <br>
            <input type="text" name="NSS" placeholder="NSS" id="NSS" value="{{ old('NSS') }}">
            @error('NSS')
            <small>
                <strong>{{ $message }}</strong>
            </small>
            @enderror
            <br>
            <button name="btlogin"> Registrarse</button>
        </form>
    </div>
    <div class="container-form sign-in">
        <form class="formulario">
            <h2 class="create-account">Iniciar sesión administrativos</h2>
            <input type="text" placeholder="Matricula">
            <input type="date" placeholder="Fecha de nacimiento">
            <input type="button" value="Iniciar Sesion">
        </form>
        <div class="welcome-back">
            <div class="message">
                <h2>Bienvenido de nuevo</h2>
                <p>Si eres estudiante, registra tus datos aqui</p>
                <button class="sign-in-btn">Registrarse</button>
            </div>
        </div>
    </div>
    <script src="../js/login.js"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
</body>

</html>