(function($) {
    // Tamaño de la pantalla
    var $window = $(window),
        windowSize	= $window.width(),
        windowHeight = $window.height();
    function menuMobile() {
        var icon = $('.header__menu__icon'),
            menu = $('.header--bottom');
        icon.click(function() {
            $(this).toggleClass('open-menu');
            $('html, body').toggleClass('noscroll');
            menu.stop().fadeToggle().toggleClass('active');
        });
    }
    function searchMobile() {
        var fades = $('.header__menu__icon, .header__logo'),
            header = $('.header--top'),
            open = $('.js-search'),
            close = $('.js-search-close');
        open.click(function() {
            fades.fadeOut(300, function() {
                header.addClass('search-active');
            });
        });
        close.click(function() {
            header.removeClass(function() {
                $(this).removeClass('search-active');
                fades.fadeIn(300);
            });
        });
    }
    function hoverSearch() {
        var icon = $('.js-search'),
            send = $('.send-group');
        send.hover(function() {
            icon.toggleClass('hover');
        });
    }
    function filter() {
        var $container = $('.js-grid'),
            $checkboxes = $('#filters input'),
            $list = $('.filtros__content'),
            filtros = $('.filtros'),
            $button = $('.js-button'),
            icon = $('.cat__icon'),
            menu = $('.cat__menu'),
            filtrosParent = $('#js-filter'),
            index = 0,
            box = 0,
            fullWidthTags = 100,
            endIndex = 0,
            stopStep = 0,
            next = $('.cat__next'),
            back = $('.cat__back');

        /*Menu Categorias*/
        icon.click(function() {
            menu.stop().slideToggle().toggleClass('open-tags');
            $(this).toggleClass('open-cat');
        });

        /*Isotope*/
        $container.imagesLoaded( function() {
            $container.isotope({
                // options
                itemSelector: '.grid__item',
                layoutMode: 'masonry',
                masonry: {
                    columnWidth: '.item__sizer'
                },
                percentPosition: true
            });
        });
        /*Remover tag filtrado*/
        function filterRemove() {
            $('.filtros').click(function(e) {
                e.stopImmediatePropagation();
                var $this = $(this),
                    valor = $this.find('input').attr('data-filter');
                icon.removeClass('open-cat');
                menu.stop().removeClass('open-tags').slideUp();
                $this.remove();
                /*Genero un click en el checkbox que tiene el mismo val() para que funcione el filtro de isotope*/
                /*SAUL: Aqui duplica los clicks*/
                $('#filters :input').filter(function(){return this.value== valor}).click().parents('.group').removeClass('active');
            });
        }

        /*Reviso si los checkbox cambiaron y se agregan los tags*/
        $checkboxes.click(function() {
            /*Reviso si esta abierto el menu, si no esta esto no se ejecuta*/
            if(menu.hasClass('open-tags')) {
                var $text = $(this).parent().find('label').text();
                if($(this).is(':checked')) {
                    /*Creo el boton de los tags*/
                    var $val = $(this).val(),
                        button = '<div class="filtros"><input type="button" class="js-button" data-filter="' + $val + '" value="' + $text +'"><svg><use xlink:href="#shape-icon-close" /></svg></div>';
                    /*Se agrega el tag*/
                    $list.append(button);
                    $(this).parents('.group').addClass('active');
                } else {
                    /*Se quita el tag si desmarco el checkbox*/
                    $('.filtros :input').filter(function(){return this.value== $text}).parent().remove();
                    $(this).parents('.group').removeClass('active');
                }
            }
        }); 

        /*Cambio de estado checkbox y filtro isotopo*/
        $checkboxes.change(function(){
            var filters = [];
            $checkboxes.filter(':checked').each(function(){
                filters.push( this.value );
            });
            /*Juntamos filtros*/
            filters = filters.join(', ');
            /*Filtro isotopo*/
            $container.isotope({ filter: filters });
        });

        /*Funcion que comprueba si hay mas elementos de los que se ven para mostrar next*/
        function newArrows() {
            box = $('.cat__filter').width() - 48;
            fullWidthTags = $list.width();
            endIndex = (fullWidthTags / box) - 1;
            stopStep = (fullWidthTags / box) - 2;
            if(index < endIndex) {
                next.removeClass('cat--disable');
            }
        }

        /*Click para avanzar*/
        next.on('click', function() {
            box = $('.cat__filter').width() - 68;
            fullWidthTags = $list.width();
            endIndex = (fullWidthTags / box) - 1;
            stopStep = (fullWidthTags / box) - 2;
            /*Removemos clase de back (si avanzo se puede retroceder)*/
            back.removeClass('cat--disable');
            /*Comprobamos para animacion*/
            if(index < endIndex) {
                filtrosParent.animate({'left': '-='+ box +'px'});
            } 
            /*Comprobamos para ocultar icono al final*/
            if(index > stopStep) {
                next.addClass('cat--disable');
            }
            /*Aumentamos index*/
            index++;
        });
        /*Click para retroceder*/
        back.on('click', function() {
            box = $('.cat__filter').width() - 68;
            fullWidthTags = $list.width();
            endIndex = (fullWidthTags / box) - 1;
            stopStep = (fullWidthTags / box) - 2;
            /*Comprobamos para animacion*/
            if(index > 0) {
                filtrosParent.animate({'left': '+='+ box +'px'});
                /*Si estoy al comienzo mostramos icono next*/
                next.removeClass('cat--disable');
            } 
            /*Comprobamos si esta al comienzo y ocultamos el icono back*/
            if(index == 1){
                $(this).addClass('cat--disable');
            }
            /*Reducimos index*/
            index--;
        });

        /*Revisar si el html del elemento cambio y se ejecutan funciones*/
        $list.bind("DOMSubtreeModified",function(){
            var placeholder = $('.js-placeholder');
            filterRemove();
            newArrows();
            if($(this).is(':empty')) {
                placeholder.fadeIn();
            } else {
                placeholder.hide();
            }
        });
    }
    function lightbox() {
        var button = $('.js-light, .informa'),
            light = $('.informa');
        button.hover(function () {
            light.stop().fadeToggle();
        });
    }
    function share() {
        var button = $('.share__group'),
            scroll = $(window).scrollTop(),
            altura = $(window).scrollTop() + $(window).height(),
            footer = $('.footer').offset().top;
        if(altura > footer) {
            button.addClass('stop-group');
        } else {
            button.removeClass('stop-group');
        }
    }
    function volverArriba() {
        var button = $('.btn--scroll');
        button.click(function() {
            $('html, body').animate({ scrollTop: 0 }, 800);
        });
    }
    function input() {
        var input = $('input, select, textarea');
        input.focus(function() {
            $(this).parents('.group').addClass('focusin');
        });
        input.blur(function() {
            $(this).parents('.group').removeClass('focusin');
        });
    }
    function mapButtons() {
        button = $('.btn--map');
        if(button.length) {
            if(windowSize > 740) {
                button.click(function(e) {
                    e.preventDefault();
                });
            }
        }
    }
    function gallery() {
        var slide = $('.js-slider__gallery'),
            texto = $('.gallery__text p');
        slide.each(function() {
            $(this).flexslider({
                animation: "slide",
                controlNav: false,
                controlsContainer: $(".custom-controls-container"),
                prevText: '<svg><use xlink:href="#shape-icon-arrow-back" /></svg>',
                nextText: '<svg><use xlink:href="#shape-icon-arrow-next" /></svg>',
                start: function(slider) {
                    $('.total-slides').text(slider.count);
                    $('.current-slide').text(slider.currentSlide+1);
                    var title = $('.flex-viewport .slides').find('.flex-active-slide').children().attr('alt');
                    texto.empty();
                    texto.text(title);
                },
                after: function(slider) {
                    $('.current-slide').text(slider.currentSlide+1);
                    var title = $('.flex-viewport .slides').find('.flex-active-slide').children().attr('alt');
                    texto.empty();
                    texto.text(title);
                }
            });
        });
    }
    /*NOTE: Inicia flipbook*/
    function flipbook() {
        if($('.flipbook').length) {
            /*NOTE: Numero de la pagina*/
            function getViewNumber(book, page) {
                return parseInt((page || book.turn('page'))/2 + 1, 10);
            }
            /*NOTE: Total paginas*/
            function numberOfViews(book) {
                return $('.flipbook').turn('pages') / 2 + 1;
            }
            /*NOTE: Iniciamos el slide y cambiamos paginas*/
            $( "#slider" ).slider({
                min: 1,
                max: 100,
                stop: function() {
                    $('.flipbook').turn('page', Math.max(1, $(this).slider('value')*2 - 2));
                }
            });
            /*NOTE: Iniciamos flipbook*/
            function magazine() {
                var width = $('.flipbook-viewport').width(),
                    height = $('.flipbook-viewport .content').height();

                $('.flipbook').turn({
                    width: width,
                    height: height,
                    autoCenter: true,
                    when: {
                        turned: function(e, page, view) {
                            var book = $(this);
                            $('#slider').slider('value', getViewNumber(book, page));
                            if (page!=1 && page!=book.turn('pages'))
                                $('.magazine2 .tabs').fadeIn(500);
                            book.turn('center');
                        },
                        end: function(e, pageObj) {
                            var book = $(this);
                            setTimeout(function() {
                                $('#slider').slider('value', getViewNumber(book));
                            }, 1);
                        }
                    }
                });
                $('.flipbook-viewport').zoom({
                    flipbook: $('.flipbook')
                });
                $('.flipbook-viewport').bind('zoom.tap', zoomTo);
                $(window).resize(function() {
                    resizeViewport();
                }).bind('orientationchange', function() {
                    resizeViewport();
                });
                resizeViewport();
                /*NOTE: Flipbook con teclas*/
                $(document).keydown(function(e){
                    var previous = 37, next = 39, esc = 27;
                    switch (e.keyCode) {
                        case previous:
                            // left arrow
                            $('.flipbook').turn('previous');
                            e.preventDefault();
                            break;
                        case next:
                            //right arrow
                            $('.flipbook').turn('next');
                            e.preventDefault();
                            break;
                        case esc:
                            $('.flipbook-viewport').zoom('zoomOut');	
                            e.preventDefault();
                            break;
                    }
                });
                /*NOTE: Slide con numero de paginas total*/
                $('#slider').slider('option', 'max', numberOfViews());
            }
            magazine();
            function zoomTo(event) { 
                $('.flipbook-viewport').toggleClass('zoomed');
                setTimeout(function() {
                    if ($('.flipbook-viewport').data().regionClicked) {
                        $('.flipbook-viewport').data().regionClicked = false;
                    } else {
                        if ($('.flipbook-viewport').zoom('value')==1) {
                            $('.flipbook-viewport').zoom('zoomIn', event);
                        } else {
                            $('.flipbook-viewport').zoom('zoomOut');
                        }
                    }
                }, 1);
            }
            function resizeViewport() {
                var width = $(window).width(),
                    height = $(window).height(),
                    options = $('.flipbook').turn('options');

                $('.flipbook-viewport').css({
                    width: width,
                    height: height
                }).zoom('resize');
            }
        }
    }
    /*NOTE: Termina Flipbook*/
    function popupLinks(){
        var $trigger = $('.popup');
        $trigger.on('click', function(e) {
            e.preventDefault();
            var width  = 575,
                height = 400,
                left   = ($window.width()  - width)  / 2,
                top    = ($window.height() - height) / 2,

                opts   = 'status=1' +
                ',width='  + width  +
                ',height=' + height +
                ',top='    + top    +
                ',left='   + left;

            window.open(this.href,'compartir', opts);
        });
    }
    function loader() {
        $('.loader').delay(500).fadeOut();
    }
    if(windowSize < 740) {
        $(window).scroll(function() {
            share();
        });
    }
    if(windowSize < 1025) {
        searchMobile();
        menuMobile();
    }
    if(windowSize > 1025) {
        hoverSearch();
        lightbox();
    }
    filter();
    gallery();
    volverArriba();
    input();
    mapButtons();
    flipbook();
    popupLinks();
    popupLinks();
    $(window).load(function() {
        loader();
    });
})(jQuery);