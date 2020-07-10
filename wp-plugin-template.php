<?php

/**
 * Plugin Name: WP Plugin Template
 * Description: The description of the plugin
 * Version: 1.0.0
 * Author: You
 */

include __DIR__ . '/src/class-wp-plugin-template.php';

$plugin = new WP_Plugin_Template(__FILE__);

$plugin->run();
