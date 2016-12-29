<?php
/*
Template Name: 2016
*/
?>

<?php include (TEMPLATEPATH . '/header_2016.php'); ?>
		
			<div id="content" role="main">

						<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
						
						<div id="home_big_content" style="background: url('<?php echo get_post_meta($post->ID, "fondo", true); ?>'); min-height: 775px; max-height: 800px; margin-bottom: 30px; ">
							<div id="navigation">
								<ul id="social_list_one">
									<li class="youtube_icon"><a target="_blank" href="https://vimeo.com/user21234240"></a></li>
									<li class="facebook_icon"><a target="_blank" href="https://www.facebook.com/BestiaFestival?fref=ts"></a></li>
									<li class="twitter_icon"><a target="_blank" href="https://twitter.com/bestiafestival"></a></li>
									<li class="instagram_icon"><a target="_blank" href="http://instagram.com/bestiafestival/"></a></li>
									<li class="soundcloud_icon"><a target="_blank" href="https://soundcloud.com/bestia-festival"></a></li>
								</ul>
							</div><!-- navigation -->
							
							<div class="logo_2015">
								<a href="#bestiaLogo" class="logo_secuence_2016"></a>
								<!-- <img src="<?php echo get_post_meta($post->ID, "logo", true); ?>"> -->
								<span style="font-size: 15px; margin-top: 45px;">BESTIA FESTIVAL 4TA EDICIÓN • 1-4 DE DICIEMBRE 2016 • CDMX / JOHN MEDESKI MÚSICO INVITADO</span>
							</div>

						</div><!-- home_big_content -->
						
						<span id="bestiaLogo"></span>
						
						<div id="persistent_header">
							<div class="container_header">
								<div id="side-nav" class="second_side-nav">
									<ul>
										<li class="vimeo"><a target="_blank" href="https://vimeo.com/user21234240"></a></li>
										<li class="facebook"><a target="_blank" href="https://www.facebook.com/BestiaFestival?fref=ts"></a></li>
										<li class="twitter"><a target="_blank" href="https://twitter.com/bestiafestival"></a></li>
										<li class="instagram"><a target="_blank" href="http://instagram.com/bestiafestival/"></a></li>
										<li class="soundcloud"><a target="_blank" href="https://soundcloud.com/bestia-festival"></a></li>
										
									</ul>
								</div><!-- end #side-nav -->
								<div id="menu_second" class="">
									<nav class="">
										<ul id="main-nav" class="clearfix">
											<li class="toogleEdiciones"><span id="clickEdiciones">Ediciones</span>
												<ul class="ediciones">
													<li><a href="http://bestiafestival.com/anteriores/2013.html" target="_blank">2013</a></li>
													<li><a href="http://bestiafestival.com/anteriores-2014/" target="_blank">2014</a></li>
													<li><a href="http://bestiafestival.com/anteriores-2015/" target="_blank">2015</a></li>
												</ul>
											</li>
											<!-- <li class="unactive"><a href="#noticias">Noticias</a></li> -->
											<li><a href="#bestia">Bestia</a></li>
											<li><a href="#programacion">Programación</a></li>
											<li><a href="#artistas">Artistas</a></li>
											<li><a href="#cine">Cine</a></li>
											<!-- <li><a href="#galeria">Galería</a></li> -->
											<li><a href="#asiste">Asiste</a></li>
											<li><a href="#patrocinadores">Patrocinadores & Aliados</a></li>
											<!-- <li class=""><a href="#merch">Merch</a></li> -->
											<!-- <li><a href="#prensa">Prensa</a></li> -->
											<li><a href="#bestiario">Bestiario</a></li>
											<!-- <li><a href="#bestiario">Bestiario</a></li> -->
											<li ><a href="#contacto">Contacto</a></li>
										</ul>
									</nav>
								</div><!-- end #menu -->
							</div>
						</div>
						
						<div class="box_content">
							<div class="description">
								<?php the_content(); ?>
							</div>
							<div class="calavera"></div>
						</div>

						<?php endwhile; ?>
						
			</div><!-- #content -->
			
		</div><!-- #primary -->