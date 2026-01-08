<?php
namespace SWM;

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class Plugin {

    public static function init() {
        require_once SWM_PATH . 'includes/class-workflow.php';
        require_once SWM_PATH . 'includes/class-admin-ui.php';
        require_once SWM_PATH . 'includes/class-notifications.php';

        new Workflow();
        new Admin_UI();
        new Notifications();
    }
}
