<?php
//show_admin_bar(false);
add_action( 'wp_enqueue_scripts', function () {

	//wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );


	wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/app.min.js', array(), 'null', true );
	
	//wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array(), '20151215', true );

  wp_enqueue_style( 'maincss', get_template_directory_uri() . '/assets/css/style.css' );

	
	}
);
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

function add_file_types_to_uploads($file_types){ 
	$new_filetypes = array(); $new_filetypes['svg'] =
	 'image/svg+xml'; $file_types = array_merge($file_types, 
	$new_filetypes ); return $file_types; }
	 add_action('upload_mimes', 'add_file_types_to_uploads');




