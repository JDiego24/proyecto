<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTN</title>
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/estilos.css">

    <meta name="theme-color" content="#274e13">
    <!-- Primary Meta Tags -->
    <title>Área médica de la UTNay</title>
    <meta name="title" content="Área médica de la UTNay">
    <meta name="description"
        content="sitio web para el manejo de la información médica de los estudiantes en la Universidad Tecnologica de Nayarit">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://areamedicautnay.com">
    <meta property="og:title" content="Área médica de la UTNay">
    <meta property="og:description"
        content="sitio web para el manejo de la información médica de los estudiantes en la Universidad Tecnologica de Nayarit">
    <meta property="og:image" content="https://JDiego24.github.io/images/utn.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://areamedicautnay.com">
    <meta property="twitter:title" content="Área médica de la UTNay">
    <meta property="twitter:description"
        content="sitio web para el manejo de la información médica de los estudiantes en la Universidad Tecnologica de Nayarit">
    <meta property="twitter:image" content="https://JDiego24.github.io/images/utn.jpg">

</head>

<body>

    <header class="hero">
        <nav class="nav container">
            <div class="nav__logo">
                <h2 class="nav__title">Área medica</h2>
            </div>
            <div class="nav__menu">
                <img src="./images/menu.svg" class="nav__img">
            </div>
        </nav>

        <section class="hero__container container">
            <h1 class="hero__title">Bienvenido al sistema de registro.</h1>
            <p class="hero__paragraph">Aqui podrás dar de alta tu información medica.</p>
            <a href="{{ 'login' }}" class="cta">Comienza ahora</a>
        </section>
    </header>

    <main>
        <section class="knowledge">
            <div class="knowledge__container container">
                <div class="knowledege__texts">
                    <h2 class="subtitle">Área medica y psicopedagogica</h2>
                    <p class="knowledge__paragraph">Entre los servicios que ofrece:
                        <li>Atención medica y psicologica</li>
                        <li>Fisioterapia</li>
                        <li></li>
                        <br>
                    </p>
                </div>

                <figure class="knowledge__picture">
                    <img src="../images/mano.jpg" class="knowledge__img">
                </figure>
            </div>
        </section>

        <section class="questions container">
            <h2 class="subtitle">Preguntas frecuentes</h2>
            <p class="questions__paragraph">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea, porro
                doloribus neque perspiciatis sapiente fuga.</p>

            <section class="questions__container">
                <article class="questions__padding">
                    <div class="questions__answer">
                        <h3 class="questions__title">¿Qué documentos necesito para el registro?
                            <span class="questions__arrow">
                                <img src="./images/arrow.svg" class="questions__img">
                            </span>
                        </h3>

                        <p class="questions__show">Constancía de vigencia de derechos expedida por tu institución
                            medica,
                            matricula y correo institucional.
                        </p>
                    </div>
                </article>

                <article class="questions__padding">
                    <div class="questions__answer">
                        <h3 class="questions__title">¿Cómo se solicita la vigencia de derechos?
                            <span class="questions__arrow">
                                <img src="./images/arrow.svg" class="questions__img">
                            </span>
                        </h3>

                        <p class="questions__show">Ingresa al siguiente <a href="https://imss.gob.mx/imssdigital"
                                target="_blank">enlace</a>
                            Ahora tienes que hacer clic en la sección de vigencia de derechos y después pulsar en
                            iniciar tramite.
                            <br>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/t5w7OYj9HlY"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </p>
                    </div>
                </article>

                <article class="questions__padding">
                    <div class="questions__answer">
                        <h3 class="questions__title">¿A dónde me tengo que dirigir si tengo dudas?
                            <span class="questions__arrow">
                                <img src="./images/arrow.svg" class="questions__img">
                            </span>
                        </h3>

                        <p class="questions__show">Al área medica, frente al gimnasio</p>
                    </div>
                </article>
            </section>
        </section>
    </main>

    <footer class="footer">
        <section class="footer__copy container">
            <div class="footer__social">
                <a href="https://www.facebook.com/UTNAY" class="footer__icons" target="_blank"><img
                        src="./images/facebook.svg" class="footer__img"></a>
                <a href="#" class="footer__icons"><img src="./images/youtube.svg" class="footer__img"></a>
            </div>

            <h3 class="footer__copyright">&copy; 2022 Universidad Tecnológica de Nayarit. Derechos Reservados.</h3>
        </section>
    </footer>
    <script src="./js/questions.js"></script>

</body>

</html>