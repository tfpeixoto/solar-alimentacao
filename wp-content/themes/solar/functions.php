<?php

// FUNCOES DO TEMA
function solar_adiciona_recursos_tema()
{
  add_theme_support('title-tag');
  add_theme_support('custom-logo');
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'solar_adiciona_recursos_tema');


// SCRIPTS
function solar_scripts()
{
  wp_enqueue_style('critital', get_template_directory_uri() . '/css/critical.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'solar_scripts');


// BOOTSTRAP NAVWALKER
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


// REGISTRA MENU
function solar_registra_menu()
{
  register_nav_menus(array(
    'main-menu' => __('Menu Principal', 'solar'),
    'footer-menu' => __('Menu Footer', 'solar'),
  ));
}
add_action('after_setup_theme', 'solar_registra_menu');


// POST TYPE SERVICOS
function solar_post_type_servicos()
{
  $nomeSingular = 'Serviço';
  $nomePlural = 'Serviços';
  $description = $nomeSingular . ' da Solar';

  $labels = array(
    'name' => $nomePlural,
    'singular_name' => $nomeSingular,
    'add_new_item' => "Adicionar novo " . $nomeSingular,
    'edit_item' => 'Editar ' . $nomeSingular,
  );

  $supports = array(
    'title',
    'editor',
    'thumbnail'
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'description' => $description,
    'menu_icon' => 'dashicons-drumstick',
    'show_in_rest' => true,
    'supports' => $supports,
  );

  register_post_type('servicos', $args);
}
add_action('init', 'solar_post_type_servicos');

// POST TYPE CLIENTES
function solar_post_type_clientes()
{
  $nomeSingular = 'Cliente';
  $nomePlural = 'Clientes';
  $description = $nomeSingular . ' da Solar';

  $labels = array(
    'name' => $nomePlural,
    'singular_name' => $nomeSingular,
    'add_new_item' => "Adicionar novo " . $nomeSingular,
    'edit_item' => 'Editar ' . $nomeSingular,
  );

  $supports = array(
    'title',
    'editor',
    'thumbnail'
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'description' => $description,
    'menu_icon' => 'dashicons-format-image',
    'show_in_rest' => true,
    'supports' => $supports,
  );

  register_post_type('clientes', $args);
}
add_action('init', 'solar_post_type_clientes');