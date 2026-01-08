<?php
/**
 * Plugin Name: Smart Workflow Manager
 * Author: Abhishek Zagade
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'SWM_PATH', plugin_dir_path( __FILE__ ) );
define( 'SWM_URL', plugin_dir_url( __FILE__ ) );

require_once SWM_PATH . 'includes/class-plugin.php';

function swm_run_plugin() {
    \SWM\Plugin::init();
}
swm_run_plugin();
