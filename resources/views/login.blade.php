<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>UTN</title>
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
</head>

<body>
    <div class="container-form sign-up">
        <div class="welcome-back">
            <div class="message">
                <h2>Bienvenido</h2>
                <p>Si ya tienes una cuenta por favor inicia sesion aqui</p>
                <button class="sign-up-btn">Iniciar Sesion</button>
            </div>
        </div>
        <form class="formulario">
            <h2 class="cuenta-gratis">Crear una cuenta</h2>
            <input type="text" placeholder="Nombre">
            <input type="text" placeholder="Apellido paterno">
            <input type="text" placeholder="Apellido materno">
            <input type="text" placeholder="Matricula">
            <input type="text" placeholder="Telefono">
            <input type="email" placeholder="Correo">
            <input type="date" placeholder="Fecha de nacimiento">
            <input type="text" placeholder="CURP">
            <input type="text" placeholder="NSS">
            <input type="button" value="Registrarse">
        </form>
    </div>
    <div class="container-form sign-in">
        <form class="formulario">
            <h2 class="create-account">Iniciar Sesion</h2>
            <input type="text" placeholder="Matriculo">
            <input type="date" placeholder="Fecha de nacimiento">
            <input type="button" value="Iniciar Sesion">
        </form>
        <div class="welcome-back">
            <div class="message">
                <h2>Bienvenido de nuevo</h2>
                <p>Si aun no tienes una cuenta por favor registrese aqui</p>
                <button class="sign-in-btn">Registrarse</button>
            </div>
        </div>
    </div>
    <script src="../js/login.js"></script>
</body>

</html>