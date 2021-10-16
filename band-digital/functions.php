<?php 
/*
Подключение стилей и скриптов
*/

add_action( 'wp_enqueue_scripts', 'band_digital_scripts' );

//array('main') - этот идинтифактор либо пуст array(), либо показывает от какого файла зависит, и какой файл должен выполниться вначале (Думаю, можно указывать все по порядку)

function band_digital_scripts(){
    // подключаем главный style.css
    wp_enqueue_style( 'main', get_stylesheet_uri());
    // bootstrap css
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/plugins/bootstrap/css/bootstrap.css', array('main'));
    // Iconfont css
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/plugins/fontawesome/css/all.css', array('main'));
    // Animate.css
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/plugins/animate-css/animate.css', array('main'));
    // Icofont
    wp_enqueue_style( 'icofont', get_template_directory_uri() . '/plugins/icofont/icofont.css', array('main'));
    // подключаем наш главный style.css
    wp_enqueue_style( 'band-digital', get_template_directory_uri() . '/css/style.css', array('icofont'));

    // true в подключении скриптов - подключить в подвале перед закрывающим body
    // Переподключаем Jquery
    wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri() . '/plugins/jquery/jquery.min.js', array(), null, true);
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'popper', get_template_directory_uri() . '/plugins/bootstrap/js/popper.min.js', array('jquery'), null, true);
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/plugins/bootstrap/js/bootstrap.min.js', array('jquery'), null, true);
    wp_enqueue_script( 'wow', get_template_directory_uri() . '/plugins/counterup/wow.min.js', array('jquery'), null, true);
    wp_enqueue_script( 'easing', get_template_directory_uri() . '/plugins/counterup/jquery.easing.1.3.js', array('jquery'), null, true);
    wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/plugins/counterup/jquery.waypoints.js', array('jquery'), null, true);
    wp_enqueue_script( 'counterup', get_template_directory_uri() . '/plugins/counterup/jquery.counterup.min.js', array('jquery'), null, true);
    wp_enqueue_script( 'google-map', get_template_directory_uri() . '/plugins/google-map/gmap3.min.js', array('jquery'), null, true);
    wp_enqueue_script( 'contact', get_template_directory_uri() . '/plugins/jquery/contact.js', array('jquery'), null, true);
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), null, true);







}

?>