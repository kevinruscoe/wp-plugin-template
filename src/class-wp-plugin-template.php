<?php

class WP_Plugin_Template
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

    /**
     * Load any additional resouces (classes, helpers, etc).
     *
     * @return void
     */
    private function loadDependencies()
    {
        $dependencies = [
            
        ];

        foreach ($dependencies as $dependency) {
            include __DIR__ . DIRECTORY_SEPARATOR . $dependency;
        }
    }

    /**
     * Activate the plugin.
     *
     * @return void
     */
    public function activate()
    {
        // TODO
    }

    /**
     * Deactivate the plugin.
     *
     * @return void
     */
    public function deactivate()
    {
        // TODO
    }

    /**
     * The core function.
     *
     * @return void
     */
    public function run()
    {
        // TODO
    }
}
