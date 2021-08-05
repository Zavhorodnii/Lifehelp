<?php 

require get_template_directory() . '/problems/problems.php';

add_action('wp_enqueue_scripts', 'header_style');
//add_action('get_footer', 'footer_style');

add_action('after_setup_theme', "theme_register_nav_menu");

add_filter( 'pre_option_link_manager_enabled', '__return_true' );

function header_style(){
	wp_enqueue_style('style', get_template_directory_uri() . '/css/main.css');
}

function footer_style(){
	wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.min.js');
	wp_enqueue_script('js', get_template_directory_uri() . '/js/main.js');
}

function theme_register_nav_menu() {
    register_nav_menu('footer', 'Меню в подвале');
    add_theme_support('title-tag');
}

if(function_exists('acf_add_options_page'))
{
    acf_add_options_page(array(
        'page_title' 	=> 'Настройки сайта',
        'menu_title'	=> 'Настройки сайта',
        'menu_slug' 	=> 'site_main_settings_page',
        'redirect'		=> false
    ));
}