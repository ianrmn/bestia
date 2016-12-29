(function($){


	$(document).ready(function(){

		/// SCROLL ARCA

		var offset = $('#portada').offset();
		var top = offset.top;


		$(document).on('scroll', function(){
			offset = $('#portada').offset();
			top = offset.top
			console.log(top);
			if(top > 140 ){
				$('.arca').fadeOut();
			} else if (top < 130 ) {
				$('.arca').fadeIn();
			}
		});

		if(top > 140 ){
			$('.arca').fadeOut();
		} else if (top < 130 ) {
				$('.arca').fadeIn();
			}

		// $(window).scroll(function(){
		// 	$('.arca').fadeOut('slow');
		// });

		/// Secciones Full Screen

		var altoVentana = $(window).height();
		$('.pantalla').css('minHeight', altoVentana + 'px');


		/// LOGO A LA MITAD DE LA PANTALLA

		var altoPortada = $('#portada').height();
		var mediaPortada = altoPortada / 2;
		var marginTopLogo = mediaPortada - 171;

		$('#logo').css('marginTop', marginTopLogo + 'px' );

		$('.unactive').click(function(e){
			e.preventDefault();
		});

		var largoNoticias = $("#noticias .scrollhor ul li").length;
		console.log(largoNoticias * 170+ 'px');

		$('#noticias .scrollhor ul').css('width', largoNoticias * 170+ 'px');

		var largoPrensa= $("#prensa .scrollhor ul li").length;
		console.log(largoPrensa * 170+ 'px');

		$('#prensa .scrollhor ul').css('width', largoPrensa * 170+ 'px');


		// HOVER GALERÍA

		$('.post-foto').mouseover(function(){
			$(this).find('.info-post').show();
		});

		$('.post-foto').mouseout(function(){
			$(this).find('.info-post').hide();
		});

		// HOVER NOTICIAS // PRENSA

		$('.noticia').mouseover(function(){
			$(this).find('.info-post').show();
		});

		$('.noticia').mouseout(function(){
			$(this).find('.info-post').hide();
		});


		$("#main-nav li a").click(function(event){

			if($(this).hasClass('active')) {
				$(this).removeClass('active');
			} else  {
				$('.active').removeClass('active');
				$(this).addClass('active');
			}

			event.preventDefault();
			var id = $(this).attr('href');
			console.log(id);
		    $('html, body').animate({
		        scrollTop: $(id).offset().top
		    }, 1000);
		});

	});

})(jQuery);