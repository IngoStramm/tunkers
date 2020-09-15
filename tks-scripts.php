<?php
// SCRIPTS

$min = ( in_array( $_SERVER[ 'REMOTE_ADDR' ], array( '127.0.0.1', '::1' ) ) ) ? '' : '.min';

function tks_enqueue_scripts() {

	wp_enqueue_style( 'tks-style', TKS_URL . '/assets/css/tks-style.css', array(), '1.0.0' );

	// Grunt main file with Bootstrap, FitVids and others libs.
	wp_enqueue_script( 'tks-main', TKS_URL . 'assets/js/main' . $min . '.js', array( 'jquery' ), null, true );
	wp_localize_script( 'tks-main', 'ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );


	// Grunt watch livereload in the browser.
	if( in_array( $_SERVER[ 'REMOTE_ADDR' ], array( '127.0.0.1', '::1' ) ) )
		wp_enqueue_script( 'tks-livereload', 'http://localhost:35729/livereload.js?snipver=1', array(), null, true );

}

add_action( 'wp_enqueue_scripts', 'tks_enqueue_scripts', 1 );