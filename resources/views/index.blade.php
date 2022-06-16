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
<meta name="description" content="sitio web para el manejo de la información médica de los estudiantes en la Universidad Tecnologica de Nayarit">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://areamedicautnay.com">
<meta property="og:title" content="Área médica de la UTNay">
<meta property="og:description" content="sitio web para el manejo de la información médica de los estudiantes en la Universidad Tecnologica de Nayarit">
<meta property="og:image" content="https://JDiego24.github.io/images/utn.jpg">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://areamedicautnay.com">
<meta property="twitter:title" content="Área médica de la UTNay">
<meta property="twitter:description" content="sitio web para el manejo de la información médica de los estudiantes en la Universidad Tecnologica de Nayarit">
<meta property="twitter:image" content="https://JDiego24.github.io/images/utn.jpg">

</head>

<body>

    <header class="hero">
        <nav class="nav container">
            <div class="nav__logo">
                <h2 class="nav__title">Área medica</h2>
            </div>

            <ul class="nav__link nav__link--menu">
                <li class="nav__items">
                    <a href="" class="nav__links">Inicio</a>
                </li>
                <li class="nav__items">
                    <a href="#" class="nav__links">Acerca de</a>
                </li>
                <li class="nav__items">
                    <a href="#" class="nav__links">Inicio de sesión</a>
                </li>
                <li class="nav__items">
                    <a href="#" class="nav__links">Blog</a>
                </li>

                <img src="./images/close.svg" class="nav__close">   
            </ul>

            <div class="nav__menu">
                <img src="./images/menu.svg" class="nav__img">
            </div>
        </nav>

        <section class="hero__container container">
            <h1 class="hero__title">Bienvenido al sistema de registro.</h1>
            <p class="hero__paragraph">Aqui podrás dar de alta tu información medica.</p>
            <a href="#" class="cta">Comienza ahora</a>
        </section>
    </header>

    <main>
        <section class="container about">
            <h2 class="subtitle">Proximos eventos</h2>
            <p class="about__paragraph">información importante</p>

            <div class="about__main">
                <article class="about__icons">
                    <img src="./images/shapes.svg" class="about__icon">
                    <h3 class="about__title">Semana de la salud</h3>
                    <p class="about__paragrah">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae tempore
                        porro eius facilis?</p>
                </article>

                <article class="about__icons">
                    <img src="./images/paint.svg" class="about__icon">
                    <h3 class="about__title">Modulo de vacunación</h3>
                    <p class="about__paragrah">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae tempore
                        porro eius facilis?</p>
                </article>

                <article class="about__icons">
                    <img src="./images/code.svg" class="about__icon">
                    <h3 class="about__title">Cita medica</h3>
                    <p class="about__paragrah">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae tempore
                        porro eius facilis?</p>
                </article>
            </div>
        </section>

        <section class="knowledge">
            <div class="knowledge__container container">
                <div class="knowledege__texts">
                    <h2 class="subtitle">Área medica y psicopedagogica de la UTNay</h2>
                    <p class="knowledge__paragraph">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi,
                        aliquam nemo in facere suscipit at delectus unde labore ad officia iste accusantium eaque
                        aperiam laborum est voluptate totam? Modi, obcaecati?</p>
                    <a href="#" class="cta">Iniciar sesión</a>
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
                        <h3 class="questions__title">¿Qué documentos necesito?
                            <span class="questions__arrow">
                                <img src="./images/arrow.svg" class="questions__img">
                            </span>
                        </h3>

                        <p class="questions__show">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos
                            facere, quidem eum id excepturi assumenda explicabo nam accusamus veritatis voluptates
                            eveniet adipisci, dicta nihil nemo modi possimus officiis quam atque? Lorem ipsum, dolor sit
                            amet consectetur adipisicing elit. Quos facere, quidem eum id excepturi assumenda explicabo
                            nam accusamus veritatis voluptates eveniet adipisci, dicta nihil nemo modi possimus officiis
                            quam atque?</p>
                    </div>
                </article>

                <article class="questions__padding">
                    <div class="questions__answer">
                        <h3 class="questions__title">¿Es necesario darme de alta?
                            <span class="questions__arrow">
                                <img src="./images/arrow.svg" class="questions__img">
                            </span>
                        </h3>

                        <p class="questions__show">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos
                            facere, quidem eum id excepturi assumenda explicabo nam accusamus veritatis voluptates
                            eveniet adipisci, dicta nihil nemo modi possimus officiis quam atque? Lorem ipsum, dolor sit
                            amet consectetur adipisicing elit. Quos facere, quidem eum id excepturi assumenda explicabo
                            nam accusamus veritatis voluptates eveniet adipisci, dicta nihil nemo modi possimus officiis
                            quam atque?</p>
                    </div>
                </article>

                <article class="questions__padding">
                    <div class="questions__answer">
                        <h3 class="questions__title">¿A dónde me tengo que dirigir?
                            <span class="questions__arrow">
                                <img src="./images/arrow.svg" class="questions__img">
                            </span>
                        </h3>

                        <p class="questions__show">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos
                            facere, quidem eum id excepturi assumenda explicabo nam accusamus veritatis voluptates
                            eveniet adipisci, dicta nihil nemo modi possimus officiis quam atque? Lorem ipsum, dolor sit
                            amet consectetur adipisicing elit. Quos facere, quidem eum id excepturi assumenda explicabo
                            nam accusamus veritatis voluptates eveniet adipisci, dicta nihil nemo modi possimus officiis
                            quam atque?</p>
                    </div>
                </article>
            </section>
        </section>
    </main>

    <footer class="footer">
        <section class="footer__copy container">
            <div class="footer__social">
                <a href="#" class="footer__icons"><img src="./images/facebook.svg" class="footer__img"></a>
                <a href="#" class="footer__icons"><img src="./images/twitter.svg" class="footer__img"></a>
                <a href="#" class="footer__icons"><img src="./images/youtube.svg" class="footer__img"></a>
            </div>

            <h3 class="footer__copyright">Derechos reservados &copy; Juan Diego González Miramontes</h3>
        </section>
    </footer>

    <script src="./js/slider.js"></script>
    <script src="./js/questions.js"></script>
    <script src="./js/menu.js"></script>
</body>

</html>