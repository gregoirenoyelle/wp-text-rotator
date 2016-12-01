<?php

//* Générateur en ligne pour les script et les css
// https://generatewp.com/register_script/

/**************************
* ENQUEUE POUR LE FRONT
**************************/

//* enqueue style front
add_action('wp_enqueue_scripts','gn_styles_front', 99);
function gn_styles_front() {
	wp_register_style('styles-text-rotator', plugins_url( 'css/simpletextrotator.css', dirname(__FILE__) ), array(), '1.0', 'all' );
	if ( is_home() ) {
		wp_enqueue_style('styles-text-rotator');
	}
	
}

//* enqueue script front
add_action('wp_enqueue_scripts','gn_scripts_front');
function gn_scripts_front() {
	wp_register_script('scripts-text-rotator',plugins_url( 'js/jquery.simple-text-rotator.min.js', dirname(__FILE__) ), array('jquery'),'1.0',true);
	if ( is_home() ) {
		wp_enqueue_script('scripts-text-rotator');
	}
}

/**************************
* ENQUEUE POUR LE BACK
**************************/

//* enqueue style back
// add_action('admin_enqueue_scripts','gn_styles_back', 99);
function gn_styles_back() {
	wp_register_style('styles-projet-back', plugins_url( 'css/styles-projet-back.css', dirname(__FILE__) ), array(), '1.0', 'all' );
	wp_enqueue_style('styles-projet-back');
}

//* enqueue script back
// add_action('admin_enqueue_scripts','gn_scripts_back');
function gn_scripts_back() {
	wp_register_script('scripts-projet-back',plugins_url( 'js/scripts-projet-back.js', dirname(__FILE__) ), array('jquery'),'1.0',true);
	wp_enqueue_script('scripts-projet-back');
}
