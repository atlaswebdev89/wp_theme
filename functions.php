<?php

/**
 * Register and Enqueue Styles.
 */

/*
 * Функции для добавления версии к подключаемым стилям и скриптам С помощью данной функции нет необходимости очищать кеш браузера
 */
function enqueue_versioned_script( $handle, $src = false, $deps = array(), $in_footer = true ) {
	wp_enqueue_script( $handle, get_stylesheet_directory_uri() . $src, $deps, filemtime( get_stylesheet_directory() . $src ), $in_footer );
}
function enqueue_versioned_style( $handle, $src = false, $deps = array(), $media = 'all' ) {
	wp_enqueue_style( $handle, get_stylesheet_directory_uri() . $src, $deps = array(), filemtime( get_stylesheet_directory() . $src ), $media );
}

function niko_register_styles() {
    //получть версию Темы
    $theme_version = wp_get_theme()->get( 'Version' );
    // Подключить стили и фон (важен порядок для стилей!!??)  
    wp_enqueue_script('webfont', 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js', array(), null, true);
    wp_enqueue_script('fonts', get_template_directory_uri().'/assets/js/fonts.js', array(), null, true);
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.css',array(), null );
    wp_enqueue_style('aos', get_template_directory_uri().'/assets/css/aos.css',array(),null );
    enqueue_versioned_style('custom','/assets/css/custom.css');
    wp_enqueue_style('icons', get_template_directory_uri().'/assets/css/icons.css' ,array(),null);
    wp_enqueue_style('magnific', get_template_directory_uri().'/assets/css/magnific-popup.css',array(),null );
    enqueue_versioned_style('niko-basic-style', '/style.css');
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
}
add_action( 'wp_enqueue_scripts', 'niko_register_scripts' );

/**
 * Register Menu
 */
if (function_exists('register_nav_menu')) {
      register_nav_menus(array(
            'main_menu' => 'Главное меню',
            'sidebar_menu' => 'Меню Сайдбар',
      ));
}
//Кастомизация элементов меню
add_filter( 'nav_menu_css_class', 'change_menu_item_css_classes', 10, 4 );
function change_menu_item_css_classes($classes) {
	return $classes[] ='';
}
add_filter( 'nav_menu_item_id', '__return_empty_string' );

// Подключение необходимых элементов управления темой
function atlas_theme_support(){
        add_theme_support('custom-logo');
        add_theme_support('post-thumbnails');
}
add_action( 'after_setup_theme', 'atlas_theme_support' );


