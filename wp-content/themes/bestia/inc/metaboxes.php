<?php

// CUSTOM METABOXES //////////////////////////////////////////////////////////////////



	add_action('add_meta_boxes', function(){

		add_meta_box( 'meta_box_artista', 'Redes sociales del artista', 'show_meta_box_artista', 'artistas', 'normal', 'default' );
		add_meta_box( 'meta_box_disquera', 'Redes sociales de la disquera', 'show_meta_box_disquera', 'artistas', 'normal', 'default' );

		add_meta_box( 'meta_box_post', 'Link', 'show_meta_box_post', 'post', 'normal', 'default' );
		add_meta_box( 'meta_box_info_cine', 'Información de la película', 'show_meta_box_cine', 'cine', 'normal', 'default' );
		add_meta_box( 'meta_box_sesion', 'Video', 'show_meta_box_sesion', 'sesiones', 'normal', 'default' );
		add_meta_box( 'meta_box_prensa', 'Info de la nota', 'show_meta_box_prensa', 'prensa', 'normal', 'default' );

	});



// CUSTOM METABOXES CALLBACK FUNCTIONS ///////////////////////////////////////////////



	function show_meta_box_artista($post){
		$facebook = get_post_meta($post->ID, 'facebook', true);
		$web = get_post_meta($post->ID, 'web', true);
		wp_nonce_field(__FILE__, 'artistas_info_nonce');
		echo <<< meta_box_artista

			<label for="facebook">Facebook: </label>
			<input type="text" name="facebook" id="facebook" value="$facebook" class="">
			<br />
			<br />

			<label for="web">web: </label>
			<input type="text" name="web" id="web" value="$web" class="">

meta_box_artista;
	}

	function show_meta_box_disquera($post){
		$facebookD = get_post_meta($post->ID, 'facebookD', true);
		$webD = get_post_meta($post->ID, 'webD', true);
		wp_nonce_field(__FILE__, 'disquera_info_nonce');
		echo <<< meta_box_disquera

			<label for="facebookD">Facebook: </label>
			<input type="text" name="facebookD" id="facebookD" value="$facebookD" class="">
			<br />
			<br />

			<label for="webD">web: </label>
			<input type="text" name="webD" id="webD" value="$webD" class="">

meta_box_disquera;
	}


	function show_meta_box_post($post){
		$link = get_post_meta($post->ID, 'link', true);
		wp_nonce_field(__FILE__, 'post_info_nonce');
		echo '<label for="link">link: </label>
			<input type="text" name="link" id="link" value="'.$link.'" class="">';
	}


	function show_meta_box_cine($post){
		$fecha = get_post_meta($post->ID, 'fecha', true);
		$director = get_post_meta($post->ID, 'director', true);
		wp_nonce_field(__FILE__, 'cine_info_nonce');
		echo <<< meta_box_info_cine

			<label for="fecha">Fecha: </label>
			<input type="text" name="fecha" id="fecha" value="$fecha" class="">
			<br />
			<br />

			<label for="director">Nombre del director: </label>
			<input type="text" name="director" id="director" value="$director" class="">

meta_box_info_cine;
	}

	function show_meta_box_sesion($post){
		$vimeo = get_post_meta($post->ID, 'vimeo', true);
		wp_nonce_field(__FILE__, 'sesion_info_nonce');
		echo '<label for="vimeo">ID Vimeo: </label>
			<input type="text" name="vimeo" id="vimeo" value="'.$vimeo.'" class="">';
	}


function show_meta_box_prensa($post){
		$fuente = get_post_meta($post->ID, 'fuente', true);
		$vinculo = get_post_meta($post->ID, 'vinculo', true);
		wp_nonce_field(__FILE__, 'prensa_info_nonce');
		echo <<< meta_box_prensa

			<label for="Fuente">fuente: </label>
			<input type="text" name="fuente" id="fuente" value="$fuente" class="">
			<br />
			<br />

			<label for="Vínculo">vinculo: </label>
			<input type="text" name="vinculo" id="vinculo" value="$vinculo" class="">

meta_box_prensa;
	}




// SAVE METABOXES DATA ///////////////////////////////////////////////////////////////



	add_action('save_post', function($post_id){


		if ( ! current_user_can('edit_page', $post_id)){
			return $post_id;
		}


		if ( defined('DOING_AUTOSAVE') and DOING_AUTOSAVE ){
			return $post_id;
		}


		if( isset($_POST['facebook']) and check_admin_referer( __FILE__, 'artistas_info_nonce' ) ){

			if (isset($_POST['facebook']) ) {
				update_post_meta($post_id, 'facebook', $_POST['facebook']);
			}


			if (isset($_POST['web']) ) {
					update_post_meta($post_id, 'web', $_POST['web']);
			}

		}

		if( isset($_POST['facebookD']) and check_admin_referer( __FILE__, 'disquera_info_nonce' ) ){

			if (isset($_POST['facebookD']) ) {
				update_post_meta($post_id, 'facebookD', $_POST['facebookD']);
			}


			if (isset($_POST['webD']) ) {
					update_post_meta($post_id, 'webD', $_POST['webD']);
			}

		}

		if( isset($_POST['link']) and check_admin_referer( __FILE__, 'post_info_nonce' ) ){

			if (isset($_POST['link']) ) {
				update_post_meta($post_id, 'link', $_POST['link']);
			}


		}


		if( isset($_POST['fecha']) and check_admin_referer( __FILE__, 'cine_info_nonce' ) ){

			if (isset($_POST['fecha']) ) {
				update_post_meta($post_id, 'fecha', $_POST['fecha']);
			}


			if (isset($_POST['director']) ) {
					update_post_meta($post_id, 'director', $_POST['director']);
			}

		}

		if( isset($_POST['vimeo']) and check_admin_referer( __FILE__, 'sesion_info_nonce' ) ){

			if (isset($_POST['vimeo']) ) {
				update_post_meta($post_id, 'vimeo', $_POST['vimeo']);
			}


		}

		if( isset($_POST['fuente']) and check_admin_referer( __FILE__, 'prensa_info_nonce' ) ){

			if (isset($_POST['fuente']) ) {
				update_post_meta($post_id, 'fuente', $_POST['fuente']);
			}


			if (isset($_POST['vinculo']) ) {
					update_post_meta($post_id, 'vinculo', $_POST['vinculo']);
			}

		}


	});



// OTHER METABOXES ELEMENTS //////////////////////////////////////////////////////////
