@extends('layout')
    @section('title')
        DreamPool
    @endsection

    @section('header')
    <div class="flex-container just-center align-center">
            <video id="video-bg" src="{{ asset("video.webm") }}" autoplay="true" loop="true"></video>

            <figure id="logo" class="grow1 flex-container just-center" style=";">
                <div style="font-weight: 900;">DREAM<br><span style="font-weight: 300;">Pool</span></div>
            </figure>
    </div>
    @endsection
<i class="ir-arriba fa fa-arrow-up fa-1x"></i>
    @section("main")
        <div id="div-pool" class="flex-container flex-col just-center align-center">
            <h1 class="txt-center"><span style="font-weight: 100">LET YOUR DREAM POOL DESIGN</span><br><b>BEGIN RIGHT NOW!</b></h1>

            <p class="txt-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis sequi itaque ipsa dolor ullam iusto perferendis! Ea perspiciatis, expedita amet minus sit voluptas eum, eligendi soluta provident inventore saepe maxime?</p>
        </div>

        <section id="servicios-section">
        
            <br><br><br>
            <h2 class="txt-center">SERVICIOS</h2><br>
            <div id="galeria" class="wrap flex-container to-col flex-wrap just-spc-ard">
                
          
                    <article class="grow1 servicio">
                        <img src="{{ asset("img/asset 1.jpeg") }}" alt="">
                        <figcaption class=" flex-container align-end just-start">
                            <p><b>DISEÑO &</b><br>CONSTRUCCIÓN</p>
                        </figcaption>
                    </article>
    
                    <article class="grow1 servicio">
                        <img src="{{ asset("img/asset 2.jpeg") }}" alt="">
                        <figcaption class=" flex-container align-end just-start">
                            <p><b>MANTENIMIENTO &</b><br>TRATAMIENTO DE AGUA</p>
                        </figcaption>
                    </article>
    
                    <article class="grow1 servicio">
                        <img src="{{ asset("img/asset 3.jpeg") }}" alt="">
                        <figcaption class=" flex-container align-end just-start">
                            <p><b>REPARACIÓN DE </b><br>PISCINA & SPA</p>
                        </figcaption>
                    </article>
      
                    <article class="grow1 servicio">
                        <img src="{{ asset("img/asset 4.jpeg") }}" alt="">
                        <figcaption class=" flex-container align-end just-start">
                            <p><b>SOLUCIONES</b><br>AMBIENTALES</p>
                        </figcaption>
                    </article>
            </div>
        </section>  


        <section id="galeria-section">
            <br><br><br>          
            <div class="txt-center">
                <h2 id="">GALERIA</h2><br>
                {{-- SLIDER --}}
                <div id="content-slider" class="">
                    <ul class="content_slider callback rslides callback_container" id="slider4">
                        <li>
                            <img src="{{ asset("img/asset 4.jpeg") }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset("img/asset 3.jpeg") }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset("img/asset 2.jpeg") }}" alt="">
                        </li>
                    </ul>
                </div><br>
            </div>
    
            <div id="fotos" class="flex-container flex-row to-col align-center txt-center just-spc-ard flex-wrap">
    
                <a href="{{ asset("img/asset 5.jpeg") }}" data-lightbox="mygallery">
                    <img src="{{ asset("img/asset 5.jpeg") }}" alt="">
                </a>
    
                <a href="{{ asset("img/asset 6.jpeg") }}" data-lightbox="mygallery">
                    <img src="{{ asset("img/asset 6.jpeg") }}" alt="">
                </a>
    
                <a href="{{ asset("img/asset 7.jpeg") }}" data-lightbox="mygallery">
                    <img src="{{ asset("img/asset 7.jpeg") }}" alt="">
                </a>
                <a href="{{ asset("img/asset 8.jpeg") }}" data-lightbox="mygallery">
                    <img src="{{ asset("img/asset 8.jpeg") }}" alt="">
                </a>
                <a href="{{ asset("img/asset 9.jpeg") }}" data-lightbox="mygallery">
                    <img src="{{ asset("img/asset 9.jpeg") }}" alt="">
                </a>
            </div><br>

        </section>


        <section id="contactanos-section"><br><br><br>
<h2 class="txt-center" id="contactanos-section">CONTACTANOS</h2>
    
    <form action="{{ route("correo") }}" method="POST" class="flex-container flex-col align-center">
        {{ csrf_field() }}
        <input class="grow1" type="text" name="nombres" placeholder="Nombres">
        <span style="color:red">{{ $errors->first("nombres") }}</span>
        <input class="grow1" type="text" name="apellidos" placeholder="Apellidos">
        <span style="color:red">{{ $errors->first("apellidos") }}</span>
        <input class="grow1" type="email" name="email" placeholder="Email">
        <span style="color:red">{{ $errors->first("email") }}</span>
        <input class="grow1" type="tel" name="telefono" placeholder="Teléfono">
        <span style="color:red">{{ $errors->first("telefono") }}</span>
        <textarea name="mensaje" id="" cols="30" rows="10" placeholder="Mensaje"></textarea>
        <span style="color:red">{{ $errors->first("mensaje") }}</span>
        <input type="submit">
    </form>
        </section>

    @endsection
    