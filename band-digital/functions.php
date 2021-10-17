<?php 

// Есть ли эта функция, если нет то создаем её
//(не запускалась ли такая функция до этого)

if(! function_exists('band_digital_setup')){
    function band_digital_setup() {
// Создаем  пользовательский логотип
        add_theme_support('custom-logo', [
            // смотрим какой у нас логотип по высоте ширине
            'height'      => 50,
            'width'       => 130,
            'flex-width'  => false,
            'flex-height' => false,
            'header-text' => '',
            'unlink-homepage-logo' => false, // WP 5.5
        ]);
        //Добавляем динамический <title>
        add_theme_support( 'title-tag');
        // Подключаем миниатюры для постов и страниц
        add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 730, 480, true ); // размер миниатюры поста по умолчанию
    }
    add_action('after_setup_theme', 'band_digital_setup');
}




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

// Регистрируем несколько меню

function band_digital_menus(){
    // собираем несколько зон (областей) меню
    $locations = array(
        'header' => __('Header Menu', 'band_digital'),
        'footer' => __('Footer Menu', 'band_digital'),
    );
    // регистрируем области меню, которые лежат в переменной $locations
    register_nav_menus($locations);
}
// хук-событие
add_action('init','band_digital_menus');

// // добавим класс nav-item ко всем пунктам меню
// add_filter('nav_menu_css_class','custom_nav_menu_css_class', 10,1);
// // получаем список всех классов пунктов меню
// function custom_nav_menu_css_class($classes){
//     // добавляем к списку классов свой класс nav-item
//     $classes[] = 'nav-item';
//     // возвращаем список классов уже с нашим классом
//     return $classes;
// }

// // повесим на все ссылки класс nav-link
// add_filter('nav_menu_link_attributes','custom_nav_menu_link_attributes', 10);
// function custom_nav_menu_link_attributes($atts){
//     $atts['class'] = 'nav-link';
//     return $atts;
// }


class bootstrap_4_walker_nav_menu extends Walker_Nav_menu {
    
    function start_lvl( &$output, $depth = 0, $args = array()  ){ // ul
        $indent = str_repeat("\t",$depth); // indents the outputted HTML
        $submenu = ($depth > 0) ? ' sub-menu' : '';
        $output .= "\n$indent<ul class=\"dropdown-menu$submenu depth_$depth\">\n";
    }
  
  function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ){ // li a span
        
    $indent = ( $depth ) ? str_repeat("\t",$depth) : '';
    
    $li_attributes = '';
        $class_names = $value = '';
    
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        
        $classes[] = ($args->walker->has_children) ? 'dropdown' : '';
        $classes[] = ($item->current || $item->current_item_anchestor) ? 'active' : '';
        $classes[] = 'nav-item';
        $classes[] = 'nav-item-' . $item->ID;
        if( $depth && $args->walker->has_children ){
            $classes[] = 'dropdown-menu';
        }
        
        $class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter( $classes ), $item, $args ) );
        $class_names = ' class="' . esc_attr($class_names) . '"';
        
        $id = apply_filters('nav_menu_item_id', 'menu-item-'.$item->ID, $item, $args);
        $id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';
        
        $output .= $indent . '<li ' . $id . $value . $class_names . $li_attributes . '>';
        
        $attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .= ! empty( $item->target ) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
        $attributes .= ! empty( $item->url ) ? ' href="' . esc_attr($item->url) . '"' : '';
        
        $attributes .= ( $args->walker->has_children ) ? ' class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"' : ' class="nav-link"';
        
        $item_output = $args->before;
        $item_output .= ( $depth > 0 ) ? '<a class="dropdown-item"' . $attributes . '>' : '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;
        
        $output .= apply_filters ( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    
    }
    
}

## отключаем создание миниатюр файлов для указанных размеров
add_filter( 'intermediate_image_sizes', 'delete_intermediate_image_sizes' );
function delete_intermediate_image_sizes( $sizes ){
	// размеры которые нужно удалить
	return array_diff( $sizes, [
		'medium_large',
		'large',
		'1536x1536',
		'2048x2048',
	] );
}


// удаляет H2 из шаблона пагинации
add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
function my_navigation_template( $template, $class ){
	/*
	Вид базового шаблона:
	<nav class="navigation %1$s" role="navigation">
		<h2 class="screen-reader-text">%2$s</h2>
		<div class="nav-links">%3$s</div>
	</nav>
	*/

	return '
	<nav class="navigation %1$s" role="navigation">
		<div class="nav-links">%3$s</div>
	</nav>    
	';
}

// выводим пагинацию
the_posts_pagination( array(
	'end_size' => 2,
) ); 

?>