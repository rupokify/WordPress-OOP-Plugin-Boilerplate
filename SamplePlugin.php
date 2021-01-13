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
            add_action( 'plugins_loaded', array( $this, 'init' ) );
        }

        /**
         * Initialize plugin
         */
        public function init() {
            include_once 'includes/SamplePluginAdminMenu.php';
            include_once 'includes/SamplePluginAdminAssets.php';
            include_once 'includes/SamplePluginSetupActions.php';
            include_once 'includes/SamplePluginCoreActions.php';

            new SamplePluginAdminMenu();
            new SamplePluginAdminAssets();
            new SamplePluginSetupActions();
        }
    
    }

}

new SamplePlugin();