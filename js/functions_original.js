/* Desplegable FAQ*/
$(document).ready(function () {

    $('.faqs dd').hide();
    $('#cambiarContrasena').hide();
    $('.faqs dt').click(function () {
        $(this).next().slideToggle('fast');
        $(this).next().$('dd').slideToggle('fast');
    });



    /* Rotacion de la flecha en el FAQ */
    var rotation = 0;

    $('.pregunta').click(function () {
        rotation += 180;
        $(this).find('.flecha').rotate(rotation);
    });

    jQuery.fn.rotate = function (degrees) {
        $(this).css({'-webkit-transform': 'rotate(' + degrees + 'deg)',
            '-moz-transform': 'rotate(' + degrees + 'deg)',
            '-ms-transform': 'rotate(' + degrees + 'deg)',
            'transform': 'rotate(' + degrees + 'deg)'});
        return $(this);
    };

    /* Fin rotacion */

    /*Boton de registro */



    $(".texto_boton").click(function () {
        $("#formRegister").show();
    });

    /*Fin boton de registro */

    $(".menuLogin").hover(function () {
        $(".menuLogin ul li").show();
    });



    /*funcion del despleglable del Acceso-login*/

    $('.menuLogin').click(function (e) {
        $(".header").find('.dropdown-menu').slideToggle("slow");
    });

    /*Funcion desplazamiento de descripcion del curso*/

//    $(window).scroll(function ()
//    {
//        if ($(this).scrollTop() > 250) {
//            $('.bloqueDcha').addClass("fixed").fadeIn();
//            $('.contentd').addClass("margen").fadeIn();
//        }
//        else {
//            $('.bloqueDcha').removeClass("fixed");
//            $('.contentd').removeClass("margen");
//        }
//    });




    /* Function tabs */


//$(document).ready(function () {
    $("#tab1").show();
    $("#tab2").hide();
    $("#tab3").hide();
    $("#tabs li:first").attr("id", "current");
    $("#content div:first").fadeIn();

    $('#tabs a').click(function (e) {
        e.preventDefault();
        $("#tab1").hide();
        $("#tab2").hide();
        $("#tab3").hide();
        $("#tabs li").attr("id", "");
        $(this).parent().attr("id", "current");
        $('#' + $(this).attr('name')).fadeIn();
    });


    /* Tabs Modulos */

    $("#tab1d").show();
    $("#tab2d").hide();
    $("#tab3d").hide();
    $("#tab4d").hide();
    $("#tab5d").hide();
    $("#tab6d").hide();
    $("#tab7d").hide();
    $("#tab8d").hide();
    $("#tab9d").hide();
    $("#tab10d").hide();

    $(".modulo input:first").parent().attr("id", "currentd");

    $("#contentd div:first").fadeIn();

    $('.modulo input').click(function (e) {
        e.preventDefault();
        $("#tab1d").hide();
        $("#tab2d").hide();
        $("#tab3d").hide();
        $("#tab4d").hide();
        $("#tab5d").hide();
        $("#tab6d").hide();
        $("#tab7d").hide();
        $("#tab8d").hide();
        $("#tab9d").hide();
        $("#tab10d").hide();

        $(".modulo input").parent().attr("id", "");
        $(this).parent().attr("id", "currentd");
        $('#' + $(this).attr('name')).fadeIn();
    });

})();




/* Validar correo */

function validarEmail(e) {
    expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (!expr.test(e.value)) {
        e.setAttribute('placeholder', 'Ej. de correo: mariaperez@hotmail.com');
        e.value = '';
    }
}

/* validar longitud contraseña */


function validarContrasena() {
    var pass = document.getElementById('password');
    var rpass = document.getElementById('rpassword');

    if (pass.value.length < 6) {
        pass.value = '';
        pass.setAttribute('placeholder', 'La contraseña debe tener minimo 6 caracteres.');
    }



    if (rpass.value.length < 6) {
        rpass.value = '';
        rpass.setAttribute('placeholder', 'La contraseña debe tener minimo 6 caracteres.');
    }

}

