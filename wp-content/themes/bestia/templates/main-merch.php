				<?php
					$args = array(
							'post_type' => 'merch',
						);
					$merch = new WP_Query($args);
					$hijos = 0;
					if($merch->have_posts()):
				?>
				<div id="merch" class="pantalla clearfix">
					<h2 class="titulo">Merch</h2>
					<div class="clearfix">
					<?php
						while($merch->have_posts()): $merch->the_post();
						$hijos++;
						$thumbID = get_post_thumbnail_id( $post->ID);
					?>
						<div class="post-foto hijo<?php echo $hijos; ?>">
							<?php the_post_thumbnail('general'); ?>
							<div class="info-post">
								<h6><?php the_title(); ?></h6>
								<?php the_content(); ?>

							</div>
						</div><!-- end .post-foto -->
						<?php endwhile;?>
					</div>
					<div class="calavera">
						<img src="<?php echo THEMEPATH; ?>/images/rayatitulo.jpg">
					</div><!-- end .calavera -->
				</div><!-- end #merch .pantalla -->
				<?php  endif; wp_reset_query();  ?>