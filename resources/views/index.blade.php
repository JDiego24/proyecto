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
        </nav>

        <section class="hero__container container">
            <h1 class="hero__title">Bienvenido al sistema de registro.</h1>
            <p class="hero__paragraph">Aqui podrás dar de alta tu información medica.</p>
            <a href="{{ 'login' }}" class="cta">Comienza ahora</a>
        </section>
    </header>

    <main>
        <section class="testimony">
            <div class="testimony__container container">
                <img src="./images/leftarrow.svg" class="testimony__arrow" id="before">

                <section class="testimony__body testimony__body--show" data-id="1">
                    <div class="testimony__texts">
                        <h2 class="subtitle">Atención medica</span></h2>
                        <p class="testimony__review">Puedes acudir en caso de presentar malestares fisicos donde serás
                            atentido por profesional medico.</p>
                    </div>

                    <figure class="testimony__picture">
                        <img src="./images/face.png" class="testimony__img">
                    </figure>
                </section>

                <section class="testimony__body" data-id="2">
                    <div class="testimony__texts">
                        <h2 class="subtitle">Orientación psicopedagogica</h2>
                        <p class="testimony__review">Puedes acudir en caso de presentar malestares emocionales donde se
                            te brindará el seguimiento necesario.</p>
                    </div>

                    <figure class="testimony__picture">
                        <img src="./images/face2.png" class="testimony__img">
                    </figure>
                </section>

                <section class="testimony__body" data-id="3">
                    <div class="testimony__texts">
                        <h2 class="subtitle">Fisioterapia</h2>
                        <p class="testimony__review">Puedes ocudir en caso de presentar malestares fisicos, el área
                            cuenta con el equipo necesario para brindarte tratamiento para tu pronta recuperación.</p>
                    </div>

                    <figure class="testimony__picture">
                        <img src="./images/face3.png" class="testimony__img">
                    </figure>
                </section>

                <img src="./images/rightarrow.svg" class="testimony__arrow" id="next">
            </div>
        </section>

        <section class="questions container">
            <h2 class="subtitle">Preguntas frecuentes</h2>
            <p class="questions__paragraph"></p>

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

                        <p class="questions__show">A continuación, te dejamos un tutorial para que sea más facil la
                            realización de tu tramite. puedes realizarlo desde el siguiente <a
                                href="https://imss.gob.mx/imssdigital" target="_blank">enlace.</a> Desde aquí sabrás si tienes seguro o no.
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/t5w7OYj9HlY"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </p>
                    </div>
                </article>

                <article class="questions__padding">
                    <div class="questions__answer">
                        <h3 class="questions__title">¿Cómo se solicita el número de seguro social?
                            <span class="questions__arrow">
                                <img src="./images/arrow.svg" class="questions__img">
                            </span>
                        </h3>

                        <p class="questions__show">A continuación, te dejamos un tutorial para que sea más facil la
                            realización de tu tramite. puedes realizarlo desde el siguiente <a
                                href="https://imss.gob.mx/imssdigital" target="_blank">enlace</a>
                            <iframe  width="560" height="315" src="https://www.youtube.com/embed/SB-rIg8QyV8"
                                title="Obtén tu Número de Seguridad Social con la app IMSS Digital" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </p>
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
    <script src="./js/slider.js"></script>

</body>

</html>