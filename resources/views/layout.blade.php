<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
    integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
    <link rel="stylesheet" href="{{ asset("css/responsiveslides.css") }}">
    <link rel="stylesheet" href="{{ asset("css/lightbox.css") }}">

    <title>@yield("title")</title>
</head>

<body>
    <header>
        <span id="inicio-section"></span>
        <!-- MENU -->
        <nav id="menu">

            <div>
                <a href="#" id="movil">
                    <i class="fas fa-bars fa-1x"></i>
                </a>
            </div>

            <ul class="flex-container flex-row to-col txt-center">
                <li class="grow1 flex-container align-center"> 
                    <a class="grow1 btn-ancla" data-ancla="inicio-section" href="_top">INICIO</a> </li>
                <li class="grow1 flex-container align-center"> 
                    <a class="grow1 btn-ancla" data-ancla="servicios-section" href="">SERVICIOS</a> </li>
                <li class="grow1 flex-container align-center"> 
                    <a class="grow1 btn-ancla" data-ancla="galeria-section" href="">GALERIA</a></li>
                <li class="grow1 flex-container align-center"> 
                    <a class="grow1 btn-ancla" data-ancla="contactanos-section" href="">CONTÁCTANOS</a>
                 </li>
            </ul>
        </nav>
        <!-- END MENU -->

        @yield('header')

    </header>

    <main>
        @yield("main")
    </main>
    <footer>
        <img src="{{ asset("img/black-corner.png") }}" alt="">
        <div id="social-bg" class="flex-container just-center">
            <div id="social" class="flex-container flex-row align-center just-spc-ard">
                <div class="icon-container flex-container just-center align-center">
                    <i class="fab fa-facebook-f fa-2x"></i>
                </div>
                
                <div class="icon-container flex-container just-center align-center">
                    <i class="fab fa-google-plus-g fa-2x"></i>
                </div>
                <div class="icon-container flex-container just-center align-center">
                    <i class="fab fa-twitter fa-2x"></i>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="{{ asset("/js/lightbox.js") }}"></script>
        <script src="{{ asset("/js/script.js") }}"></script>
        <script src="{{ asset("/js/responsiveslides.js") }}"></script>
    </body>

</html>