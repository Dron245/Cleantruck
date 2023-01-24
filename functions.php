<?php


function Cleantruck_assets() {

    //wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );


    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/app.min.js', array(), '20151215', true );
    
    //wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array(), '20151215', true );

	wp_enqueue_style( 'maincss', get_template_directory_uri() . '/assets/css/style.min.css' );
}

add_action( 'wp_enqueue_scripts', 'Cleantruck_assets' );

show_admin_bar(false);