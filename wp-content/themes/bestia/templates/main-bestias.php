<?php $args = array('post_type' => 'bestias', 'numberposts' => -1, 'orderby'=>'menu_order', 'order' => 'ASC');
	$bestias = get_posts($args);
	foreach ($bestias as $bestia ) {
?>
	<h6 class="nombre"><?php echo $bestia->post_title; ?></h6>
	<span class="puesto"><?php echo $bestia->post_content; ?></span>
<?php } wp_reset_query(); ?>