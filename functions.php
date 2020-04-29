<?php
/**
 * Register and Enqueue Styles.
 */
function niko_register_styles() {
    //получть версию Темы
    $theme_version = wp_get_theme()->get( 'Version' );
    // Подключить стили
    wp_enqueue_script('webfont', 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js', array(), null, false);
    wp_enqueue_script('fonts', get_template_directory_uri().'/assets/js/fonts.js', array(), null, false);
    wp_enqueue_style('niko-basic-style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.css',array(), null );
    wp_enqueue_style('aos', get_template_directory_uri().'/assets/css/aos.css',array(),null );
    wp_enqueue_style('custom', get_template_directory_uri().'/assets/css/custom.css',array(),null );
    wp_enqueue_style('icons', get_template_directory_uri().'/assets/css/icons.css' ,array(),null);
    wp_enqueue_style('magnific', get_template_directory_uri().'/assets/css/magnific-popup.css',array(),null );
}
add_action( 'wp_enqueue_scripts', 'niko_register_styles' );

/**
 * Register and Enqueue Scripts.
 */
function niko_register_scripts() {
    $theme_version = wp_get_theme()->get( 'Version' );
    //Подключение стилей
    wp_deregister_script('jquery');
    wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js', array(), null, true );
    wp_enqueue_script( 'aos', get_template_directory_uri() . '/assets/js/aos.js', array('jquery'), $theme_version, true );

    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), $theme_version, true );
    wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), $theme_version, true );
    wp_enqueue_script( 'validate', get_template_directory_uri() . '/assets/js/jquery.validate.min.js', array('jquery'), $theme_version, true );
    wp_enqueue_script( 'smooth-scroll', get_template_directory_uri() . '/assets/js/jquery.smooth-scroll.min.js', array('jquery'), $theme_version, true );
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), $theme_version, true );
    wp_enqueue_script( 'valid-ajax', get_template_directory_uri() . '/assets/js/valid-ajax.js', array('jquery'), $theme_version, true );
    wp_enqueue_script( 'jquery-maskedinput', get_template_directory_uri() . '/assets/js/jquery.maskedinput.min.js', array('jquery'), $theme_version, true );
    wp_enqueue_script( 'goodshare', 'https://cdn.jsdelivr.net/jquery.goodshare.js/3.2.8/goodshare.min.js', array('jquery'), $theme_version, true );
    //wp_script_add_data( 'twentytwenty-js', 'async', true );

}

add_action( 'wp_enqueue_scripts', 'niko_register_scripts' );

