<?php

class WP_Plugin_Template
{
    protected $file;

    public function __construct(string $file)
    {
        $this->file = $file;

        $this-init();
    }

    public function init()
    {
        // TODO
    }
}
