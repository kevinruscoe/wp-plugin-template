<?php

class WP_Plugin_Template
{
    const PLUGIN_NAME = "M";

    public function __construct()
    {
        // register plugin activation/deactivation hooks
        register_activation_hook( __FILE__, array( $this, 'activate' ) );
        register_deactivation_hook( __FILE__, array( $this, 'deactivate' ) );

    }

    public function activate()
    {
        // TODO
    }

    public function deactivate()
    {
        // TODO
    }

    public function run()
    {
        // TODO
    }
}
