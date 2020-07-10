<?php

class WP_Plugin_Template_Initializer
{
    protected $file;

    public function __construct(string $file)
    {
        $this->file = $file;

        $this->loadDependencies();

        // register plugin activation/deactivation hooks
        register_activation_hook( $this->file, array( $this, 'activate' ) );
        register_deactivation_hook( $this->file, array( $this, 'deactivate' ) );
    }

    private function loadDependencies()
    {
        $dependencies = [
            'class-wp-plugin-template.php'
        ];

        foreach ($dependencies as $dependency) {
            include __DIR__ . DIRECTORY_SEPARATOR . $dependency;
        }
    }

    public function activate()
    {
        // TODO
    }

    public function deactivate()
    {
        // TODO
    }

    public function init()
    {
        return new WP_Plugin_Template($this->file);
    }
}
