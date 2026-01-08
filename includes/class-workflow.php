<?php
namespace SWM;

class Workflow {

    public function __construct() {
        add_action( 'init', [ $this, 'register_status' ] );
    }

    public function register_status() {
        register_post_status(
            'in_review',
            [
                'label'                     => 'In Review',
                'public'                    => false,
                'show_in_admin_status_list' => true,
                'show_in_admin_all_list'    => true,
                'label_count'               => _n_noop(
                    'In Review (%s)',
                    'In Review (%s)'
                ),
            ]
        );
    }
}
