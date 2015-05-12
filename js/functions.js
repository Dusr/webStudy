
/* Desplegable FAQ*/
$(document).ready(function () {
		
		$('.faqs dd').hide();
    $('#cambiarContrasena').hide();
    $('.faqs dt').click(function (){
                            $(this).next().slideToggle('fast');
                            $(this).next().$('dd').slideToggle('fast');
                        });

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
                
              

 

 