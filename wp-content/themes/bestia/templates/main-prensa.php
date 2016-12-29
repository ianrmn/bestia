		<div id="prensa" class="pantalla clearfix">
			<h2 class="titulo">Prensa</h2>
			<span class="contacto"><a href="mailto:bestia.prensa@gmail.com">bestia.prensa@gmail.com</a></span>
			<?php
				$args = array(
						'post_type' => 'prensa',
						'posts_per_page' => -1
					);

				$notas = New WP_Query ($args);
				if($notas->have_posts()):
			?>
			<div class="clearfix scrollhor">
				<ul class="noticias-prensa clearfix">
					<?php
						while($notas->have_posts()): $notas->the_post();
					?>
					<li class="noticia">
						<?php the_post_thumbnail( 'prensa' ); ?>
						<div class="info-post">
							<h6><?php the_title(); ?></h6>
							<span class="fecha"><?php echo get_post_meta($post->ID, 'fuente', true); ?></span>
							<span class="fecha"><?php the_date('d-m-Y'); ?></span>
							<span class="fecha"><a href="<?php echo get_post_meta($post->ID, 'vinculo', true); ?>">Link</a></span>
						</div>
					</li>
					<?php endwhile; wp_reset_query(); ?>
				</ul>
			</div>
		<?php endif; wp_reset_query();?>
			<div class="calavera">
				<img src="<?php echo THEMEPATH; ?>/images/rayatitulo.jpg">
			</div><!-- end .calavera -->

		</div><!-- end #prensa .pantalla -->