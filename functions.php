<?php
if (!function_exists('wpc_load_assets')){
function wpc_load_assets()
{
    $base = get_template_directory_uri() . '/';

    wp_enqueue_style('wpc_bootstrap', $base . 'assets/css/bootstrap.css', [], false);
    wp_enqueue_style('wpc_fontsawesome', $base . 'assets/css/font-awesome.min.css', ['wpc_bootstrap'], false);
    wp_enqueue_style('wpc_templete-style', $base . 'assets/theme-style.css', [], false);
    wp_enqueue_style('wpc_templete-responsive', $base . 'assets/css/responsive.css', [], false);
    wp_enqueue_style('wpc_templete-colors', $base . 'assets/css/colors.css', [], false);

    // wp_enqueue_script('wpc_jq-script', $base . 'assets/js/jquery.min.js', [], false, true);
    wp_enqueue_script('jquery');
    wp_enqueue_script('wpc_tether-script', $base . 'assets/js/tether.min.js', [], false, true);
    wp_enqueue_script('wpc_bootstrap-script', $base . 'assets/js/bootstrap.min.js', [], false, true);
    wp_enqueue_script('wpc_custom-script', $base . 'assets/js/custom.js', [], false, true);

}
add_action('wp_enqueue_scripts', 'wpc_load_assets');
} else {
    //notify the admin
}

// method to update library like jquery

// if (!function_exists('wpc_redefine_assets')){
//     function wpc_redefine_assets()
//     {
//         wp_deregister_script('jquery');
//         wp_register_script('jquery', 'https://code.jquery.com/jquery-3.7.0.min.js');
//     }
// add_action('wp_enqueue_scripts', 'wp_redefine_assets');
// }
if (!function_exists('wpc_setup')) {
    function wpc_setup()
    {
        add_theme_support('post-thumbnails');
    }
    add_action('after_setup_theme', 'wpc_setup');
}
