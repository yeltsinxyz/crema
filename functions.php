<?php
/**
 * A simple child theme for Genesis
 *
 * @package  Crema
 * @author  Yeltsin Lima
 * @link  https://yeltsinxyz.github.io/crema/
 * @copyright  Copyright (c) 2020, Yeltsin Lima
 * @license  GNU AGPLv3
 */

function crema_styles_and_scripts() {
    wp_enqueue_style( 'manrope', 'https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap' );
    wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/dist/css/theme.css' );
}
add_action( 'wp_enqueue_scripts', 'crema_styles_and_scripts' );

// Register Custom Post Type Cliente
function create_cliente_cpt() {

	$labels = array(
		'name' => _x( 'Clientes', 'Post Type General Name', 'crema' ),
		'singular_name' => _x( 'Cliente', 'Post Type Singular Name', 'crema' ),
		'menu_name' => _x( 'Clientes', 'Admin Menu text', 'crema' ),
		'name_admin_bar' => _x( 'Cliente', 'Add New on Toolbar', 'crema' ),
		'archives' => __( 'Arquivos de cliente', 'crema' ),
		'attributes' => __( 'Atributos de clientes', 'crema' ),
		'parent_item_colon' => __( 'Cliente principal:', 'crema' ),
		'all_items' => __( 'Todos os clientes', 'crema' ),
		'add_new_item' => __( 'Adicionar novo cliente', 'crema' ),
		'add_new' => __( 'Adicionar novo', 'crema' ),
		'new_item' => __( 'Novo cliente', 'crema' ),
		'edit_item' => __( 'Editar cliente', 'crema' ),
		'update_item' => __( 'Atualizar cliente', 'crema' ),
		'view_item' => __( 'Visualizar cliente', 'crema' ),
		'view_items' => __( 'Visualizar clientes', 'crema' ),
		'search_items' => __( 'Pesquisar cliente', 'crema' ),
		'not_found' => __( 'Nada encontrado', 'crema' ),
		'not_found_in_trash' => __( 'Nada encontrado na lixeira', 'crema' ),
		'featured_image' => __( 'Imagem em destaque', 'crema' ),
		'set_featured_image' => __( 'Definir como imagem em destaque', 'crema' ),
		'remove_featured_image' => __( 'Remover imagem em destaque', 'crema' ),
		'use_featured_image' => __( 'Usar como imagem em destaque', 'crema' ),
		'insert_into_item' => __( 'Inserir no cliente', 'crema' ),
		'uploaded_to_this_item' => __( 'Enviado para este cliente', 'crema' ),
		'items_list' => __( 'Lista de clientes', 'crema' ),
		'items_list_navigation' => __( 'Navegação em lista de clientes', 'crema' ),
		'filter_items_list' => __( 'Filtrar lista de clientes', 'crema' ),
	);
	$args = array(
		'label' => __( 'Cliente', 'crema' ),
		'description' => __( 'Exibição de todos os trabalhos feitos para os clientes', 'crema' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-page',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'post-formats'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'clientes', $args );

}
add_action( 'init', 'create_cliente_cpt', 0 );

// Register Custom Post Type Depoimento
function create_depoimento_cpt() {

	$labels = array(
		'name' => _x( 'Depoimentos', 'Post Type General Name', 'crema' ),
		'singular_name' => _x( 'Depoimento', 'Post Type Singular Name', 'crema' ),
		'menu_name' => _x( 'Depoimentos', 'Admin Menu text', 'crema' ),
		'name_admin_bar' => _x( 'Depoimento', 'Add New on Toolbar', 'crema' ),
		'archives' => __( 'Arquivos de depoimento', 'crema' ),
		'attributes' => __( 'Atributos de depoimento', 'crema' ),
		'parent_item_colon' => __( 'Depoimento principal:', 'crema' ),
		'all_items' => __( 'Todos os depoimento', 'crema' ),
		'add_new_item' => __( 'Adicionar novo depoimento', 'crema' ),
		'add_new' => __( 'Adicionar novo', 'crema' ),
		'new_item' => __( 'Novo depoimento', 'crema' ),
		'edit_item' => __( 'Editar depoimento', 'crema' ),
		'update_item' => __( 'Atualizar depoimento', 'crema' ),
		'view_item' => __( 'Visualizar depoimento', 'crema' ),
		'view_items' => __( 'Visualizar depoimento', 'crema' ),
		'search_items' => __( 'Pesquisar depoimento', 'crema' ),
		'not_found' => __( 'Nada encontrado', 'crema' ),
		'not_found_in_trash' => __( 'Nada encontrado na lixeira', 'crema' ),
		'featured_image' => __( 'Imagem em destaque', 'crema' ),
		'set_featured_image' => __( 'Definir como imagem em destaque', 'crema' ),
		'remove_featured_image' => __( 'Remover imagem em destaque', 'crema' ),
		'use_featured_image' => __( 'Usar como imagem em destaque', 'crema' ),
		'insert_into_item' => __( 'Inserir no depoimento', 'crema' ),
		'uploaded_to_this_item' => __( 'Enviado para este depoimento', 'crema' ),
		'items_list' => __( 'Lista de depoimentos', 'crema' ),
		'items_list_navigation' => __( 'Navegação em lista de depoimentos', 'crema' ),
		'filter_items_list' => __( 'Filtrar lista de depoimentos', 'crema' ),
	);
	$args = array(
		'label' => __( 'Depoimento', 'crema' ),
		'description' => __( 'Exibição de todos os depoimentos', 'crema' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-editor-quote',
		'supports' => array('title', 'editor', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'depoimentos', $args );

}
add_action( 'init', 'create_depoimento_cpt', 0 );

// Register custom navigation menus
function custom_nav_menus() {

	$locations = array(
		'offcanvas' => __( 'Menu principal, acessível através do menu hambúrguer', 'crema' ),
		'landing-page' => __( 'Menu localizado nas páginas de Landing Page', 'crema' ),
	);
	register_nav_menus( $locations );

}
add_action( 'init', 'custom_nav_menus' );

// Register custom sidebars
function custom_sidebars() {

	$args = array(
		'name'          => __( 'Offcanvas', 'crema' ),
		'description'   => __( 'Sidebar localizada no menu Off-Canvas', 'crema' ),
		'id'            => 'offcanvas',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	);
	register_sidebar($args);

}
add_action( 'widgets_init', 'custom_sidebars' );

// Register Taxonomy Serviço
function create_servio_tax() {

	$labels = array(
		'name'              => _x( 'Serviços', 'taxonomy general name', 'crema' ),
		'singular_name'     => _x( 'Serviço', 'taxonomy singular name', 'crema' ),
		'search_items'      => __( 'Pesquisar serviços', 'crema' ),
		'all_items'         => __( 'Todos serviços', 'crema' ),
		'parent_item'       => __( 'Serviço principal', 'crema' ),
		'parent_item_colon' => __( 'Serviço principal:', 'crema' ),
		'edit_item'         => __( 'Editar serviço', 'crema' ),
		'update_item'       => __( 'Atualizar serviço', 'crema' ),
		'add_new_item'      => __( 'Adicionar novo serviço', 'crema' ),
		'new_item_name'     => __( 'Novo nome de serviço', 'crema' ),
		'menu_name'         => __( 'Serviço', 'crema' ),
	);
	$args = array(
		'labels' => $labels,
		'description' => __( 'Lista dos serviços vinculados aos clientes', 'crema' ),
		'hierarchical' => true,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_tagcloud' => true,
		'show_in_quick_edit' => true,
		'show_admin_column' => true,
		'show_in_rest' => true,
	);
	register_taxonomy( 'servicos', array('clientes'), $args );

}
add_action( 'init', 'create_servio_tax' );

// Set content width value based on the theme's design
if ( ! isset( $content_width ) )
	$content_width = 900;

if ( ! function_exists('crema_theme_support') ) {

// Register Theme Features
function crema_theme_support()  {

	// Add theme support for Automatic Feed Links
	add_theme_support( 'automatic-feed-links' );

	// Add theme support for Featured Images
	add_theme_support( 'post-thumbnails', array( 'post', 'page', 'clientes', 'depoimentos' ) );

	// Add theme support for HTML5 Semantic Markup
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

	// Add theme support for document Title tag
	add_theme_support( 'title-tag' );

	add_image_size( 'blog-home', 384, 221, true );

	// Add theme support for Translation
	load_theme_textdomain( 'crema', get_template_directory() . '/lang' );
}
add_action( 'after_setup_theme', 'crema_theme_support' );

}