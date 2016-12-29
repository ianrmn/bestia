$(document).ready( function(){
	
	/* +++++++++++++++++++ persistent_header +++++++++++++++++++ */

	$("#persistent_header").sticky({topSpacing:0});
	

	/* +++++++++++++++++++ header ediciones +++++++++++++++++++ */
	$('.ediciones').hide();
	
	$('#clickEdiciones').click(function(){
		$('.ediciones').fadeToggle();
	});
	
	/* +++++++++++++++++++ see more +++++++++++++++++++ */
	$('.seeLess').hide();
	$('.moreText').hide();
	
	$('.seeMore').click(function(){
		$('.moreText').show(200);
		$(this).hide();
		$('.seeLess').show();
	});
	$('.seeLess').click(function(){
		$('.moreText').hide(200);
		$(this).hide();
		$('.seeMore').show();
	});
	
	/* +++++++++++++++++++ see more +++++++++++++++++++ */
	$('#showLess').hide();
	$('.showMoreText').hide();
	
	$('#showMore').click(function(){
		$('.showMoreText').show(200);
		$(this).hide();
		$('#showLess').show();
	});
	$('#showLess').click(function(){
		$('.showMoreText').hide(200);
		$(this).hide();
		$('#showMore').show();
	});
	
	
	/* +++++++++++++++++++ cine more less +++++++++++++++++++ */
	$('.cineHide').hide();
	$('.cineLess').hide();
	
	$('.cineMore').click(function(){
		$('.cineHide').show(200);
		$(this).hide();
		$('.cineLess').show();
	});
	$('.cineLess').click(function(){
		$('.cineHide').hide(200);
		$(this).hide();
		$('.cineMore').show();
	});
	
	
	/* +++++++++++++++++++ galeria 2015 +++++++++++++++++++ */
	
	var text = "_text";
	var photo = "_photo";
	var runner = $('.bladerunner');
	var zorn = $('.johnzorn');
	var aswell = $('.billlaswell');
	var lombardo = $('.davelombardo');
	var chiefs = $('.secretchiefs');
	var abraxas = $('.abraxas');
	var klezmerson = $('.klezmerson');
	var urselli = $('.urselli');
	var allArtist = $('.bladerunner, .johnzorn, .billlaswell, .davelombardo, .secretchiefs, .abraxas, .klezmerson, .urselli');
	var allPhotoArtist = $('.bladerunner_photo, .johnzorn_photo, .billlaswell_photo, .davelombardo_photo, .secretchiefs_photo, .abraxas_photo, .klezmerson_photo, .urselli_photo');
	var allTextArtist = $('.bladerunner_text, .johnzorn_text, .billlaswell_text, .davelombardo_text, .secretchiefs_text, .abraxas_text, .klezmerson_text, .urselli_text');
	var allArtistString = ".bladerunner, .johnzorn, .billlaswell, .davelombardo, .secretchiefs, .abraxas, .klezmerson, .urselli";
	
	var allArtistPhoto = allArtistString + photo;

	var totalWidth = 0;
	
	$('.thumb_container .box').each(function(){
		totalWidth += parseInt($(this).width());
	});
	$('.thumb_container').css('width', totalWidth);
	console.log(totalWidth);
	// $('.thumb_container .box').width();

	allArtist.css('opacity', '0.2');
	allTextArtist.hide();
	$('.bladerunner_text').show();
	
	allArtist.click(function(){
		allArtist.removeClass('active_class');
		$(this).addClass('active_class');
	});
	
	runner.click(function(){
		allPhotoArtist.hide();
		allTextArtist.hide();
		$('.bladerunner_photo').show();
		$('.bladerunner_text').show();
	});
	zorn.click(function(){
		allPhotoArtist.hide();
		allTextArtist.hide();
		$('.johnzorn_photo').show();
		$('.johnzorn_text').show();
	});
	aswell.click(function(){
		allPhotoArtist.hide();
		allTextArtist.hide();
		$('.billlaswell' + photo).show();
		$('.billlaswell' + text).show();
	});
	lombardo.click(function(){
		allPhotoArtist.hide();
		allTextArtist.hide();
		$('.davelombardo' + photo).show();
		$('.davelombardo' + text).show();
	});
	chiefs.click(function(){
		allPhotoArtist.hide();
		allTextArtist.hide();
		$('.secretchiefs' + photo).show();
		$('.secretchiefs' + text).show();
	});
	abraxas.click(function(){
		allPhotoArtist.hide();
		allTextArtist.hide();
		$('.abraxas' + photo).show();
		$('.abraxas' + text).show();
	});
	klezmerson.click(function(){
		allPhotoArtist.hide();
		allTextArtist.hide();
		$('.klezmerson' + photo).show();
		$('.klezmerson' + text).show();
	});
	urselli.click(function(){
		allPhotoArtist.hide();
		allTextArtist.hide();
		$('.urselli' + photo).show();
		$('.urselli' + text).show();
	});
	
	/* +++++++++++++++++++ galeria 2016 +++++++++++++++++++ */
	
	var text = "_text";
	var photo = "_photo";
	var medeski = $('.john_medeski');
	var ranaldo = $('.lee_ranaldo');
	var kenny = $('.kenny_g');
	var rivard = $('.mike_rivard');
	var godflesh = $('.godflesh');
	var simulacrum = $('.simulacrum');
	var cleric = $('.cleric');
	var allArtist = $('.john_medeski, .lee_ranaldo, .kenny_g, .mike_rivard, .godflesh, .simulacrum, .cleric');
	var allPhotoArtist = $('.john_medeski_photo, .lee_ranaldo_photo, .kenny_g_photo, .mike_rivard_photo, .godflesh_photo, .simulacrum_photo, .cleric_photo');
	var allTextArtist = $('.john_medeski_text, .lee_ranaldo_text, .kenny_g_text, .mike_rivard_text, .godflesh_text, .simulacrum_text, .cleric_text');
	var allArtistString = ".john_medeski, .lee_ranaldo, .kenny_g, .mike_rivard, .godflesh, .simulacrum, .cleric";
	
	var allArtistPhoto = allArtistString + photo;

	var totalWidth = 0;
	
	$('.thumb_container .box').each(function(){
		totalWidth += parseInt($(this).width());
	});
	$('.thumb_container').css('width', totalWidth);
	console.log(totalWidth);
	// $('.thumb_container .box').width();

	allArtist.css('opacity', '0.2');
	allTextArtist.hide();
	$('.john_medeski_text').show();
	
	allArtist.click(function(){
		allArtist.removeClass('active_class');
		$(this).addClass('active_class');
	});
	
	medeski.click(function(){
		allPhotoArtist.hide();
		allTextArtist.hide();
		$('.john_medeski_photo').show();
		$('.john_medeski_text').show();
	});
	ranaldo.click(function(){
		allPhotoArtist.hide();
		allTextArtist.hide();
		$('.lee_ranaldo_photo').show();
		$('.lee_ranaldo_text').show();
	});
	kenny.click(function(){
		allPhotoArtist.hide();
		allTextArtist.hide();
		$('.kenny_g' + photo).show();
		$('.kenny_g' + text).show();
	});
	rivard.click(function(){
		allPhotoArtist.hide();
		allTextArtist.hide();
		$('.rivard' + photo).show();
		$('.rivard' + text).show();
	});
	godflesh.click(function(){
		allPhotoArtist.hide();
		allTextArtist.hide();
		$('.godflesh' + photo).show();
		$('.godflesh' + text).show();
	});
	simulacrum.click(function(){
		allPhotoArtist.hide();
		allTextArtist.hide();
		$('.simulacrum' + photo).show();
		$('.simulacrum' + text).show();
	});
	cleric.click(function(){
		allPhotoArtist.hide();
		allTextArtist.hide();
		$('.cleric' + photo).show();
		$('.cleric' + text).show();
	});
	
	

	$('.right_arrow').click(function(){
		if (totalWidth >= 700){
			//$('.thumb_container').css('marginLeft', '-422px');
			$('.thumb_container').animate({
				marginLeft: -422
			});
			
		} else {
			$(this).hide();
		}
	});
	$('.left_arrow').click(function(){
		$('.thumb_container').animate({
			marginLeft: 0
		});
	});

	
	/* +++++++++++++++++++ gallery slider +++++++++++++++++++ 

	$('.gallery_slider').bxSlider({
	  mode: 'fade',
	  adaptiveHeight: true,
	  captions: true
	});
	
	*/

	/* +++++++++++++++++++ smooth scrolling +++++++++++++++++++ */
	$(function() {
	  $('a[href*=#]:not([href=#])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html,body').animate({
	          scrollTop: target.offset().top
	        }, 1000);
	        return false;
	      }
	    }
	  });
	});


	var gallWidth = 0;
	$('#slides ul li').each(function(){
		gallWidth += parseInt($(this).width());
	});
	$('#slides ul').css('width', gallWidth);
	console.log(gallWidth);

	//rotation speed and timer
	var speed = 5000;
	var run = setInterval('rotate()', speed);	
	
	//grab the width and calculate left value
	var item_width = $('#slides li').outerWidth(); 
	var left_value = item_width * (-1); 
        
    //move the last item before first item, just in case user click prev button
	$('#slides li:first').before($('#slides li:last'));
	
	//set the default item to the correct position 
	$('#slides ul').css({'left' : left_value});

    //if user clicked on prev button
	$('#prev').click(function() {

		//get the right position            
		var left_indent = parseInt($('#slides ul').css('left')) + item_width;

		//slide the item            
		$('#slides ul').animate({'left' : left_indent}, 200,function(){    

            //move the last item and put it as first item            	
			$('#slides li:first').before($('#slides li:last'));           

			//set the default item to correct position
			$('#slides ul').css({'left' : left_value});
		
		});

		//cancel the link behavior            
		return false;
            
	});

 
    //if user clicked on next button
	$('#next').click(function() {
		
		//get the right position
		var left_indent = parseInt($('#slides ul').css('left')) - item_width;
		
		//slide the item
		$('#slides ul').animate({'left' : left_indent}, 200, function () {
            
            //move the first item and put it as last item
			$('#slides li:last').after($('#slides li:first'));                 	
			
			//set the default item to correct position
			$('#slides ul').css({'left' : left_value});
		
		});
		         
		//cancel the link behavior
		return false;
		
	});        
	
	//if mouse hover, pause the auto rotation, otherwise rotate it
	$('#slides').hover(
		
		function() {
			clearInterval(run);
		}, 
		function() {
			run = setInterval('rotate()', speed);	
		}
	);
        	
});
//a simple function to click next link
//a timer will call this function, and the rotation will begin :)  
function rotate() {
	$('#next').click();
}