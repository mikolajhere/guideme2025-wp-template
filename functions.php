<?php

/**
 * Theme functions and definitions
 *
 * @package guideme2025
 */

function guideme_2025_enqueue_styles()
{
    wp_enqueue_style(
        "guideme-2025-style",
        get_template_directory_uri() . "/assets/style/output.css",
        [],
        "1.0",
        "all"
    );

    // Enqueue Swiper CSS from CDN
    wp_enqueue_style(
        "swiper-css",
        "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css", // Or swiper.min.css for a smaller bundle
        [],
        "11.0", // Use Swiper's version
        "all"
    );
}
add_action("wp_enqueue_scripts", "guideme_2025_enqueue_styles");

function guideme_2025_enqueue_scripts()
{
    // If Alpine.js is independent and you want it in the header
    wp_enqueue_script(
        "guideme-2025-alpine",
        get_template_directory_uri() . "/assets/js/alpine.js",
        [],
        "1.0",
        false
    );

    // Enqueue Swiper JS from CDN (full bundle including modules)
    // This script should be loaded before your slider_simple.js
    wp_enqueue_script(
        "swiper-js",
        "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js", // This includes Navigation, Pagination, etc.
        [], // No direct dependencies for the main Swiper file
        "11.0", // Use Swiper's version
        true // Load in footer is generally fine for Swiper, but can be false if needed earlier
    );

    // Your custom slider script, depending on Swiper
    wp_enqueue_script(
        "guideme-2025-slider-simple",
        get_template_directory_uri() . "/assets/js/slider_simple.js",
        ["swiper-js"], // Make sure your script loads after Swiper
        "1.0",
        true // Load in footer
    );
}
add_action("wp_enqueue_scripts", "guideme_2025_enqueue_scripts");


function guideme_2025_menus()
{
    register_nav_menus([
        "header-left" => "Header-left",
        "header-right" => "Header-right",
        "footer" => "Footer",
        "hp-header-left" => "hp-header-left",
        "hp-header-right" => "hp-header-right",
    ]);
}
add_action("init", "guideme_2025_menus");


function remove_unnecessary_scripts_and_styles_for_logged_out()
{
    if (! is_user_logged_in()) {
        wp_dequeue_style('global-styles');

        wp_dequeue_style('wp-block-library-theme');
        wp_dequeue_style('wp-block-library');
        remove_action('wp_head', 'print_emoji_detection_script', 7);
        remove_action('admin_print_scripts', 'print_emoji_detection_script');
        remove_action('wp_print_styles', 'print_emoji_styles');
        remove_action('admin_print_styles', 'print_emoji_styles');
        remove_filter('the_content_feed', 'wp_staticize_emoji');
        remove_filter('comment_text_rss', 'wp_staticize_emoji');
        remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
        add_filter('tiny_mce_plugins', 'disable_emojis_tinymce');

        remove_action('wp_enqueue_scripts', 'wp_enqueue_emoji_styles');

        wp_dequeue_style('classic-theme-styles');
    }
}
add_action('wp_enqueue_scripts', 'remove_unnecessary_scripts_and_styles_for_logged_out', 100);


// enable post thumbnails
add_theme_support('post-thumbnails');
