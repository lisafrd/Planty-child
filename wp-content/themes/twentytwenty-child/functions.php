<?php

// Action qui permet de charger des scripts dans notre thème
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles(){
    // Chargement du style.css du thème parent Twenty Twenty
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}

    //header
    function custom_menu_items($items, $menu, $args) {
        if (is_user_logged_in()) {
            return $items; // menu clean
        }
    
        // trouver et supprimer admin
        foreach ($items as $key => $item) {
            if ($item->title == 'Admin') {
                unset($items[$key]);
            }
        }
    
        return $items;
    }
    
    add_filter('wp_get_nav_menu_items', 'custom_menu_items', 10, 3);

    //footer
    function register_footer_menu() {
        register_nav_menu('footer', 'Menu du pied de page');
    }
    add_action('after_setup_theme', 'register_footer_menu');