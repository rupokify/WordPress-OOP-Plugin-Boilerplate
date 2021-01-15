<?php

if ( !class_exists('SamplePluginCoreActions') ) {

    /**
     * Class SamplePluginCoreActions
     */
    class SamplePluginCoreActions
    {
        /**
         * SamplePluginCoreActions constructor.
         */
        public function __construct()
        {
            $this->helloWorld();
        }

        /**
         * Your core action output
         */
        protected function helloWorld() {
            // SamplePlugin Core Actions
        }

    }

}