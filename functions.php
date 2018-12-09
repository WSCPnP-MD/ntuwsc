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
	wp_enqueue_style( 'wpbf-style-child', WPBF_CHILD_THEME_URI . '/style.css', array(), time());

	// Scripts
	wp_enqueue_script( 'wpbf-site-child', WPBF_CHILD_THEME_URI . '/js/site-child.js', array(), time(), true );
	
	// Add styles and scripts if is the about us page (which has the id of 14)
	if ( is_page( 14 ) ) {
		wp_enqueue_style( 'wsc-about-us-style', WPBF_CHILD_THEME_URI . '/css/about-us.css', array(), time());
		wp_enqueue_script( 'wsc-about-us-script', WPBF_CHILD_THEME_URI . '/js/about-us.js', array(), time());
	}
	else {
	// remove the styles and scripts after leaving the about us page
		wp_dequeue_style( 'wsc-about-us-style' );
		wp_dequeue_script( 'wsc-about-us-script' );
	}
	
	if ( is_page( 15 ) ) {
		wp_enqueue_style( 'wsc-portfolio-style', WPBF_CHILD_THEME_URI . '/css/portfolio.css', array(), time());
		wp_enqueue_script( 'wsc-portfolio-script', WPBF_CHILD_THEME_URI . '/js/portfolio.js', array(), time());
		wp_enqueue_script( 'isotope-script', WPBF_CHILD_THEME_URI . '/assets/js/isotope.pkgd.min.js', array('jquery'), time());
	}
	else {
	// remove the styles and scripts after leaving the about us page
		wp_dequeue_style( 'wsc-portfolio-style' );
		wp_dequeue_script( 'wsc-portfolio-script' );
		wp_dequeue_script( 'isotope-script' );
	}

	// Add styles and scripts if at the main committee page (which has the id of 68)
	// owl styles and scripts are used for the owl carousel (the thingy which allows photos to appear in a slideshow-like pattern)
	if ( is_page ( 68 ) ) {
		wp_enqueue_style( 'wsc-committee-style', WPBF_CHILD_THEME_URI . '/css/committee.css', array(), time());
		wp_enqueue_style( 'owl-carousel-style', WPBF_CHILD_THEME_URI . '/assets/css/owl.carousel.min.css', array(), time());
		wp_enqueue_style( 'owl-theme-style', WPBF_CHILD_THEME_URI . '/assets/css/owl.theme.default.min.css', array(), time());
		wp_enqueue_style(' font-awesome ', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), time()); 
		wp_enqueue_script( 'owl-carousel-script', WPBF_CHILD_THEME_URI . '/assets/js/owl.carousel.min.js', array('jquery'), time());
		wp_enqueue_script( 'wsc-committee-script', WPBF_CHILD_THEME_URI . '/js/committee.js', array(), time());
	}
	else {
	// remove styles and scripts after leaving the main committee page
		wp_dequeue_style( 'wsc-committee-style' );
		wp_dequeue_style( 'owl-carousel-style' );
		wp_dequeue_style( 'owl-theme-style' );
		wp_dequeue_script( 'wsc-committee-script' );
		wp_dequeue_script( 'owl-carousel-script' );
	}

	if ( is_page ( 16 ) ) {
		wp_enqueue_style( 'wsc-newsletter-style', WPBF_CHILD_THEME_URI . '/css/newsletter.css', array(), time());
	}
	else {
		wp_dequeue_style( 'wsc-newsletter-style' );
	}

	// Styles and scripts for each of the 3 portofolio pages
	if ( is_page ( 101 ) || is_page ( 105 ) || is_page ( 107 )) {
		wp_enqueue_style( 'wsc-portfolio-style', WPBF_CHILD_THEME_URI . '/css/portfolio.css', array(), time());
	}
	else {
		wp_dequeue_style( 'wsc-portfolio-style');
	}

	if ( is_page ("faqs") ) {
		wp_enqueue_style( 'wsc-faq-style', WPBF_CHILD_THEME_URI . '/css/faq.css', array(), time());
	}
	else {
		wp_dequeue_style( 'wsc-faq-style');
	}

	// Add style for main page
	if ( is_page( 39 ) ) {
		wp_enqueue_style( 'wsc-main-style', WPBF_CHILD_THEME_URI . '/css/main.css', array(), time());
		wp_enqueue_style(' font-awesome ', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), time()); 
		wp_enqueue_script( 'wsc-home-script', WPBF_CHILD_THEME_URI . '/js/home.js', array(), time());
	}
	else {
		wp_dequeue_style( 'wsc-main-style');
	}
	
	// Add style for contact page 
	if ( is_page( 19 ) ) {
		wp_enqueue_style( 'wsc-contact-us-style', WPBF_CHILD_THEME_URI . '/css/contact-us.css', array(), time());
		wp_enqueue_style(' font-awesome', 'https://use.fontawesome.com/releases/v5.2.0/css/all.css', array(), time());
		wp_enqueue_script( 'wsc-contact-us-script', WPBF_CHILD_THEME_URI . '/js/contact-us.js', array(), time());
	}
	else {
		wp_dequeue_style( 'wsc-contact-us-style');
		wp_dequeue_script('wsc-contact-us-script');
		wp_dequeue_style(' font-awesome ');
	}
}