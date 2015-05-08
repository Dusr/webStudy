// funcion para desplegar el submenu de Nuestros cursos

// function desplegarMenu(){

// 	var ulOculto= $("#contenedor_menu_principal ul li ul");

// 	$(ulOculto).addClass("active-on");

// };


// function desplegarMenu(){
// 	$( "#contenedor_menu_principal ul li a" ).mouseover(function() {
// 	$(this).next().css( "display", "block" );
// 	});
// }

// function cerrarMenu(){
// 	$( "#contenedor_menu_principal ul li a" ).mouseout(function() {
// 	$(this).next().css( "display", "block" );
// 	});
// }




// $(function(){
// 	desplegarMenu();
// 	cerrarMenu();
// });
/* Desplegable FAQ*/
$(document).ready(function () {
		
		$('.faqs dd').hide();
		$('.faqs dt').hover(function(){
			$(this).addClass('hover')},function(){
				$(this).removeClass('hover')}).click(function(){
					$(this).next().slideToggle('fast');
		}); 
/* Fin desplegable FAQ */

/* Rotacion de la flecha en el FAQ */
    var rotation = 0;
    
   	$('.pregunta').click(function(){
		rotation += 180;
		$(this).find('.flecha').rotate(rotation);
	});
	
    jQuery.fn.rotate = function(degrees) {
        $(this).css({'-webkit-transform' : 'rotate('+ degrees +'deg)',
                 '-moz-transform' : 'rotate('+ degrees +'deg)',
                 '-ms-transform' : 'rotate('+ degrees +'deg)',
                 'transform' : 'rotate('+ degrees +'deg)'});
        return $(this);
    };

/* Fin rotacion */

/*Boton de registro */

      /*  $('.texto_boton').click(function () {
        	$("#formRegister").css('visibility', 'visible');;
            $('#formRegister').animate({
            height: "toggle",
            opacity: "toggle"
        }, "slow");
    }); */

$( ".texto_boton" ).click(function() {
  $( "#formRegister" ).show(600) 
});

/*Fin boton de registro */

});

/* Function tabs */

$(document).ready(function() {
                    $("#tab1").show();
		    $("#tab2").hide();
                    $("#tab3").hide();
                    $("#tabs li:first").attr("id","current");
                    $("#content div:first").fadeIn();
 
		    $('#tabs a').click(function(e) {
		        e.preventDefault();
		        $("#tab1").hide();
		        $("#tab2").hide();
                        $("#tab3").hide();
		        $("#tabs li").attr("id","");
		        $(this).parent().attr("id","current");
		        $('#' + $(this).attr('name')).fadeIn();
		    });
		})();