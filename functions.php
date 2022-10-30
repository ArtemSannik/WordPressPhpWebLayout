<?php
add_action('wp_enqueue_scripts','addScripts');
add_action('wp_enqueue_scripts', 'addStyle');
add_theme_support('customlogo');

function addScripts(){
    wp_deregister_script('jquery-core');
    wp_register_script('jquery-core', get_template_directory_uri().'/assets/js/jquery-3.6.1.min.js');
    wp_enqueue_script('jquery');
}
function addStyle(){
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css');
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action( 'init', 'dveri_custom_post_type');

function dveri_custom_post_type(){

	register_taxonomy( 'catagory_door', [ 'doors' ], [
		'label'                 => 'Категории', // определяется параметром $labels->name
		'labels'                => array(
			'name'              => 'Категория',
			'singular_name'     => 'Раздел Категории',
			'search_items'      => 'Искать Раздел Категорию',
			'all_items'         => 'Все Разделы Категории',
			'parent_item'       => 'Родит. раздел Категориия',
			'parent_item_colon' => 'Родит. раздел Категория:',
			'edit_item'         => 'Ред. Раздел Категории',
			'update_item'       => 'Обновить Раздел Категории',
			'add_new_item'      => 'Добавить Раздел Категорию',
			'new_item_name'     => 'Новый Раздел Категория',
			'menu_name'         => 'Раздел Категория',
		),
		'description'           => 'Рубрики для раздела Категории', // описание таксономии
		'public'                => true,
		'show_in_nav_menus'     => false, // равен аргументу public
		'show_ui'               => true, // равен аргументу public
		'show_tagcloud'         => false, // равен аргументу show_ui
		'hierarchical'          => true,
		'rewrite'               => array('slug'=>'doors', 'hierarchical'=>false, 'with_front'=>false, 'feed'=>false ),
		'show_admin_column'     => true, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
	] );
	register_post_type( 'doors', [
		'label'  => null,
		'labels' => [
			'name'               => 'Двери', // основное название для типа записи
			'singular_name'      => 'Дверь', // название для одной записи этого типа
			'add_new'            => 'Добавить Дверь', // для добавления новой записи
			'add_new_item'       => 'Добавление Двери', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование Двери', // для редактирования типа записи
			'new_item'           => 'Новая Дверь', // текст новой записи
			'view_item'          => 'Смотреть Дверь', // для просмотра записи этого типа.
			'search_items'       => 'Искать Дверь', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Двери', // название меню
		],
		'description'         => '',
		'public'              => true,
		// 'publicly_queryable'  => null, // зависит от public
		// 'exclude_from_search' => null, // зависит от public
		// 'show_ui'             => null, // зависит от public
		// 'show_in_nav_menus'   => null, // зависит от public
		'show_in_menu'        => null, // показывать ли в меню адмнки
		// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => null,
		'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );

}
?>