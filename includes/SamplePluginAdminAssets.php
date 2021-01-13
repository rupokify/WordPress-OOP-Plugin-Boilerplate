<?php

if ( !class_exists('SamplePluginAdminAssets') ) {

    /**
     * Class SamplePluginAdminAssets
     */
    class SamplePluginAdminAssets {

        /**
         * SamplePluginAdminAssets constructor.
         */
        public function __construct() {
            $this->setupAssets();
        }

        /**
         * Enqueue scripts and styles
         */
        public function setupAssets() {
            add_action( "admin_enqueue_scripts", array( $this, 'samplePluginScripts' ) );
            add_action( "admin_enqueue_scripts", array( $this, 'samplePluginStyles' ) );
        }

        /**
         * @param $hook
         * Enqueue scripts
         */
        public function samplePluginScripts($hook) {
            global $samplePluginMenu;

            if( $hook != $samplePluginMenu ) {
                return;
            }

            wp_enqueue_script( 'sample-plugin-script', plugin_dir_url( __DIR__ ) . 'assets/js/script.js' );
        }

        /**
         * @param $hook
         * Enqueue styles
         */
        public function samplePluginStyles($hook) {
            global $samplePluginMenu;

            if( $hook != $samplePluginMenu ) {
                return;
            }

            wp_enqueue_style( 'sample-plugin-style', plugin_dir_url( __DIR__ ) . 'assets/css/style.css' );
        }

    }

}