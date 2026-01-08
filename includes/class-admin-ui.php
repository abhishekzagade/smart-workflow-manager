<?php
namespace SWM;

class Admin_UI {

    public function __construct() {
        add_action( 'add_meta_boxes', [ $this, 'add_meta_box' ] );
        add_action( 'save_post', [ $this, 'save_status' ] );
        add_action( 'admin_enqueue_scripts', [ $this, 'enqueue_assets' ] );
    }

    public function add_meta_box() {
        add_meta_box(
            'swm_workflow_box',
            'Workflow Status',
            [ $this, 'render_meta_box' ],
            'post',
            'side'
        );
    }

    public function render_meta_box( $post ) {
        wp_nonce_field( 'swm_save_status', 'swm_nonce' );
        ?>
        <select name="swm_status">
            <option value="draft">Draft</option>
            <option value="in_review" <?php selected( $post->post_status, 'in_review' ); ?>>
                In Review
            </option>
            <option value="publish">Publish</option>
        </select>
        <?php
    }

    public function save_status( $post_id ) {
        if (
            ! isset( $_POST['swm_nonce'] ) ||
            ! wp_verify_nonce( $_POST['swm_nonce'], 'swm_save_status' )
        ) {
            return;
        }

        if ( ! current_user_can( 'edit_post', $post_id ) ) {
            return;
        }

        if ( isset( $_POST['swm_status'] ) ) {
            wp_update_post(
                [
                    'ID'          => $post_id,
                    'post_status' => sanitize_text_field( $_POST['swm_status'] ),
                ]
            );
        }
    }

    public function enqueue_assets() {
        wp_enqueue_style(
            'swm-admin',
            SWM_URL . 'assets/css/admin.css'
        );
        wp_enqueue_script(
            'swm-admin',
            SWM_URL . 'assets/js/admin.js',
            [ 'jquery' ],
            null,
            true
        );
    }
}
