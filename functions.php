<?php

// Child Theme Setup
function wpbf_child_theme_setup() {

	// Child Theme Textdomain
	load_child_theme_textdomain( 'page-builder-framework-child', WPBF_CHILD_THEME_DIR . '/languages' );

}
add_action( 'after_setup_theme', 'wpbf_child_theme_setup' );

// Enqueue Child Theme Scripts and Styles
add_action( 'wp_enqueue_scripts', 'wpbf_child_scripts', 13 );

function wpbf_child_scripts() {

	// Styles
	wp_enqueue_style( 'wpbf-style-child', WPBF_CHILD_THEME_URI . '/style.css', false, WPBF_CHILD_VERSION );

	// Scripts
	wp_enqueue_script( 'wpbf-site-child', WPBF_CHILD_THEME_URI . '/js/site-child.js', false, WPBF_CHILD_VERSION, true );
	
	// Add styles and scripts if is the about us page (which has the id of 14)
	if ( is_page( 14 ) ) {
		wp_enqueue_style( 'wsc-about-us-style', WPBF_CHILD_THEME_URI . '/css/about-us.css', time());
		wp_enqueue_script( 'wsc-about-us-script', WPBF_CHILD_THEME_URI . '/js/about-us.js', time());
	}
	else {
	// remove the styles and scripts after leaving the about us page
		wp_dequeue_style( 'wsc-about-us-style' );
		wp_dequeue_script( 'wsc-about-us-script' );
	}
	
	// Add styles and scripts if at the main committee page (which has the id of 68)
	// owl styles and scripts are used for the owl carousel (the thingy which allows photos to appear in a slideshow-like pattern)
	if ( is_page ( 68 ) ) {
		wp_enqueue_style( 'wsc-committee-style', WPBF_CHILD_THEME_URI . '/css/committee.css', time());
		wp_enqueue_style( 'owl-carousel-style', WPBF_CHILD_THEME_URI . '/assets/css/owl.carousel.min.css', time());
		wp_enqueue_style( 'owl-theme-style', WPBF_CHILD_THEME_URI . '/assets/css/owl.theme.default.min.css', time());
		wp_enqueue_script( 'owl-carousel-script', WPBF_CHILD_THEME_URI . '/assets/js/owl.carousel.min.js', array('jquery'), time());
		wp_enqueue_script( 'wsc-committee-script', WPBF_CHILD_THEME_URI . '/js/committee.js', time());
	}
	else {
	// remove styles and scripts after leaving the main committee page
		wp_dequeue_style( 'wsc-committee-style' );
		wp_dequeue_style( 'owl-carousel-style' );
		wp_dequeue_style( 'owl-theme-style' );
		wp_dequeue_script( 'wsc-committee-script' );
		wp_dequeue_script( 'owl-carousel-script' );
	}

	if ( is_page ( 15 ) ) {
		wp_enqueue_style( 'wsc-projects-style', WPBF_CHILD_THEME_URI . '/css/projects.css', time());
		wp_enqueue_script( 'wsc-projects-script', WPBF_CHILD_THEME_URI . '/js/projects.js', time());
		
		wp_enqueue_style( 'normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css');
		wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css');
		wp_enqueue_script( 'jquery' , 'http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js');
	}
	else {
		wp_dequeue_style( 'wsc-projects-style' );
		wp_dequeue_script( 'wsc-projects-script' );
		
		wp_dequeue_style( 'normalize' );
		wp_dequeue_style( 'bootstrap' );
		wp_dequeue_script( 'jquery' );
	}

	if ( is_page ( 16 ) ) {
		wp_enqueue_style( 'wsc-newsletter-style', WPBF_CHILD_THEME_URI . '/css/newsletter.css', time());
	}
	else {
		wp_dequeue_style( 'wsc-newsletter-style' );
	}
}