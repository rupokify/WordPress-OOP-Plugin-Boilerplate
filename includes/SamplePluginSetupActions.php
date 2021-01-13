<?php

if ( !class_exists('SamplePluginSetupActions')) {

    /**
     * Class SamplePluginSetupActions
     */
    class SamplePluginSetupActions {

        /**
         * SamplePluginSetupActions constructor.
         */
        public function __construct() {
            $this->setupActions();
        }

        /**
         * Register activation/deactivation hook
         */
        protected function setupActions() {
            register_activation_hook( SAMPLE_PLUGIN_FILE, array('SamplePlugin', 'activate' ) );
            register_deactivation_hook( SAMPLE_PLUGIN_FILE, array('SamplePlugin', 'deactivate' ) );
        }

        /**
         * Activation actions
         */
        public static function activate() {
            //Activation code goes here
        }

        /*
         * Deactivation actions
         */
        public static function deactivate() {
            //Deactivation code goes here
        }  
        
    }

}