<?php
// SCRIPTS

add_action('wp_enqueue_scripts', 'tks_enqueue_scripts', 1);

function tks_enqueue_scripts()
{
    $min = (in_array($_SERVER['REMOTE_ADDR'], array('127.0.0.1', '::1', '10.0.0.3'))) ? '' : '.min';

    if (empty($min)) :
        wp_enqueue_script('tks-livereload', 'http://localhost:35729/livereload.js?snipver=1', array(), null, true);
    endif;

    wp_register_script('tks-script', TKS_URL . 'assets/js/tunkers' . $min . '.js', array('jquery'), TKS_VERSION, true);
    wp_enqueue_script('tks-script');
    wp_localize_script('tks-script', 'ajax_object', array('ajax_url' => admin_url('admin-ajax.php')));

    wp_enqueue_style('tks-style', TKS_URL . '/assets/css/tunkers.css', array(), TKS_VERSION);
}
