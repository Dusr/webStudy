//Notificaciones
$(document).ready(function () {
    $('.notificacion').hide();
    $(".notificaciones").click(function () {
        $(".notificacion").slideToggle("slow");
    });
});

/* Desplegable FAQ*/
desplegableFaq = function () {

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
};

/*Fin boton de registro */
menuLogin = function () {
    $(".menuLogin").hover(function () {
        $(".menuLogin ul li").show();
    });
};


/*funcion del despleglable del Acceso-login*/
desplegableAccesoLogin = function () {
    $('.menuLogin').click(function (e) {
        $(".header").find('.dropdown-menu').slideToggle("slow");
    });
};

//$(window).scroll(function() {    
//    posicionarScroll();
//});
//
//function posicionarScroll() {
//    var altura_del_header = $('#contenedor_header').outerHeight(true);
//    var altura_del_menu = $('.menu_principal').outerHeight(true);
//    var altura_del_breamcrumb = $('.breadcrumb_title').outerHeight(true);
//    var altura_del_menu_secun = $('.menu_secundario').outerHeight(true);
//    var altura_texto_curso= $('.headerMod').outerHeight(true);
//    var altura_bloq_izq=$('.bloqueIzq').outerHeight(true);
//    var altura_total=altura_del_header+altura_del_menu+ altura_del_breamcrumb + altura_del_menu_secun +altura_texto_curso;
//    var total_bloq_izq= altura_bloq_izq;
//   
//
//    if ($(window).scrollTop() <= altura_total)
//    {
//        $('#moduloScroll').removeClass('fixed');
//    }    
//    else if ($(window).scrollTop() >= altura_total && $(window).scrollTop() <= (total_bloq_izq)){
//       
//        $('#moduloScroll').removeClass('no_fixed').addClass('fixed');
//        //$('.bloqueIzq').css('margin-top', 10 + 'px');
//    }
//    else
//    {
//       $('#moduloScroll').removeClass('fixed').addClass('no_fixed');
//       //$('#moduloScroll').toggleClass('fixed no_fixed');
//       //$('#moduloScroll').addClass('no_fixed');
//        //$('.bloqueIzq').css('margin-top', '0');
//    }
//    
// };
//
//$(function () {
////detectamos el scroll de la ventana
//    $(window).on('scroll', function () {
//        //cuando el usuario hace scroll en la ventana movemos la capa flotante
//        //lo hacemos con una pequena animacion
//        //var valorY=$(".bloqueDcha").css("margin-top");
//                
//        var valorY=$(window).scrollTop();
//        
//            $('.bloqueDcha').stop().animate({
//                //tomamos la posicion actual del scroll vertical de la ventana
//                //con scrollTop y le sumamos 80 pixeles
//                marginTop: parseInt(valorY) + 'px'
//            }, 'slow');
//        });
//    
//});


//$(function () {
////detectamos el scroll de la ventana
//    $(window).on('scroll', function () {
//        //cuando el usuario hace scroll en la ventana movemos la capa flotante
//        //lo hacemos con una pequena animacion
//        //var valorY=$(".bloqueDcha").css("margin-top");
//        if(parseInt($(".bloqueDcha").scrollTop()) < 50){
//            $(".bloqueDcha").addClass('fixed');
//        }        
//        
//        var valorY=$(window).scrollTop();
//            $('.bloqueDcha').stop().animate({
//                //tomamos la posicion actual del scroll vertical de la ventana
//                //con scrollTop y le sumamos 80 pixeles
//                marginTop: parseInt(valorY) + 'px'
//            }, 'slow');
//        });
//    
//});




/* Function tabs */
pestannasTabsPerfil = function () {
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
};


pestannasTabsModulos = function () {
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

};

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

$(function () {
    desplegableAccesoLogin();

    desplegableFaq();
    pestannasTabsPerfil();
    pestannasTabsModulos();
    desplazarScroll();
});

$(window).load(function () {

});
// Notificaciones -- Desplegable de Mensajes

   