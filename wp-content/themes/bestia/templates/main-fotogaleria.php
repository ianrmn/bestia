					<?php
						$args = array('post_type' => 'imagenes');
						$fotos = new WP_Query($args);
						$hijos = 0;
						if($fotos->have_posts()):
					?>

					<div id="fotogaleria" class="contenido-seccion clearfix">
						<h3 class="subtitulo">Fotogalería</h3>
						<?php
							while($fotos->have_posts()): $fotos->the_post();
								$hijos++;
								$thumbID = get_post_thumbnail_id( $post->ID);
						?>
						<div class="post-foto hijo<?php echo $hijos; ?>">
							<?php the_post_thumbnail('general'); ?>
							<form class="form-descargar-imagen" action="<?php echo THEMEPATH; ?>/image-download.php" method="POST">
								<input name="image" type="hidden" value="<?php echo get_attached_file( $thumbID ); ?>">
								<input class="img_descarga" type="submit" value="">
							</form>
							<div class="info-post">
								<h6><?php the_title(); ?></h6>
								<span class="fecha"><?php the_date('d-m-Y'); ?></span>
							</div>
						</div><!-- end .post-foto -->
						<?php endwhile; ?>

					</div><!-- end .contenido-seccion -->
					<?php endif; wp_reset_query(); ?>