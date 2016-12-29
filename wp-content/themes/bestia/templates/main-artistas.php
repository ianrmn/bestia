				<?php
					$args = array(
							'post_type' => 'artistas',
							'numberposts' => -1,
							'orderby' => 'post_date',
							'order' => 'ASC',
						);

					$artistas = get_posts($args);
					foreach($artistas as $post): setup_postdata($post);
				?>

						<div class="artista">
							<h6><?php the_title(); ?></h6>
							<?php the_post_thumbnail(); ?>
							<div class="texto-artista">
								<?php the_content(); ?>
							</div><!-- end .texto-artista -->

							<ul class="links-artista clearfix">
								<li>
									<?php if(get_post_meta($post->ID, 'web', true)){ ?><a href="<?php echo get_post_meta($post->ID, 'web', true); ?>"><?php echo get_post_meta($post->ID, 'web', true); ?></a>
									<?php }

									if(get_post_meta($post->ID, 'facebook', true)) { ?>
									<a class="fb-artista" href="<?php echo get_post_meta($post->ID, 'facebook', true); ?>"></a>
									<?php } ?>
								</li>
								<li>
									<?php if(get_post_meta($post->ID, 'webD', true)){ ?><a href="<?php echo get_post_meta($post->ID, 'webD', true); ?>"><?php echo get_post_meta($post->ID, 'webD', true); ?></a>
									<?php }

									if(get_post_meta($post->ID, 'facebookD', true)) { ?>
									<a class="fb-artista" href="<?php echo get_post_meta($post->ID, 'facebookD', true); ?>"></a>
									<?php } ?>
								</li>
							</ul><!-- end .links-artista clearfix -->
						</div><!-- end .artista -->

						<?php endforeach; wp_reset_query(); ?>