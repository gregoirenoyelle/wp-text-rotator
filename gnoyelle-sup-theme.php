<?php
/*
Plugin Name: gnoyelle : Options du thème par Grégoire
Plugin URI: http://wwww.gregoirenoyelle.com
Description: Toutes les options suplémentaires pour le thème
Version: 1.0
Author: Grégoire Noyelle
Author URI: http://wwww.gregoirenoyelle.com
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Domain Path: /languages
Text Domain: wp-plugin-name
*/


//* If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
    die;
}

/**************************
* VARIABLES ET CONSTANTES GLOBALES
**************************/
// define('GN_WP_PLUGIN_PATH', plugin_dir_path(__FILE__) );
$my_plugin_name = 'WP Plugin Name';



/**************************
* LIENS FICHIER PHP
**************************/

//* Appel autres fichiers PHP
// Fichier de functions pour WordPress
include_once(plugin_dir_path( __FILE__ ) . '/lib/func.wordpress.php');
// Fichier de functions pour Genesis
include_once(plugin_dir_path( __FILE__ ) . '/lib/func.genesis.php');
// Fichier de functions pour intégrer des CSS et JS
include_once(plugin_dir_path( __FILE__ ) . '/lib/func.enqueue.php');
