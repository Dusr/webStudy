/* Desplegable FAQ*/
desplegableFaq = function(){

    $('.faqs dd').hide();
    $('#cambiarContrasena').hide();
    $('.faqs dt').click(function () {
        $(this).next().slideToggle('fast');
       // $(this).next().$('.faqs dd').slideToggle('fast');
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

    
};

    
/*Boton de registro */

botonRegistro = function(){
    $(".texto_boton").click(function () {
        $("#formRegister").show();
    });
};
    /*Fin boton de registro */
menuLogin = function(){
    $(".menuLogin").hover(function () {
        $(".menuLogin ul li").show();
    });
};

/*Asesoramiento*/
pestannasTabsAsesoramiento = function(){
        $("#tab1").hide();
        $("#tab2").hide();
        $("#tabs li:first").attr("id", "current");
        $("#content div:first").fadeIn();

        $('#tabs a').click(function (e) {
            e.preventDefault();
            $("#tab1").hide();
            $("#tab2").hide();
            $("#tabs li").attr("id", "");
            $(this).parent().attr("id", "current");
            $('#' + $(this).attr('title')).fadeIn();
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

    /*funcion del despleglable del Acceso-login*/
desplegableAccesoLogin = function(){
    $('.menuLogin').click(function (e) {
        $(".header").find('.dropdown-menu').slideToggle("slow");
    });
};

/* Slider */

var timeoutSlider;
var diapositivaActual = 0;

function initSlider() {
    $('.slider > ul > li').css('display', 'none');
    $('.slider > ul > li:eq(0)').css('display', 'block').css('position','relative');
    $('.slider .slider_botones .pause').addClass('active');
    $('.slider .slider_botones .slider_nav.sn1').addClass('active');

    $(".slider .slider_botones .slider_nav").on("click", function()
    {
        if (isNaN(timeoutSlider) == false)
            clearTimeout(timeoutSlider) ;
        botonSelected = $(this).attr('class').replace("slider_nav","").replace("active","").trim();
        pasSlide(botonSelected);
    });

    $(".slider .slider_botones .pause").on("click", function()
    {
        $(".slider .slider_botones .pause").removeClass('active');
        $(".slider .slider_botones .play").addClass('active').focus();
        clearTimeout(timeoutSlider);
        return false;
    }) ;

    $(".slider .slider_botones .play").on("click", function()
    {
        $(".slider .slider_botones .play").removeClass('active');
        $(".slider .slider_botones .pause").addClass('active').focus();
        setTimeout( 'pasSlide(false)' , 5000);
        return false;
    }) ;

    if (timeoutSlider == undefined && $('.slider .slider_botones .pause').hasClass('active')) {
        timeoutSlider = setTimeout( 'pasSlide(false)' , 5000) ;
    }
}




function pasSlide(slideNumber) {

    if (isNaN(timeoutSlider) == false)
        clearTimeout(timeoutSlider) ;

    if (slideNumber == false)
    {
        var numeroDiapositivas = $(".slider > ul > li").length ;
        var diapositivaSiguiente = diapositivaActual + 1 ;

        if (diapositivaSiguiente == numeroDiapositivas)
            diapositivaSiguiente = 0 ;
    }
    else
    {
        diapositivaSiguiente = parseInt( slideNumber.replace("sn","") ) - 1 ;
    }

    $(".slider > ul > li").eq(diapositivaActual).fadeOut(400, function(){
        $(".slider > ul > li").css('position','absolute');
        $(".slider > ul > li").eq(diapositivaActual).css('position','relative');
    }) ;
    $(".slider > ul > li").eq(diapositivaSiguiente).fadeIn(400, function(){

    }) ;

    if ( $(".slider .slider_botones .pause").hasClass("active") ) {
        timeoutSlider = setTimeout( 'pasSlide(false)' , 5000) ;
    }

    $('.slider .slider_botones .slider_nav').removeClass('active');
    $('.slider .slider_botones .slider_nav').eq(diapositivaSiguiente).addClass('active');


    diapositivaActual = diapositivaSiguiente ;

    $(".slider").attr("aria-valuenow",(diapositivaActual + 1) ) ;
}


$(function(){
   
   botonRegistro();
   desplegableFaq();
   pestannasTabsAsesoramiento();
   desplegableAccesoLogin();
   
});

$(window).load(function(){
   
})
