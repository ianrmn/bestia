
					<div class="contenido-seccion" id="ciclo-de-cine">
						<h3 class="subtitulo">Ciclo de cine</h3>

						<? $pagecine = get_page_by_title('BESTIA Cine');
								echo '<p>'.$pagecine->post_content.'</p>'; ?>

								<?php
						$args = array('post_type' => 'cine');
						$cines = new WP_Query($args);
						if($cines->have_posts()):
					?>

						<?php while($cines->have_posts()) : $cines->the_post(); ?>

						<div class="post-cine clearfix">
							<?php the_post_thumbnail( 'general' ); ?>

							<div class="right-cine">
								<span class="horario">
									<?php echo get_post_meta($post->ID, 'fecha', true); ?>
								</span>
								<h6><?php the_title(); ?></h6>
								<span class="director"> <?php echo get_post_meta($post->ID, 'director', true); ?></span>
								<?php the_content(); ?>
							</div><!-- end .right-cine -->
						</div><!-- end .post-cine clearfix -->
						<hr class="rayita-cine" />
					<?php endwhile; ?>



					<?php endif; wp_reset_query();  ?>
					</div><!-- end .contenido-seccion -->