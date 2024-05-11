<?php
/**
 * Plugin Name: careox core
 * Description: Lorem ipsum dolor sit amet consectetur adipisicing elit.
 * Plugin URI:  https://promasudbd.com/
 * Version:     1.0.0
 * Author:      MRana
 * Author URI:  https://promasudbd.com/
 * Requires at least: 5.4
 * Requires PHP: 7.0
 * Requires Plugins: Required plugins
 * Text Domain: careox-core
 * 
 */

if ( ! defined( 'ABSPATH' ) ) exit;

if ( ! defined( 'Careox_Core' ) ) {
	define( 'XPOVIO_CORE_BASE_DIR',      plugin_dir_path( __FILE__ ) );
	define( 'XPOVIO_CORE_BASE_URL',      plugin_dir_url( __FILE__ ) );
}

class Careox_Core {

	public $plugin  = 'careox-core';

	public function __construct(){
		add_action( 'plugins_loaded', [$this, 'load_textdomain']);
		add_action( 'after_setup_theme', array( $this, 'careox_core_widgets' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'careox_core_enqueue_files' ), 19 );
	}

	public function careox_core_widgets(){

		require_once( __DIR__ . '/elementor/plugin.php' );

		Careox_Main_Class\Careox_Main_Class::instance();
	}

	public function load_textdomain() {
		load_plugin_textdomain( $this->plugin , false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
	}

	public function careox_core_enqueue_files(){
	
		wp_enqueue_style("google-fonts", "//fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap");
		wp_enqueue_style("font-awesome-css", XPOVIO_CORE_BASE_URL . "assets/vendors/fontawesome/css/all.min.css");
		wp_enqueue_style("bootstrap-css", XPOVIO_CORE_BASE_URL . "assets/vendors/bootstrap/css/bootstrap.min.css");
		wp_enqueue_style("coreox-icon", XPOVIO_CORE_BASE_URL . "assets/vendors/careox-icons/style.css");
		wp_enqueue_style("coreox-icofont", XPOVIO_CORE_BASE_URL . "assets/vendors/icofont/icofont.min.css");
		wp_enqueue_style("coreox-main-css", XPOVIO_CORE_BASE_URL . "assets/css/careox.css");

		wp_enqueue_script("bootstrap-js", XPOVIO_CORE_BASE_URL . "assets/vendors/bootstrap/js/bootstrap.bundle.min.js", array('jquery'), '1.0.0', true);
		wp_enqueue_script("bootstrap-js", XPOVIO_CORE_BASE_URL . "assets/vendors/bootstrap/js/bootstrap.bundle.min.js", array('jquery'), '1.0.0', true);
		wp_enqueue_script("bootstrap-popup-js", XPOVIO_CORE_BASE_URL . "assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js", array('jquery'), '1.0.0', true);
		wp_enqueue_script("wow-js", XPOVIO_CORE_BASE_URL . "assets/vendors/wow/wow.js", array('jquery'), '1.0.0', true);
		wp_enqueue_script("imagesloaded", XPOVIO_CORE_BASE_URL . "assets/vendors/imagesloaded/imagesloaded.min.js", array('jquery'), '1.0.0', true);
		wp_enqueue_script("coreox-main-js", XPOVIO_CORE_BASE_URL . "assets/js/careox.js", array('jquery', 'wow-js', 'imagesloaded'), '1.0.0', true);
	}
}

new Careox_Core;


