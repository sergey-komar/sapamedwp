<?php
function sapamed_scripts() {
	wp_enqueue_style( 'sapamed-style', get_stylesheet_uri());
	wp_enqueue_style( 'sapamed-main', get_template_directory_uri() . '/assets/css/style.min.css', [], 1.0);
   
   
    wp_enqueue_script( 'sapamed-main', get_template_directory_uri() . '/assets/js/main.min.js', [], 1.0, true );	
}
add_action( 'wp_enqueue_scripts', 'sapamed_scripts' );


add_action('after_setup_theme', 'sapamed_setup');
  function sapamed_setup(){

    add_theme_support('custom-logo');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support( 'custom-background' );    
  }


  register_nav_menus(
    array(
        'menu-header' => esc_html__( 'Шапка', 'sapamed' ),
        'menu-footer' => esc_html__( 'Подвал', 'sapamed' ) ,
		'menu-footer-page' => esc_html__( 'Подвал-страницы', 'sapamed' ) 
    )
);

add_filter( 'nav_menu_css_class', 'avoa_filter', 10, 4 );
function avoa_filter(){
$newClasses = ['menu__list-item']; 

return $newClasses;
}


add_filter( 'nav_menu_item_id', 'filter_function_name_471', 10, 4 );
function filter_function_name_471( $menu_id, $item, $args, $depth ){
return '';
}


add_filter( 'nav_menu_link_attributes', 'filter_function_name_3020', 10, 4 );
function filter_function_name_3020( $atts, $item, $args, $depth ){

$atts ['class'] = 'menu__list-link';
if($atts['aria-current'] === 'page'){
    $atts ['class'] .= ' active';
}
return $atts;
}


if( function_exists('acf_add_options_page') ) {
	
    acf_add_options_page(array(
        'page_title' 	=> 'Основные настройки',
        'menu_title'	=> 'Настройки темы',
        'menu_slug' 	=> 'theme-general-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    )); 
}




// Регистрируем новый тип записей Эксперты
add_action('init', 'my_custom_init',0);
function my_custom_init(){
register_post_type('experts', array(
    'labels'             => array(
        'name'               => __('Эксперты'), // Основное название типа записи
        'singular_name'      => __('Эксперты'), // отдельное название записи типа Book
        'add_new'            => __('Добавить Эксперты'),
        'add_new_item'       => __('Добавить новые Эксперты'),
        'edit_item'          => __('Редактировать Эксперты'),
        'new_item'           => __('Новые Эксперты'),
        'view_item'          => __('Посмотреть Эксперты'),
        'search_items'       => __('Найти Эксперты'),
        'not_found'          => __('Экспертов не найдено'),
        'not_found_in_trash' => __('В корзине услуг не найдено'),
        'parent_item_colon'  => __(''),
        'menu_name'          => __('Эксперты')

      ),
    'public'             => true,
    'has_archive'        => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => true,
    'capability_type'    => 'post',
    
    'menu_icon'			 => 'dashicons-admin-site-alt2',
    'hierarchical'       => true,
    'menu_position'      => null,
    // 'taxonomies'          => array( 'category' ),//Добавляем категории
    'supports'           => array('title','editor','thumbnail','excerpt','custom-fields')
) );





register_post_type('reviews', array(
    'labels'             => array(
        'name'               => __('Отзывы'), // Основное название типа записи
        'singular_name'      => __('Отзывы'), // отдельное название записи типа Book
        'add_new'            => __('Добавить Отзывы'),
        'add_new_item'       => __('Добавить новые Отзывы'),
        'edit_item'          => __('Редактировать Отзывы'),
        'new_item'           => __('Новые Отзывы'),
        'view_item'          => __('Посмотреть Отзывы'),
        'search_items'       => __('Найти Отзывы'),
        'not_found'          => __('Отзывов не найдено'),
        'not_found_in_trash' => __('В корзине услуг не найдено'),
        'parent_item_colon'  => __(''),
        'menu_name'          => __('Отзывы')

      ),
    'public'             => true,
    'has_archive'        => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => true,
    'capability_type'    => 'post',
    
    'menu_icon'			 => 'dashicons-admin-site-alt2',
    'hierarchical'       => true,
    'menu_position'      => null,
    // 'taxonomies'          => array( 'category' ),//Добавляем категории
    'supports'           => array('title','editor','thumbnail','excerpt','custom-fields')
) );



register_post_type('doctor', array(
    'labels'             => array(
        'name'               => __('Врачи'), // Основное название типа записи
        'singular_name'      => __('Врачи'), // отдельное название записи типа Book
        'add_new'            => __('Добавить Врачи'),
        'add_new_item'       => __('Добавить новые Врачи'),
        'edit_item'          => __('Редактировать Врачи'),
        'new_item'           => __('Новые Врачи'),
        'view_item'          => __('Посмотреть Врачи'),
        'search_items'       => __('Найти Врачи'),
        'not_found'          => __('Врачей не найдено'),
        'not_found_in_trash' => __('В корзине услуг не найдено'),
        'parent_item_colon'  => __(''),
        'menu_name'          => __('Врачи')

      ),
    'public'             => true,
    'has_archive'        => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => true,
    'capability_type'    => 'post',
    
    'menu_icon'			 => 'dashicons-admin-site-alt2',
    'hierarchical'       => true,
    'menu_position'      => null,
    // 'taxonomies'          => array( 'category' ),//Добавляем категории
    'supports'           => array('title','editor','thumbnail','excerpt','custom-fields')
) );




}



