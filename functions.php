<?php 

// Enqueue scripts and styles
	
function mk_resources() {		
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.1.1.min.js', array(), '20120206', true );
	wp_enqueue_script( 'custom-script', get_template_directory_uri() . '/js/script.js', array( 'jquery'), '1.1', true );
}
add_action('wp_enqueue_scripts', 'mk_resources');

function mk_setup() {

	// Navigation Menus
		register_nav_menus(array(
			'primary' => __( 'Primary Menu' ),
			'footer'  => __( 'Footer Menu' ),
		));
	
	// Add featured image support // priprema slike 720x540
		add_theme_support('post-thumbnails');
		add_image_size('small', 400, 400, true); 

}
add_action( 'after_setup_theme', 'mk_setup' );


 ?>