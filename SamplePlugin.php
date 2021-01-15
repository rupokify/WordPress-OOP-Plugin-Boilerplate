<?php
/**
 * Plugin Name: Plugin Boilerplate
 * Version: 1.0
 * Description: Plugin description text
 * Author: Rupok Chowdhury Protik
 * Author URI: https://www.rupokify.com
 * Plugin URI:  https://github.com/rupokify/WordPress-OOP-Plugin-Boilerplate
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}

/**
 * Path to plugin file
 */
define( 'SAMPLE_PLUGIN_FILE', __FILE__ );

/**
 * Current plugin version.
 */
define( 'SAMPLE_PLUGIN', '1.0' );

if ( !class_exists('SamplePlugin') ) {

    /**
     * Class SamplePlugin
     */
    class SamplePlugin {

        /**
         * SamplePlugin constructor.
         */
        public function __construct() {
	        spl_autoload_register( array($this, 'autoload') );
            add_action( 'plugins_loaded', array( $this, 'init' ) );
        }

	    /**
	     * @param $class
	     * Autoload SamplePlugin Classes
	     */
	    public function autoload($class) {
		    if ( is_file( plugin_dir_path( __FILE__ ) . 'includes/' . $class . '.php' ) ) {
			    include_once plugin_dir_path( __FILE__ ) . 'includes/' . $class . '.php';
		    }
	    }

        /**
         * Initialize plugin
         */
        public function init() {
        	new SamplePluginAdminMenu();
            new SamplePluginAdminAssets();
            new SamplePluginCoreActions();
        }
    }
}

new SamplePlugin();
new SamplePluginSetupActions();