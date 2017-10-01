<?php 

if ( ! function_exists('menu_post_type') ) {

// Register Custom Post Type
function menu_post_type() {

	$labels = array(
		'name'                  => _x( 'Menus', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Menu', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Menú del Día', 'text_domain' ),
		'name_admin_bar'        => __( 'Menú', 'text_domain' ),
		'archives'              => __( 'Archivos', 'text_domain' ),
		'attributes'            => __( 'Atributos', 'text_domain' ),
		'parent_item_colon'     => __( 'Elemento Padre', 'text_domain' ),
		'all_items'             => __( 'Todos los menus', 'text_domain' ),
		'add_new_item'          => __( 'Agregar un nuevo menú', 'text_domain' ),
		'add_new'               => __( 'Agregar nuevo', 'text_domain' ),
		'new_item'              => __( 'Menú nuevo', 'text_domain' ),
		'edit_item'             => __( 'Editar menú', 'text_domain' ),
		'update_item'           => __( 'Actualizar menú', 'text_domain' ),
		'view_item'             => __( 'Ver menú', 'text_domain' ),
		'view_items'            => __( 'Ver menus', 'text_domain' ),
		'search_items'          => __( 'Buscar menú', 'text_domain' ),
		'not_found'             => __( 'No encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'No encontrado en la papelera', 'text_domain' ),
		'featured_image'        => __( 'Imagen destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Agregar una imagen destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Eliminar la imagen destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Insertar dentro del menú', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Añadido a este menú', 'text_domain' ),
		'items_list'            => __( 'Lista de menus', 'text_domain' ),
		'items_list_navigation' => __( 'Navegador de listas de menu', 'text_domain' ),
		'filter_items_list'     => __( 'Filtro de lista de menus', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Menu', 'text_domain' ),
		'description'           => __( 'Menu del dia', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array('thumbnail', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-carrot',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'menu', $args );

}
add_action( 'init', 'menu_post_type', 0 );

}

 ?>