					<div class="contenido-seccion clearfix" id="bestia-sesiones">
						<h3 class="subtitulo">Bestia sesiones</h3>
						<?php


							$pagesesiones = get_page_by_title('BESTIA Sesiones');
								echo '<p>'.$pagesesiones->post_content.'</p>';

							$args = array(
									'post_type' => 'sesiones',
									'posts_per_page' => -1
								);

							$sesiones = get_posts($args);
							$hijos = 0;
							foreach($sesiones as $post): setup_postdata( $post );
							$hijos++;
						?>
						<div class="post-video hijo<?php echo $hijos; ?>">
							<h6><?php the_title(); ?></h6>
							<iframe src="//player.vimeo.com/video/<?php echo get_post_meta($post->ID, 'vimeo', true); ?>?title=0&amp;byline=0&amp;portrait=0&amp;color=000000" width="341" height="192" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
						</div><!-- end .post-video -->
						<?php  endforeach; wp_reset_query(); ?>
					</div><!-- end .contenido-seccion -->