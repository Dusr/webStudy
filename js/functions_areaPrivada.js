//Notificaciones
$(document).ready(function () {
    $('.notificacion').hide();
    $(".notificaciones").click(function () {
        $(".notificacion").slideToggle("slow");
    });
});

//scroll
$(document).scroll(function() {
    var element = $('.bloqueDcha'),
        originalY = element.offset().top;
        
    var topMargin = 20;
    element.css('position', 'relative');
   
    $(window).on('scroll', function(event) {
       var scrollTop = $(window).scrollTop();
        
       element.stop().animate({
            top: scrollTop <= originalY ? 0 : scrollTop - originalY + topMargin 
        }, 300);
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

function nuevoAjax()
{ 
	/* Crea el objeto AJAX. Esta funcion es generica para cualquier utilidad de este tipo, por
	lo que se puede copiar tal como esta aqui */
	var xmlhttp=false; 
	try 
	{ 
		// Creacion del objeto AJAX para navegadores no IE
		xmlhttp=new ActiveXObject("Msxml2.XMLHTTP"); 
	}
	catch(e)
	{ 
		try
		{ 
			// Creacion del objeto AJAX para IE 
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP"); 
		} 
		catch(E) { xmlhttp=false; }
	}
	if (!xmlhttp && typeof XMLHttpRequest!='undefined') { xmlhttp=new XMLHttpRequest(); } 

	return xmlhttp; 
} 

function eliminaEspacios(cadena)
{
	// Funcion equivalente a trim en PHP
	var x=0, y=cadena.length-1;
	while(cadena.charAt(x)==" ") x++;	
	while(cadena.charAt(y)==" ") y--;	
	return cadena.substr(x, y-x+1);
}

function cargaDatos(idDiv, idInput)
{
	var valorInput=document.getElementById(idInput).value;
	var divError=document.getElementById("error");
	
	// Elimino todos los espacios en blanco al principio y al final de la cadena
	valorInput=eliminaEspacios(valorInput);
	
	// Valido con una expresion regular el contenido de lo que el usuario ingresa
	var reg=/(^[a-zA-Z0-9._áéíóúñ¡!¿? -]{1,40}$)/;
	if(!reg.test(valorInput)) 
	{ 
		// Si hay error muestro el div que contiene el error
		divError.innerHTML="El texto ingresado no es v&aacute;lido"
		divError.style.display="block";
	}
	else
	{
		// Si no hay error oculto el div (por si se mostraba)
		divError.style.display="none";
		mostrandoInput=false;
		document.getElementById(idDiv).innerHTML=valorInput;
		
		// Creo objeto AJAX y envio peticion al servidor
		var ajax=nuevoAjax();
		ajax.open("GET", "ingreso_sin_recargar_proceso.php?dato="+valorInput+"&actualizar="+idInput, true);
		ajax.send(null);
	}
}

var mostrandoInput=false;

function creaInput(idDiv, idInput)
{
	/* Funcion encargada de cambiar el texto comun de la fila por un campo input que conserve
	el valor que tenia ese campo */
	var divError=document.getElementById("error");
	/* Solo mostramos el input si ya no esta siendo mostrado y si ademas el div del error no esta en pantalla */
	if(!mostrandoInput && divError.style.display!="block")
	{
		// Obtenemos el div contenedor del futuro input
		var divContenedor=document.getElementById(idDiv);
		// Creamos el input
		divContenedor.innerHTML="<input type='text' onBlur='cargaDatos(\""+idDiv+"\", \""+idInput+"\")' value='"+divContenedor.innerHTML+"' id='"+idInput+"' maxlength='40'>";
		// Colocamos el cursor en el input creado
		document.getElementById(idInput).focus();
		// Establecemos a true la variable para especificar que hay un input en pantalla y no se debe crear otro hasta que este se oculte
		mostrandoInput=true;
	}
}
   