<?php

function my_styles ()
{
    $theme_uri = get_template_directory_uri();
    $theme_path = get_template_directory();

    // INDEX STYLES
    wp_enqueue_style(
        'main-theme-style',
        $theme_uri . '/style.css',
        array(),
        filemtime($theme_path . '/style.css')
    );

    // MAIN STYLES
    wp_enqueue_style(
        'main-style',
        $theme_uri . '/assets/css/main.css',
        array(),
        filemtime($theme_path . '/assets/css/main.css')
    );

    // HEADER STYLES
        wp_enqueue_style(
        'header-style',
        $theme_uri . '/assets/css/header/header.css',
        array(),
        filemtime($theme_path . '/assets/css/header/header.css')
    );

    // CONTENT STYLES
    wp_enqueue_style(
        'main-style',
        $theme_uri . '/assets/css/content/content.css',
        array(),
        filemtime($theme_path . '/assets/css/content/content.css')
    );


    // FOOTER STYLES
        wp_enqueue_style(
        'footer-style',
        $theme_uri . '/assets/css/footer/footer.css',
        array(),
        filemtime($theme_path . '/assets/css/footer/footer.css')
    );
}

add_action('wp_enqueue_scripts', 'my_styles');
