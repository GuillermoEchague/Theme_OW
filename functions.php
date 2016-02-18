<?php

/* Insertamos hojas de estilos y scripts.
Tenemos que añadir obligatoriamente el archivo style.css, y en este caso, al estar
usando bootsrap añadimos los archivos css y js de bootstrap.
*/
function add_theme_scripts() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css' );
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js' );
  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

/* Damos soporte para menús a nuestro tema con la siguiente función.
Usaremos el "walker" wp_bootstrap_navwalker.
*/
include_once('wp_bootstrap_navwalker.php');
function ow_register_my_menu() {
    register_nav_menu( 'header-menu', __('Menú de la cabecera') );
}
add_action( 'init', 'ow_register_my_menu' );

/* Registramos nuestras sidebars */
function ow_register_sidebars() {
  register_sidebar( array(
    'name' => __('Blog feed', 'openwebinars' ),
    'id' => 'sidebar-blog',
    'before_widget' => '<aside class="col-md-4"',
    'after_widget' => '</aside>',
    'before_title' => '<h1>',
    'after_title' => '</h1>'
  ));
  register_sidebar( array(
    'name' => __('Footer', 'openwebinars' ),
    'id' => 'sidebar-footer',
    'before_widget' => '<aside class="col-md-12"',
    'after_widget' => '</aside>',
    'before_title' => '<h1>',
    'after_title' => '</h1>'
  ));
}
add_action( 'widgets_init', 'ow_register_sidebars' );

/* Dar soporte a imágenes destacadas */

function ow_thumbnails_theme_support() {
  add_theme_support( 'home_thumbnails' );
  add_image_size( 'homepage_thum', '242', '200' );
}
add_action( 'after_setup_theme', 'ow_thumbnails_theme_support' );

 ?>
