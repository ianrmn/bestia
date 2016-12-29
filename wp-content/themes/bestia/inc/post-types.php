<?php


// CUSTOM POST TYPES /////////////////////////////////////////////////////////////////


	add_action('init', function(){


		// Artistas
		$labels = array(
			'name'          => 'Artistas',
			'singular_name' => 'Artista',
			'add_new'       => 'Nuevo Artista',
			'add_new_item'  => 'Nuevo Artista',
			'edit_item'     => 'Editar Artista',
			'new_item'      => 'Nuevo Artista',
			'all_items'     => 'Todos',
			'view_item'     => 'Ver Artista',
			'search_items'  => 'Buscar Artista',
			'not_found'     => 'No se encontró',
			'menu_name'     => 'Artistas'
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'artista' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			//'taxonomies'         => array( 'category' ),
			'supports'           => array( 'title', 'editor', 'thumbnail' )
		);
		register_post_type( 'artistas', $args );


		// Imágenes fotogalería
		$labels = array(
			'name'          => 'Imágenes',
			'singular_name' => 'Imagen',
			'add_new'       => 'Nueva Imagen',
			'add_new_item'  => 'Nueva Imagen',
			'edit_item'     => 'Editar Imagen',
			'new_item'      => 'Nueva Imagen',
			'all_items'     => 'Todas',
			'view_item'     => 'Ver Imagen',
			'search_items'  => 'Buscar Imagen',
			'not_found'     => 'No se encontró',
			'menu_name'     => 'Fotogalería'
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'imagen' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			//'taxonomies'         => array( 'category' ),
			'supports'           => array( 'title', 'thumbnail' )
		);
		register_post_type( 'imagenes', $args );

		// Ciclo de cine
		$labels = array(
			'name'          => 'Cine',
			'singular_name' => 'Cine',
			'add_new'       => 'Nueva entrada en Cine',
			'add_new_item'  => 'Nueva entrada en Cine',
			'edit_item'     => 'Editar Cine',
			'new_item'      => 'Nueva entrada en Cine',
			'all_items'     => 'Todas',
			'view_item'     => 'Ver entradas de Cine',
			'search_items'  => 'Buscar en Cine',
			'not_found'     => 'No se encontró',
			'menu_name'     => 'Cine'
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'ciclo-de-cine' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			//'taxonomies'         => array( 'category' ),
			'supports'           => array( 'title', 'editor', 'thumbnail' )
		);
		register_post_type( 'cine', $args );

		//Sesiones
		$labels = array(
			'name'          => 'Sesiones',
			'singular_name' => 'Sesión',
			'add_new'       => 'Nueva entrada en Sesiones',
			'add_new_item'  => 'Nueva entrada en Sesiones',
			'edit_item'     => 'Editar Sesiones',
			'new_item'      => 'Nueva entrada en Sesiones',
			'all_items'     => 'Todas',
			'view_item'     => 'Ver entradas en Sesiones',
			'search_items'  => 'Buscar en Sesiones',
			'not_found'     => 'No se encontró',
			'menu_name'     => 'Sesiones'
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'sesiones' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			//'taxonomies'         => array( 'category' ),
			'supports'           => array( 'title')
		);
		register_post_type( 'sesiones', $args );

		//Prensa
		$labels = array(
			'name'          => 'Prensa',
			'singular_name' => 'Nota de prensa',
			'add_new'       => 'Nueva entrada en Prensa',
			'add_new_item'  => 'Nueva entrada en Prensa',
			'edit_item'     => 'Editar Prensa',
			'new_item'      => 'Nueva entrada en Prensa',
			'all_items'     => 'Todas',
			'view_item'     => 'Ver entradas en Prensa',
			'search_items'  => 'Buscar en Prensa',
			'not_found'     => 'No se encontró',
			'menu_name'     => 'Prensa'
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'prensa' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			//'taxonomies'         => array( 'category' ),
			'supports'           => array( 'title', 'thumbnail')
		);
		register_post_type( 'prensa', $args );


		//Merch
		$labels = array(
			'name'          => 'Merch',
			'singular_name' => 'Nota de Merch',
			'add_new'       => 'Nueva entrada en Merch',
			'add_new_item'  => 'Nueva entrada en Merch',
			'edit_item'     => 'Editar Merch',
			'new_item'      => 'Nueva entrada en Merch',
			'all_items'     => 'Todas',
			'view_item'     => 'Ver entradas en Merch',
			'search_items'  => 'Buscar en Merch',
			'not_found'     => 'No se encontró',
			'menu_name'     => 'Merch'
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'merch' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			//'taxonomies'         => array( 'category' ),
			'supports'           => array( 'title', 'thumbnail', 'editor')
		);
		register_post_type( 'merch', $args );


		//Agradecimientos
		$labels = array(
			'name'          => 'Agradecimientos',
			'singular_name' => 'Nota de agradecimientos',
			'add_new'       => 'Nueva entrada en agradecimientos',
			'add_new_item'  => 'Nueva entrada en agradecimientos',
			'edit_item'     => 'Editar agradecimientos',
			'new_item'      => 'Nueva entrada en agradecimientos',
			'all_items'     => 'Todas',
			'view_item'     => 'Ver entradas en agradecimientos',
			'search_items'  => 'Buscar en agradecimientos',
			'not_found'     => 'No se encontró',
			'menu_name'     => 'Agradecimientos'
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'agradecimientos' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			//'taxonomies'         => array( 'category' ),
			'supports'           => array( 'title')
		);
		register_post_type( 'agradecimientos', $args );

		//Bestias
		$labels = array(
			'name'          => 'Bestias',
			'singular_name' => 'Nota de bestias',
			'add_new'       => 'Nueva entrada en bestias',
			'add_new_item'  => 'Nueva entrada en bestias',
			'edit_item'     => 'Editar bestias',
			'new_item'      => 'Nueva entrada en bestias',
			'all_items'     => 'Todas',
			'view_item'     => 'Ver entradas en bestias',
			'search_items'  => 'Buscar en bestias',
			'not_found'     => 'No se encontró',
			'menu_name'     => 'Bestias'
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'bestias' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => true,
			'menu_position'      => 6,
			//'taxonomies'         => array( 'category' ),
			'supports'           => array( 'title', 'editor', 'page-attributes' )
		);
		register_post_type( 'bestias', $args );


		//banners
		$labels = array(
			'name'          => 'banners',
			'singular_name' => 'Nota de banners',
			'add_new'       => 'Nueva entrada en banners',
			'add_new_item'  => 'Nueva entrada en banners',
			'edit_item'     => 'Editar banners',
			'new_item'      => 'Nueva entrada en banners',
			'all_items'     => 'Todas',
			'view_item'     => 'Ver entradas en banners',
			'search_items'  => 'Buscar en banners',
			'not_found'     => 'No se encontró',
			'menu_name'     => 'banners'
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'banners' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => true,
			'menu_position'      => 6,
			//'taxonomies'         => array( 'category' ),
			'supports'           => array( 'title', 'thumbnail', 'editor' )
		);
		register_post_type( 'banners', $args );





	});