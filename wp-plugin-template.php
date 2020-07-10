<?php

/**
 * Plugin Name: WP Plugin Template
 * Description: The description of the plugin
 * Version: 1.0.0
 * Author: You
 */

include __DIR__ . '/src/class-wp-plugin-template-initializer.php';

$plugin = new WP_Plugin_Template_Initializer(__FILE__);

$plugin->init();
