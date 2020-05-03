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
    //Подключение admin-ajax.php во фронт
    wp_localize_script( 'valid-ajax', 'myajax', 
		array(
			'url' => admin_url('admin-ajax.php')
		)
	); 
}
add_action( 'wp_enqueue_scripts', 'niko_register_scripts' );


/**
 * Подключение FancyBox для страниц каталога
 */
add_action( 'wp_enqueue_scripts', 'niko_register_fancy' );
function niko_register_fancy () {
    if(is_page_template('foto-items.php')){
        wp_enqueue_style('fancy', "https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" ,array(),null);
        wp_enqueue_script( 'fancy2', "https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js", array('jquery'), '', true );
    }
}

/**
* Подключение скиптов для старницы О нас
 */
add_action( 'wp_enqueue_scripts', 'niko_register_count' );
function niko_register_count () {
    if (is_page('about')) {
        wp_enqueue_script('waypoints', get_template_directory_uri() ."/assets/js/jquery.waypoints.min.js", array('jquery'), null, true );
        wp_enqueue_script( 'countUp', get_template_directory_uri() ."/assets/js/countUp-jquery.js", array('jquery'), null, true );
        wp_enqueue_script( 'about', get_template_directory_uri() ."/assets/js/about.js", array('jquery'), null, true );
    }
}

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

//Функция добавляения шорткода в любое поле ACF
function root_acf_format_value( $value, $post_id, $field ) {	
	$value = do_shortcode($value);
	return $value;
}
add_filter('acf/format_value', 'root_acf_format_value', 10, 3);

//Отключить пагинацию
function custom_redirect_pagination_page() {
   if(is_paged() && !is_category()) {
      wp_redirect(get_permalink(), 301);
   }
}
add_action('template_redirect', 'custom_redirect_pagination_page');

//Функция от дублей страниц с числами в конце URL
    global $posts, $numpages;
    $request_uri = $_SERVER['REQUEST_URI'];
    $result = preg_match('%\/(\d)+(\/)?$%', $request_uri, $matches);
    $ordinal = $result ? intval($matches[1]) : FALSE;
    if(is_numeric($ordinal)) {
        setup_postdata($posts[0]); // yes, hack
        $redirect_to = ($ordinal < 2) ? '/': (($ordinal > $numpages) ? "/$numpages/" : FALSE);
        if(is_string($redirect_to)) {

            // we got us a phantom
            $redirect_url = get_option('home') . preg_replace('%'.$matches[0].'%', $redirect_to, $request_uri);
            $redirect_url = rtrim($redirect_url, '/');
            // if page = 0 or 1, redirect permanently
            if($ordinal < 2) {
                header($_SERVER['SERVER_PROTOCOL'] . ' 301 Moved Permanently');
            } else {
                header($_SERVER['SERVER_PROTOCOL'] . ' 302 Found');
            }
                header("Location: $redirect_url");
                exit();
        }
    }
// END function

//Отправка почты через Ajax Smtp  (action = mail_event) 
 add_action('wp_ajax_mail_event', 'mail_function');
 add_action('wp_ajax_nopriv_mail_event', 'mail_function');

 //Функция очистки от тегов и лишних пробелов
function clear_str($str) {
    return strip_tags(trim($str));
}
//Функция отправки почты Email
function mail_function(){
//Данные для отправки почты
$smtp = require_once get_template_directory().'config/mail-config.php';
//Массив названия форм на сайте (id формы)
$array = require_once get_template_directory().'config/config-form.php';
if ($_POST && !empty($_POST)){
    //Очиста от тегов 
    foreach ($_POST as &$item)
        {
            $item = clear_str($item);
        }         
    // Формируем двухмерный массив, в котором каждый массив имеет два поля: имя поля и значение
    $i = 0;  
    if (array_key_exists($_POST['id'], $array)) {       
        $title = (isset($array[$_POST['id']]['title']) && !empty($array[$_POST['id']]['title']))?$array[$_POST['id']]['title']:'Сообщение с сайта';
        foreach ($array[$_POST['id']]['fields'] as $key=>$item) {  
                foreach ($_POST as $keys=>$post) {
                    if (strtolower($keys) === $key) 
                        {                       
                                $result[$i]['name'] = $item;
                                $result[$i]['value'] = $post;
                                $i++;
                            break;
                        }
            }
        }
    }else {
        $title = 'Сообщение с сайта';
        foreach ($_POST as $keys=>$post) {
              $result[$i]['name'] = $keys;
              $result[$i]['value'] = $post;
            $i++; 
        }
    }
    $email_reply =   (isset($_POST['EMAIL']) && !empty($_POST['EMAIL']))?($_POST['EMAIL']):$smtp['addreply'];   
    
        $body = "<!DOCTYPE html>"; // создаем тело письма
        $body .= "<html><head>"; // структуру я минимизирую, шаблонов в сети много, либо создайте свой
        $body .= "<meta charset='UTF-8' />";
        $body .= "<title>".$title."</title>";
        $body .= "</head><body>";
        $body .= "<table><tr><td>";
        $body .= "<table style='width:600px; border-spacing: 10px; border: 1px solid silver; padding: 10px; font-size:20px;'><tr><td>";
        $body .= "<tr><td ><h3 style='text-align:center; border-bottom: 1px solid silver; color:#82b3f9;'>".$title."</h3></td></tr>"; 
                foreach ($result as $value) {               
                    $body .= "<tr><td><strong>".ucfirst($value['name']).":</strong> ".nl2br($value['value'])."</td></tr>"; 
                } 
        $body .= "<tr><td></td></tr>"; 
        $body .= "<tr style='cellpadding: 10px;'><td style='text-align:center; border-top: 1px solid silver;'><em>All rights reserved | Copyright &copy; Atlas&Comp ".date("d-m-Y")."</em></td></tr>";
        $body .= "</table></td></tr></table>";
        $body .= "</body></html>";         
}   
        $headers = array(
                        'content-type: text/html; charset=utf-8',
                        'Reply-To:'. $email_reply
            );
        
        if(wp_mail($smtp['from-mail'], htmlspecialchars($title), $body, $headers)) 
           {
                wp_send_json([
                                    'status'=> true,
                                    'message' => 'Ожидайте. Мы свяжемся с вами!'
                                ]);
                                
            }else {
                wp_send_json([
                                    'status'=> false,
                                    'message' => 'Ошибка! Попробуйте позже'
                                ]);             
            }  
 }
 
    
