<?php 

// Função para registrar os Scripts e o CSS
function action_css() {
	wp_register_style( 'actions-style', get_template_directory_uri() . '/css/style.css', array(), false, false );
	wp_enqueue_style( 'actions-style' );
}
add_action( 'wp_enqueue_scripts', 'action_css' );

// Habilitar Menus
add_theme_support('menus');

// Registrar Menu
function register_my_menu() {
  register_nav_menu('menu-principal',__( 'Menu Principal' ));
}
add_action( 'init', 'register_my_menu' );

function ed_support_thumbnails() {
    add_theme_support('post-thumbnails'); // thumbnails
}

add_action('after_setup_theme', 'ed_support_thumbnails'); // carrega parametros de suporte do tema

?>