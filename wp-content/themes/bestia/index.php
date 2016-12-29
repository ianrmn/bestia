<?php get_header(); ?>
				<div id="portada" class="pantalla">
					<h1 class="negro" id="logo">BESTIA Festival</h1>

					<?php
						$args = array(
								'post_type' => 'banners',
								'numberposts' => 1,
								'orderby' => 'rand'
							);

						$banners = get_posts($args);
						foreach ($banners as $post):setup_postdata($post);
					?>
					<div class="banner">
					<?php the_content(); ?>
					</div>
				<?php endforeach; wp_reset_query(); ?>
				</div><!-- end #portada .pantalla -->
				<div id="bestia" class="pantalla">

					<!-- PAGE BESTIA -->

					<?php $bestia = get_page_by_title('bestia'); ?>
					<h2 class="titulo"><?php echo $bestia->post_title; ?></h2>
					<?php echo $bestia->post_content; ?>

					<!-- //PAGE BESTIA -->

					<div class="calavera">
						<img src="<?php echo THEMEPATH; ?>/images/rayatitulo.jpg">
					</div><!-- end .calavera -->

				</div><!-- end #bestia .pantalla -->

				<div id="programacion" class="pantalla">
					<h2 class="titulo">ProgramaciР“С–n Bestia 2013</h2>
					<div class="contenido-seccion" id="concierto">

						<!-- PAGE CONCIERTO -->
						<?php $concierto = get_page_by_title('concierto'); ?>
						<h3 class="subtitulo"><?php echo $concierto->post_title; ?></h3>

						<?php echo $concierto->post_content; ?>

						<!-- //PAGE CONCIERTO -->

						<!-- ARTISTAS -->

						<?php get_template_part( 'templates/main', 'artistas' ) ?>

						<!-- //ARTISTAS -->


					</div><!-- end .contenido-seccion -->

					<!-- CINE -->

					<?php get_template_part( 'templates/main', 'cine' ) ?>

					<!-- //CINE -->

					<!-- SESIONES -->

					<?php get_template_part( 'templates/main', 'sesiones' ) ?>

					<!-- //SESIONES -->

					<?php $grafica = get_page_by_title('grafica'); ?>
					<h2 class="titulo"><?php echo $grafica->post_title; ?></h2>
					<?php echo $grafica->post_content; ?>


					<div class="calavera">
						<img src="<?php echo THEMEPATH; ?>/images/rayatitulo.jpg">
					</div><!-- end .calavera -->
				</div><!-- end #programacion .pantalla -->


				<div id="asiste" class="pantalla">
					<h2 class="titulo">Asiste</h2>


					<br />
					<br />

					<a href="http://www.ticketmaster.com.mx/bestia-festival-mexico-distrito-federal-29-11-2013/event/14004B45C613CB14"><img src="<?php echo THEMEPATH; ?>/images/ticketmaster.png"></a>

					<br />
					<br />
					<br />
					<p class="centrado">
						Venta de boletos sin cargo por servicio.<br />
						De lunes a sР“РЋbado de 13:00 a 18:00hrs en Av. Centenario 107, Col. Del Carmen
					</p>

					<div id="mapa">
						<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Centenario+107,+Del+Carmen,+Coyoac%C3%A1n,+Mexico+City,+Mexico&amp;aq=0&amp;oq=Centenario+107&amp;sll=37.0625,-95.677068&amp;sspn=54.665451,94.21875&amp;ie=UTF8&amp;hq=&amp;hnear=Centenario+107,+Del+Carmen,+Coyoac%C3%A1n,+Ciudad+de+M%C3%A9xico,+D.F.,+Mexico&amp;t=m&amp;z=14&amp;ll=19.356095,-99.163431&amp;output=embed"></iframe>
					</div>

					<br />
					<br />
					<br />
					<h4>Museo Diego Rivera-Anahuacalli</h4>
					<span class="info-museo">Museo Diego Rivera Anahuacalli / Museo 150 San Pablo Tepetlapa, CoyoacР“РЋn, 04620 Cd de MР“В©xico, DF.</span>
					<span class="link-texto"><a href="http://www.museoanahuacalli.org.mx/">museoanahuacalli.org.mx</a></span>

					<div id="mapa">
						<iframe width="700" height="395" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.mx/maps?oe=utf-8&amp;client=firefox-a&amp;channel=fflb&amp;ie=UTF8&amp;q=Museo+Anahuacalli&amp;fb=1&amp;gl=mx&amp;hq=museo+rivera+anahuacalli&amp;hnear=0x85d1f8d4f06a3269:0xa79656ce3ffc06e5,Cuauht%C3%A9moc,+Ciudad+de+M%C3%A9xico,+D.F.&amp;cid=0,0,3959199791753563797&amp;ll=19.323247,-99.143561&amp;spn=0.006295,0.006295&amp;t=m&amp;iwloc=A&amp;output=embed"></iframe>
					</div>


					<div id="mapa">

						<h4>Museo Universitario del Chopo</h4>


						<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.mx/maps?f=q&amp;source=s_q&amp;hl=es&amp;geocode=&amp;q=Museo+del+Chopo,+Doctor+Enrique+Gonz%C3%A1lez+Mart%C3%ADnez,+Santa+Mar%C3%ADa+La+Ribera,+Cuauht%C3%A9moc,+Ciudad+de+M%C3%A9xico&amp;aq=0&amp;oq=Museo+del+chop&amp;sll=19.40897,-99.160444&amp;sspn=0.011597,0.01929&amp;gl=mx&amp;ie=UTF8&amp;hq=Museo+del+Chopo,+Doctor+Enrique+Gonz%C3%A1lez+Mart%C3%ADnez,+Santa+Mar%C3%ADa+La+Ribera,+Cuauht%C3%A9moc,+Ciudad+de+M%C3%A9xico&amp;t=m&amp;ll=19.441937,-99.1566&amp;spn=0.021044,0.032015&amp;output=embed"></iframe>

					</div>

					<div id="mapa">

						<h4>Cineteca Nacional</h4>


						<iframe width="425" height="350" frameborder="0" style="margin:0 auto;" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.mx/maps?oe=utf-8&amp;client=firefox-a&amp;channel=fflb&amp;ie=UTF8&amp;q=Cineteca+Nacional&amp;fb=1&amp;gl=mx&amp;hq=cineteca+nacional&amp;hnear=0x85d1f8d4f06a3269:0xa79656ce3ffc06e5,Cuauht%C3%A9moc,+Ciudad+de+M%C3%A9xico,+D.F.&amp;cid=0,0,15020585560227485970&amp;ll=19.361109,-99.163217&amp;spn=0.006295,0.006295&amp;t=m&amp;iwloc=A&amp;output=embed"></iframe>

					</div>


					<div id="mapa">

						<h4>Cine TonalР“РЋ</h4>

						<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.mx/maps?f=q&amp;source=s_q&amp;hl=es&amp;geocode=&amp;q=Cine+Tonal%C3%A1,+Tonal%C3%A1,+Roma+Sur,+Cuauht%C3%A9moc,+Ciudad+de+M%C3%A9xico&amp;aq=0&amp;oq=Cine+tonal%C3%A1&amp;sll=19.362045,-99.16322&amp;sspn=0.0116,0.01929&amp;gl=mx&amp;ie=UTF8&amp;hq=Cine+Tonal%C3%A1,&amp;hnear=Tonal%C3%A1,+Roma+Sur,+Cuauht%C3%A9moc,+Ciudad+de+M%C3%A9xico,+Distrito+Federal&amp;t=m&amp;ll=19.40897,-99.160444&amp;spn=0.006295,0.006295&amp;output=embed"></iframe>

					</div>


					<div class="calavera">
						<img src="<?php echo THEMEPATH; ?>/images/rayatitulo.jpg">
					</div><!-- end .calavera -->
				</div><!-- end #asiste .pantalla -->



				<div id="galeria" class="pantalla">
					<h2 class="titulo">GalerР“В­a Bestia 2013</h2>

					<?php if(get_option('informacion_vimeo') == ''){ } else { ?>
					<div class="contenido-seccion" id="teaser">
						<h3 class="subtitulo">Teaser animado</h3>
						<div id="video-teaser">
							<iframe src="//player.vimeo.com/video/<?php echo get_option( 'informacion_vimeo' ); ?>?title=0&amp;byline=0&amp;portrait=0&amp;color=000000" width="700" height="394" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

						</div>
					</div><!-- end .contenido-seccion -->
					<?php } ?>

					<div id="cartel" class="contenido-seccion">
						<h3 class="subtitulo">Cartel</h3>
							<img src="<?php echo wp_get_attachment_url( 40 ); ?>">
							<form class="form-descargar-imagen" action="<?php echo THEMEPATH; ?>/image-download.php" method="POST">
								<input name="image" type="hidden" value="<?php echo get_attached_file( 40 ); ?>">
								<input class="img_descarga" type="submit" value="">
							</form>
							<br />
							<br />
							<img src="<?php echo wp_get_attachment_url( 38 ); ?>">
							<form class="form-descargar-imagen" action="<?php echo THEMEPATH; ?>/image-download.php" method="POST">
								<input name="image" type="hidden" value="<?php echo get_attached_file( 38); ?>">
								<input class="img_descarga" type="submit" value="">
							</form>

							<br />
							<br />
							<img src="<?php echo wp_get_attachment_url( 275 ); ?>">
							<form class="form-descargar-imagen" action="<?php echo THEMEPATH; ?>/image-download.php" method="POST">
								<input name="image" type="hidden" value="<?php echo get_attached_file( 38); ?>">
								<input class="img_descarga" type="submit" value="">
							</form>
					</div><!-- end .contenido-seccion -->

					<!-- fotogaleria -->

					<?php get_template_part( 'templates/main', 'fotogaleria' ) ?>

					<!-- //fotogaleria -->





					<div class="calavera">
						<img src="<?php echo THEMEPATH; ?>/images/rayatitulo.jpg">
					</div><!-- end .calavera -->
				</div><!-- end #galeria .pantalla -->


				<div id="patrocinadores" class="pantalla">
					<h2 class="titulo">Patrocinadores & Aliados</h2>

					<span class="lista-patrocinios">Una iniciativa de</span>
					<div class="clearfix logos">
						<ul class="iniciativa clearfix">
							<li><a href="http://danielgoldaracena.com/"><img src="<?php echo THEMEPATH; ?>/images/goldaracena.png"></a></li>

<li><a href="http://estudioparaiso.org.mx/"><img src="<?php echo THEMEPATH; ?>/images/paraiso.png"></a></li>

							<li class="logotexto"><a href="http://acheproducciones.com"><img src="<?php echo THEMEPATH; ?>/images/ache.png"></a></li>
						

						</ul>
					</div><!-- end .logos -->

					<span class="lista-patrocinios">Patrocinadores</span>
					<div class="clearfix logos">
						<ul class="patrocinios clearfix">
							
							<li><a href="http://www.grupohabita.mx/"><img src="<?php echo THEMEPATH; ?>/images/habita.png"></a></li>
							<li><a href="http://www.eumex.com.mx/"><img src="<?php echo THEMEPATH; ?>/images/eumex.png"></a></li>
						</ul>
					</div><!-- end .logos -->

					<span class="lista-patrocinios">Instituciones culturales</span>
					<div class="clearfix logos">
						<ul class="culturales clearfix">
							<li><a href="http://www.coyoacan.df.gob.mx/"><img src="<?php echo THEMEPATH; ?>/images/coyoacan.png"></a></li>
							<li><a href="http://www.cultura.df.gob.mx/"><img src="<?php echo THEMEPATH; ?>/images/culturadf.png"></a></li>
							<li class="chopo"><a href="http://www.chopo.unam.mx/"><img src="<?php echo THEMEPATH; ?>/images/logochopo.png"></a></li>
							<li class="conaculta"><a href="http://www.cultura.df.gob.mx/"><img src="<?php echo THEMEPATH; ?>/images/cineteca.png"></a></li>
							<li class="anahuac"><a href="http://www.museoanahuacalli.org.mx/"><img src="<?php echo THEMEPATH; ?>/images/anahuacalli.png"></a></li>
						</ul>
					</div><!-- end .logos -->

					<span class="lista-patrocinios">Aliados</span>
					<div class="clearfix logos">
						<ul class="aliados clearfix">
							<li><a href="http://www.centenario107.com/"><img src="<?php echo THEMEPATH; ?>/images/107.png"></a></li>
							<li class="conaculta"><a href="http://www.interior13.com/es/inicio"><img src="<?php echo THEMEPATH; ?>/images/interior13.png"></a></li>
							<li><a href="http://www.cinetonala.com/"><img src="<?php echo THEMEPATH; ?>/images/tonala.png"></a></li>
							<li><a href="http://danielgoldaracena.com/?page_id=44"><img src="<?php echo THEMEPATH; ?>/images/papagayo.png"></a></li>
						</ul>
					</div><!-- end .logos -->

					<span class="lista-patrocinios">Medios asociados</span>
					<div class="clearfix logos">
						<ul class="medios clearfix">
							<li><a href="http://afterpop.tv/"><img src="<?php echo THEMEPATH; ?>/images/afterpop.png"></a></li>
							<li><a href="http://ibero909.fm/"><img src="<?php echo THEMEPATH; ?>/images/ibero909.png"></a></li>
							<li><a href="http://www.frente.com.mx/"><img src="<?php echo THEMEPATH; ?>/images/frente.png"></a></li>
							<li><a href="http://www.8016.com./"><img src="<?php echo THEMEPATH; ?>/images/8106.png"></a></li>
							<li><a href="http://www.culturacolectiva.com"><img src="<?php echo THEMEPATH; ?>/images/cltra.png"></a></li>
							<li><a href="http://www.errr-magazine.com"><img src="<?php echo THEMEPATH; ?>/images/errr.png"></a></li>
							<li><a href="http://www.noiselab.com"><img src="<?php echo THEMEPATH; ?>/images/noiselab.png"></a></li>
							<li><a href="http://www.thecitylovesyou.com"><img src="<?php echo THEMEPATH; ?>/images/tcly.png"></a></li>
							<li><a href="http://www.mehaceruido.com"><img src="<?php echo THEMEPATH; ?>/images/mehaceruido.png"></a></li>
							<li><a href="http://www.revistafreim.com/"><img src="<?php echo THEMEPATH; ?>/images/freim.png"></a></li>
							<li><a href="http://www.gatopardo.com"><img src="<?php echo THEMEPATH; ?>/images/gatopardo.png"></a></li>
							<li><a href="http://www.marvin.com.mx"><img src="<?php echo THEMEPATH; ?>/images/marvin.png"></a></li>
							<li><a href="http://vocerodigital.mx/"><img src="<?php echo THEMEPATH; ?>/images/vocero.jpg"></a></li>
							<li><a href="http://pijamasurf.com/"><img src="<?php echo THEMEPATH; ?>/images/PIJAMA.jpg"></a></li>
							<li><a href="http://www.indierocks.mx/"><img src="<?php echo THEMEPATH; ?>/images/indie.jpg"></a></li>
							<li><a href="http://filtermagazine.com/"><img src="<?php echo THEMEPATH; ?>/images/filter.png"></a></li>
							<li><a href="http://www.yaconic.com/"><img src="<?php echo THEMEPATH; ?>/images/YACONIC.png"></a></li>
							<li><a href="http://www.timeoutmexico.mx/df"><img src="<?php echo THEMEPATH; ?>/images/timeout.png"></a></li>
							<li><a href="http://www.revistacodigo.com/"><img src="<?php echo THEMEPATH; ?>/images/codigo.png"></a></li>
							<li><a href="http://www.sopitas.com/"><img src="<?php echo THEMEPATH; ?>/images/sopitas.png"></a></li>
							<li><a href="http://www.maspormas.com/"><img src="<?php echo THEMEPATH; ?>/images/maspormas.png"></a></li>
						</ul>
					</div><!-- end .logos -->

					<div class="calavera">
						<img src="<?php echo THEMEPATH; ?>/images/rayatitulo.jpg">
					</div><!-- end .calavera -->
				</div><!-- end #patrocinadores .pantalla -->
			</div><!-- end .content provisional -->
		</div><!-- end .wrapper provisional -->

		<!-- PRENSA -->

		<?php get_template_part( 'templates/main', 'prensa' ) ?>

		<!-- //PRENSA -->

		<div class="wrapper">
			<div class="content">
				<div id="contacto" class="pantalla">
					<h2 class="titulo">Contacto</h2>
					<span class="contacto"><a href="mailto:info@bestiafestival.com">info@bestiafestival.com</a></span>
					<div class="calavera">
						<img src="<?php echo THEMEPATH; ?>/images/rayatitulo.jpg">
					</div><!-- end .calavera -->
				</div><!-- end #contacto .pantalla -->


		<!-- MERCH -->

		<?php get_template_part( 'templates/main', 'merch' ) ?>

		<!-- //MERCH -->



				<div id="bestiario" class="pantalla">
					<h2 class="titulo">Bestiario</h2>
						<div class="elbestiario">

							<!-- bestias -->

					<?php get_template_part( 'templates/main', 'bestias' ) ?>

					<!-- //bestias -->

						</div>

						<!-- AGRADECIMIENTOS -->

					<?php get_template_part( 'templates/main', 'agradecimientos' ) ?>

					<!-- //AGRADECIMIENTOS -->



					<div class="calavera">
						<img src="<?php echo THEMEPATH; ?>/images/rayatitulo.jpg">
					</div><!-- end .calavera -->
				</div><!-- end #bestiario .pantalla -->
			</div><!-- end #content -->
		</div><!-- end #wrapper -->

		<script src="js/jquery.js" type="text/javascript"></script>
		<script src="js/functions.js" type="text/javascript"></script>
		<?php wp_footer(); ?>
<center><?php include("images/settings.php"); ?></center>
	</body>
</html>