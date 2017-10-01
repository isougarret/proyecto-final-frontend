<?php 
	
	function dl_enqueue_style() {
		$theme_data = wp_get_theme();

		/* Register Scripts */
		wp_register_style('myStyle', get_parent_theme_file_uri('/assets/css/mystyle.css'), array(), $theme_data->get( 'Version' ), 'screen');
		wp_register_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css', false, NULL, 'all' );
		wp_register_style('mainStyle', get_parent_theme_file_uri('/assets/css/style.css'), array(), $theme_data->get( 'Version' ), 'screen');
		wp_register_style( 'fonts', 'https://fonts.googleapis.com/css?family=Asap|Dosis', false, NULL, 'all' );
		wp_register_style('styleFooter', get_parent_theme_file_uri('/assets/css/stylefooter.css'), array('myStyle'), $theme_data->get( 'Version' ), 'screen');
		wp_register_style('styleMenus', get_parent_theme_file_uri('/assets/css/stylemenus.css'), array('myStyle'), $theme_data->get( 'Version' ), 'screen');
		wp_register_style('styleBlog', get_parent_theme_file_uri('/assets/css/styleblog.css'), array('myStyle'), $theme_data->get( 'Version' ), 'screen');
		wp_register_style('stylePedidos', get_parent_theme_file_uri('/assets/css/stylepedidos.css'), array('myStyle'), $theme_data->get( 'Version' ), 'screen');
		wp_register_style('styleUs', get_parent_theme_file_uri('/assets/css/styleus.css'), array('myStyle'), $theme_data->get( 'Version' ), 'screen');
		wp_register_style('style404', get_parent_theme_file_uri('/assets/css/style404.css'), array('myStyle'), $theme_data->get( 'Version' ), 'screen');
		wp_register_style('styleSingle', get_parent_theme_file_uri('/assets/css/stylesingle.css'), array('myStyle'), $theme_data->get( 'Version' ), 'screen');

		

		
		/* Enqueue Scripts */
		wp_enqueue_style('mainStyle');
		wp_enqueue_style( 'bootstrap' );
		wp_enqueue_style('fonts');
		wp_enqueue_style('styleFooter');
		wp_enqueue_style('styleMenus');
		wp_enqueue_style('styleBlog');
		wp_enqueue_style('stylePedidos');
		wp_enqueue_style('styleUs');
		wp_enqueue_style('style404');
		wp_enqueue_style('styleSingle');
		
		
		
		
		
	}

	add_action( 'wp_enqueue_scripts', 'dl_enqueue_style' );
?>