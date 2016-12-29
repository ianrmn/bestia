<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php print_title(); ?></title>
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="cleartype" content="on">
		<link rel="shortcyt icon" href="<?php echo THEMEPATH; ?>/images/favicon.ico">
		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<!-- jQuery -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		
		<!-- bxslider -->
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bxslider/jquery.bxslider.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/js/bxslider/jquery.bxslider.css">

		
		<?php wp_head(); ?>
		
		<script>
			$(document).ready( function(){
				$('.ediciones').hide();
				
				$('#clickEdiciones').click(function(){
					$('.ediciones').fadeToggle();
				});
				$('.gallery_slider').bxSlider({
				  mode: 'fade',
				  adaptiveHeight: true,
				  captions: true
				});
			});
		</script>
		
	</head>
	<body>
		<!-- NOTICIAS -->

		<?php /* get_template_part( 'templates/main', 'noticias' ) */ ?>

		<!-- //NOTICIAS -->
		<div class="wrapper">
			<header class="clearfix">
				<div id="side-nav">
					<ul>
						<li class="vimeo"><a target="_blank" href="https://vimeo.com/user21234240"></a></li>
						<li class="facebook"><a target="_blank" href="https://www.facebook.com/BestiaFestival?fref=ts"></a></li>
						<li class="twitter"><a target="_blank" href="https://twitter.com/bestiafestival"></a></li>
						<li class="instagram"><a target="_blank" href="http://instagram.com/bestiafestival/"></a></li>
						<li class="soundcloud"><a target="_blank" href="https://soundcloud.com/bestia-festival"></a></li>
						
					</ul>
				</div><!-- end #side-nav -->
				<div id="menu" class="clearfix">
					<nav class="clearfix">
						<ul class="editions_header">
							<li class="toogleEdiciones">
								<span id="clickEdiciones">Ediciones</span>
								<ul class="ediciones">
									<li><a href="http://bestiafestival.com/anteriores/2013.html">2013</a></li>
									<li><a href="http://bestiafestival.com/anteriores-2014/" target="_blank">2014</a></li>
									<li><a href="http://bestiafestival.com/anteriores-2015/">2015</a></li>
								</ul>
							</li>
						</ul>
						
						<ul id="main-nav" class="clearfix">
							<!-- <li class="unactive"><a href="#noticias">Noticias</a></li> -->
							<li></li>
							
							<!-- 
							<li><a href="#bestia">Bestia</a></li>
							<li><a href="#programacion">Programación</a></li>
							<li><a href="#asiste">Asiste</a></li>
							<li><a href="#galeria">Galería</a></li>
							<li><a href="#patrocinadores">Patrocinadores & Aliados</a></li>
							<li class=""><a href="#merch">Merch</a></li>
							<li><a href="#prensa">Prensa</a></li>
							<li ><a href="#contacto">Contacto</a></li>
							<li><a href="#bestiario">Bestiario</a></li>
							-->
						</ul>
					</nav>
				</div><!-- end #menu -->
			</header>
			<div class="content">