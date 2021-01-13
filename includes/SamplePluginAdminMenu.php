<?php

if ( !class_exists('SamplePluginAdminMenu') ) {

    /**
     * Class SamplePluginAdminMenu
     */
    class SamplePluginAdminMenu {

        /**
         * SamplePluginAdminMenu constructor.
         */
        public function __construct() {
            $this->setupAdminMenu();
        }

        /**
         * Hooks into admin_menu
         */
        public function setupAdminMenu() {
            add_action( 'admin_menu', array( $this, 'addAdminMenu' ) );
        }

        /**
         * Register settings menu page(s)
         */
        public function addAdminMenu() {
            global $samplePluginMenu;

            $samplePluginMenu = add_menu_page(
                'Sample Plugin Menu Title',                 // Title, html meta tag
                'Sample Menu',                              // Menu title, hardcoded style
                'edit_pages',                               // capability
                'sample-plugin-settings',                   // URL
                array( $this, 'adminMenuPageContent' ),     // output
                'dashicons-menu',                           // icon, uses default
                66                                          // position, showing on top of all others
            );

        }

        /**
         * Settings menu page content
         */
        public function adminMenuPageContent() {
            ?>
                <h2>Sample Plugin Settings Page</h2>
                <p> Sample Plugin content</p>
            <?php
        }

    }

}