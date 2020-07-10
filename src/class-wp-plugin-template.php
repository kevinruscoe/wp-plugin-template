<?php

class WP_Plugin_Template
{
    protected $file;

    public function __construct(string $file)
    {
        $this->file = $file;

        // register plugin activation/deactivation hooks
        register_activation_hook( $this->file, array( $this, 'activate' ) );
        register_deactivation_hook( $this->file, array( $this, 'deactivate' ) );
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
