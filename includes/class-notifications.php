<?php
namespace SWM;

class Notifications {

    public function __construct() {
        add_action(
            'transition_post_status',
            [ $this, 'send_notification' ],
            10,
            3
        );
    }

    public function send_notification( $new, $old, $post ) {
        if ( 'in_review' === $new ) {
            wp_mail(
                get_option( 'admin_email' ),
                'Post Pending Review',
                'The post "' . $post->post_title . '" is ready for review.'
            );
        }
    }
}
