<?php 

add_action( 'init', 'register_post_types' );
function register_post_types(){
    register_post_type( 'problems', [
        'label'  => null,
        'labels' => [
            'name'               => 'Проблемы', // основное название для типа записи
            'singular_name'      => 'Проблема', // название для одной записи этого типа
            'add_new'            => 'Добавить проблему', // для добавления новой записи
            'add_new_item'       => 'Добавление проблем', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование порблем', // для редактирования типа записи
            'new_item'           => 'Новая проблема', // текст новой записи
            'view_item'          => 'Смотреть проблему', // для просмотра записи этого типа.
            'search_items'       => 'Искать проблему', // для поиска по этим типам записи
            'not_found'          => 'Нет проблем', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Проблемы', // название меню
        ],
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => false, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu'        => null, // показывать ли в меню адмнки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest'        => null, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => null,
        'menu_icon'           => "dashicons-images-alt",
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical'        => false,
        'supports'            => [ 'title', ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ] );
}