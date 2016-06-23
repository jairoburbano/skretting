(function ( $ ) {

    $.validator.addMethod("customemail", 
                          function(value, element) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(value);
    }, 
                          "Tu correo no es válido"
                         );
    /**
     * Validación del formulario usando jQuery Validate
     */
    function validacionFormulario() {
        $('<div class="message"></div>').appendTo('.formulario-contacto');
        $('.contacto-form').validate({
            onkeyup: function (element, event) {
                if (event.which === 9 && this.elementValue(element) === "") {
                    return;
                } else {
                    this.element(element);
                }
            },
            onfocusin: function (element, event) {
                if (event.which === 9 && this.elementValue(element) === "") {
                    return;
                } else {
                    this.element(element);
                }
            },
            rules: {
                nickname: {
                    required:true,
                    minlength:3
                },
                email: {
                    required: {
                        depends: function(){
                            $(this).val($.trim($(this).val()));
                            return true;
                        } 
                    },
                    customemail: true
                },
                mensaje: {
                    required:true,
                    minlength:8
                }
            },
            messages: {
                nickname: {
                    required: "Ingresa tu nombre",
                    minlength: "Ingresa al menos 3 caracteres."
                },
                email: {
                    required: "Ingresa un correo válido",
                    email: "Correo inválido"
                },
                mensaje: {
                    required: "Ingresar un mensaje/consulta",
                    minlength: "Ingresa al menos 8 caracteres."
                }
            },
            errorElement: 'p',
            errorClass: 'error',
            validClass: 'form__valid',
            highlight: function (element, errorClass, validClass) {
                $(element).parents('.group').addClass(errorClass).removeClass(validClass);
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).parents('.group').removeClass(errorClass).addClass(validClass);
            },
            submitHandler: function (form) {
                $('.formulario-contacto .loading').css({opacity: 0}).animate({opacity: 1});
                $('.contacto-form-submit').text('Enviando...');
                $('.contacto-form-submit').prop('disabled', true);
                var form = $('.contacto-form'),
                    formURL = form.attr("action");

                var formData = new FormData($('.contacto-form')[0]);
                formData.append("action","contacto");

                $.ajax( {
                    url: ajax_contacto.ajaxurl,
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    fail : function(result) {
                        $('.contacto-form .message').html('<div class="message__container error"><p class="warning-msg">Error inesperado, intentalo mas tarde.</p><button class="btn btn--white js-close-form-message">Volver a intentar nuevamente</button></div>').removeClass('hidden');
                    },
                    success : function(result) {
                        var obj = result,
                            msgExito = $('.contacto-form').attr('data-mensaje');
                        if (obj.exito === 'exito') {
                            $('.formulario-contacto .loading').fadeOut();
                            $('.formulario-contacto .message').html('<p class="success-msg">' + msgExito + '</p>').slideDown().delay(1000).slideUp();
                            $('.js-close-form-message').on('click', function() {
                                $('.formulario-contacto .message').hide();
                            });
                            $('.contacto-form').find('.form__valid').removeClass('form__valid');
                            $('.contacto-form')[0].reset();
                            $('.contacto-form-submit').prop('disabled', false);
                            $('.contacto-form-submit').text('Enviar');
                        } else {
                            $('.contacto-form .message').html('<p class="warning-msg">'+obj.message+'</p>').removeClass('hidden');
                            $('.contacto-form .message').addClass('msg-error');
                        }
                    }
                } );
                return false;
            }
        });
    }
    validacionFormulario();
})(jQuery);