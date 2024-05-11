<?php 
namespace Careox_Main_Class;

if ( ! defined( 'ABSPATH' ) ) exit; 


final class Careox_Main_Class {

	const VERSION = '1.0.0';
	const MINIMUM_ELEMENTOR_VERSION = '3.16.0';
	const MINIMUM_PHP_VERSION = '7.4';
	private static $_instance = null;

	public static function instance() {

		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	public function __construct() {

		if ( $this->is_compatible() ) {
			add_action( 'elementor/init', [ $this, 'init' ] );
		}
	}

	public function is_compatible() {

		// Check if Elementor installed and activated
		if ( ! did_action( 'elementor/loaded' ) ) {
			add_action( 'admin_notices', [ $this, 'admin_notice_missing_main_plugin' ] );
			return false;
		}

		// Check for required Elementor version
		if ( ! version_compare( ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=' ) ) {
			add_action( 'admin_notices', [ $this, 'admin_notice_minimum_elementor_version' ] );
			return false;
		}

		// Check for required PHP version
		if ( version_compare( PHP_VERSION, self::MINIMUM_PHP_VERSION, '<' ) ) {
			add_action( 'admin_notices', [ $this, 'admin_notice_minimum_php_version' ] );
			return false;
		}

		return true;
	}

	public function admin_notice_missing_main_plugin() {

		if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

		$message = sprintf(
			/* translators: 1: Plugin name 2: Elementor */
			esc_html__( '"%1$s" requires "%2$s" to be installed and activated.', 'careox-core' ),
			'<strong>' . esc_html__( 'Elementor Test Addon', 'careox-core' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'careox-core' ) . '</strong>'
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );
	}

	public function admin_notice_minimum_elementor_version() {
		if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

		$message = sprintf(
			/* translators: 1: Plugin name 2: Elementor 3: Required Elementor version */
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'careox-core' ),
			'<strong>' . esc_html__( 'Elementor Test Addon', 'careox-core' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'careox-core' ) . '</strong>',
			 self::MINIMUM_ELEMENTOR_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );
	}

	public function admin_notice_minimum_php_version() {

		if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

		$message = sprintf(
			/* translators: 1: Plugin name 2: PHP 3: Required PHP version */
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'careox-core' ),
			'<strong>' . esc_html__( 'Elementor Test Addon', 'careox-core' ) . '</strong>',
			'<strong>' . esc_html__( 'PHP', 'careox-core' ) . '</strong>',
			 self::MINIMUM_PHP_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );
	}

	public function init() {

		add_action( 'elementor/widgets/register', [ $this, 'register_widgets' ] );

		/* Careox Addons Category Register */ 
		add_action( 'elementor/elements/categories_registered', [$this, 'careox_core_widget_categories'] );
	}

	public function register_widgets( $widgets_manager ) {

		require_once( __DIR__ . '/widgets/about-us.php' );

		$widgets_manager->register( new \Careox_About_Us() );
	}

	public function careox_core_widget_categories( $elements_manager ) {

		$elements_manager->add_category(
			'careox-cat',
			[
				'title' => esc_html__( 'Careox Addons', 'careox-core' ),
				'icon' => 'fa fa-plug',
			]
		);	
	}
	
}