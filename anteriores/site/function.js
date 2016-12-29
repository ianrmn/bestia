


$(document).ready(function() {
	var bro = $.browser.msie;

	var windowWidth = $(window).width();
	var bro_ver = $.browser.version
	var ua = $.browser;


	//console.log('bro: ' + bro);
	//console.log('bro_ver: ' + bro_ver);
	if ( bro === true && bro_ver < 9 ){
	
	} else {

		var windowWidth = $(window).width();
		$("object").width(windowWidth);	
		$("object").remove();

		var isiDevice = /iphone|ipod/i.test(navigator.userAgent.toLowerCase());
		var isiPad = /ipad/i.test(navigator.userAgent.toLowerCase());
			
		if (isiDevice || isiPad) {
			} else {
		$('#wrapper').videoBG({
			position:"fixed",
			zIndex:0,
			mp4:'media/bestia_festival.mp4',
			ogv:'media/bestia_festival.ogv',
			webm:'media/bestia_festival.webm',
			poster:'media/poster.png',
			opacity:1,
			fullscreen:true,

			});
		}
		
	}


if ( ua.mozilla && ua.version.slice(0,3) >= "1.9" ) {

	$("video").attr({src: "http://bestiafestival.com/media/bestia_festival.ogv"});
    
  } else {  $("video").attr({src: "media/bestia_festival.mp4"});}




		// Smart Resize --------------------------
(function($,sr){
 
// debouncing function from John Hann
// http://unscriptable.com/index.php/2009/03/20/debouncing-javascript-methods/
var debounce = function (func, threshold, execAsap) {
var timeout;

return function debounced () {
var obj = this, args = arguments;
function delayed () {
if (!execAsap)
func.apply(obj, args);
timeout = null; 
};

if (timeout)
clearTimeout(timeout);
else if (execAsap)
func.apply(obj, args);

timeout = setTimeout(delayed, threshold || 350); 
};
}

// smartresize 
jQuery.fn[sr] = function(fn){  return fn ? this.bind('resize', debounce(fn)) : this.trigger(sr); };

})(jQuery,'smartresize');

$(window).smartresize(function() {

	var windowWidth = $(window).width();
	var windowHeight = $(window).height();
	var bro = $.browser.msie;
	var bro_ver = $.browser.version


	if ( bro === true && bro_ver < 9 ){
	
	} else {

		$("object").width(windowWidth);	
		$("object").remove();

		var isiDevice = /iphone|ipod/i.test(navigator.userAgent.toLowerCase());
		var isiPad = /ipad/i.test(navigator.userAgent.toLowerCase());
			
		if (isiDevice || isiPad) {
			} else {
	
		
		}
		
	}

	if ( bro === true && bro_ver < 9 ){
	
	} else {

	if (windowWidth >=1024) {


		
	
	} else {

			$('.videoBG').width(windowWidth);
			$('.videoBG_wrapper').width(windowWidth);
			$('#wrapper').width(windowWidth);
			$('video').css('top',0);
			$('video').css('Left',0)
			$('.videoBG').height(windowHeight);
			$('.videoBG_wrapper').height(windowHeight);
			$('#wrapper').height(windowHeight);

	}
		}

	
		
  
	});
});