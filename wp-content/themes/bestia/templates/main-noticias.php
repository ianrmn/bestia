		<?php if(have_posts()):  ?>
		<div id="noticias" class="pantalla clearfix">
			<h2 class="titulo">Noticias</h2>
			<div class="clearfix scrollhor">
				<ul class="noticias-prensa clearfix">
					<?php while(have_posts()): the_post(); ?>
					<li class="noticia">
						<?php the_post_thumbnail( 'prensa' ); ?>
						<div class="info-post">
							<h6><?php the_title(); ?></h6>
							<span class="fecha"><?php the_date('d-m-Y'); ?></span>
							<?php the_content(); ?>
						</div>
					</li>
					<?php endwhile; ?>
				</ul>
			</div>
			<div class="calavera">
				<img src="<?php echo THEMEPATH; ?>/images/rayatitulo.jpg">
			</div><!-- end .calavera -->
		</div><!-- end #prensa .pantalla -->
		<?php endif; wp_reset_query(); ?>