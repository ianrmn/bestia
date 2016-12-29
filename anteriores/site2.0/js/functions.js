$(document).ready(function(){

	/// Secciones Full Screen

	var altoVentana = $(window).height();
	$('.pantalla').css('minHeight', altoVentana + 'px');


	/// LOGO A LA MITAD DE LA PANTALLA

	var altoPortada = $('#portada').height();
	var mediaPortada = altoPortada / 2;
	var marginTopLogo = mediaPortada - 171;

	$('#logo').css('marginTop', marginTopLogo + 'px' );

	/// LOGO ROJO LUEGO NEGRO

	// function logoRojo(){

	// 	if( $('h1').hasClass('negro') ) {

	// 		$('.negro').removeClass('negro').addClass('rojo');

	// 	} else if ( $('h1').hasClass('rojo') ) {

	// 		$('.rojo').removeClass('rojo').addClass('negro');
	// 	}
	// }

	// setInterval(logoRojo(), 100);

	$('.unactive').click(function(e){
		e.preventDefault();
	});

});