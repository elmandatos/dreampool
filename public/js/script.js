    //script para el menu desplegable
    var btn_movil = $('#movil');
    const menucito = $('nav').find('ul');

    $(function() {
        btn_movil.on('click', function(e) {
            e.preventDefault();
            menucito.toggleClass('open-menu');
        })
    });


    lightbox.option({
        'resizeDuration': 200,
        'wrapAround': false,
    })

    $(function() {
        $(".rslides").responsiveSlides();
    });
    // Slideshow 4
    $(function() {
        $("#slider4").responsiveSlides({
            auto: true,
            pause: true,
            nav: true,
            pager: false,
            speed: 1000,
            namespace: "callbacks",
        });
    });

    var vid = document.getElementById("video-bg");
    vid.autoplay = true;
    vid.load();


    //función ir arriba
    $('.ir-arriba').click(function() {
        $("html, body").animate({
            scrollTop: 0
        }, 700);
    });

    $(".btn-ancla").click(function(evento) {
        //Anulamos la funcionalidad por defecto del evento
        evento.preventDefault();
        //Creamos el string del enlace ancla
        var codigo = "#" + $(this).data("ancla");
        //Funcionalidad de scroll lento para el enlace ancla en 3 segundos
        $("html,body").animate({
            scrollTop: $(codigo).offset().top
        }, 1000);
        menucito.toggleClass('open-menu');
    });