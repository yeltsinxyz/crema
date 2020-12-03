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
    wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/lib/js/main.js', true );
}
add_action( 'wp_enqueue_scripts', 'crema_styles_and_scripts' );

function wpdocs_dequeue_script() {
    wp_dequeue_script( 'jquery' );
    wp_dequeue_script( 'hoverIntent' );
    wp_dequeue_script( 'comment-reply' );
    wp_dequeue_script( 'twemoji' );
    wp_dequeue_script( 'jquery-ui-core' );
}
add_action( 'wp_print_scripts', 'wpdocs_dequeue_script', 100 );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 ); 
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' ); 
remove_action( 'wp_print_styles', 'print_emoji_styles' ); 
remove_action( 'admin_print_styles', 'print_emoji_styles' );

/**
 * Generate breadcrumbs
 * @author CodexWorld
 * @authorURL www.codexworld.com
 */
function get_breadcrumb() {
    echo '<a href="'.home_url().'" rel="nofollow" class="hover:text-gray-300 transition-colors duration-300 underline">Home</a>';
    if (is_category() || is_single()) {
        echo "&nbsp;&#187;&nbsp;";
        the_category(' &bull; ');
            if (is_single()) {
                echo " &nbsp;&#187;&nbsp; ";
                the_title();
            }
    } elseif (is_page()) {
        echo "&nbsp;&#187;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        echo "&nbsp;&#187;&nbsp;Resultados da pesquisa para... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}

if ( ! function_exists('clientes_post_type') ) {

    // Register Custom Post Type
    function clientes_post_type() {
    
        $labels = array(
            'name'                  => _x( 'Clientes', 'Post Type General Name', 'crema' ),
            'singular_name'         => _x( 'Cliente', 'Post Type Singular Name', 'crema' ),
            'menu_name'             => __( 'Clientes', 'crema' ),
            'name_admin_bar'        => __( 'Clientes', 'crema' ),
            'archives'              => __( 'Arquivo de Clientes', 'crema' ),
            'attributes'            => __( 'Atributos de Clientes', 'crema' ),
            'parent_item_colon'     => __( 'Cliente Principal:', 'crema' ),
            'all_items'             => __( 'Todos os clientes', 'crema' ),
            'add_new_item'          => __( 'Adicionar novo cliente', 'crema' ),
            'add_new'               => __( 'Adicionar novo', 'crema' ),
            'new_item'              => __( 'Novo cliente', 'crema' ),
            'edit_item'             => __( 'Editar cliente', 'crema' ),
            'update_item'           => __( 'Atualizar cliente', 'crema' ),
            'view_item'             => __( 'Visualizar cliente', 'crema' ),
            'view_items'            => __( 'Visualizar clientes', 'crema' ),
            'search_items'          => __( 'Pesquisar clientes', 'crema' ),
            'not_found'             => __( 'Não encontrado', 'crema' ),
            'not_found_in_trash'    => __( 'Não encontrado na lixeira', 'crema' ),
            'featured_image'        => __( 'Imagem em destaque', 'crema' ),
            'set_featured_image'    => __( 'Definir imagem em destaque', 'crema' ),
            'remove_featured_image' => __( 'Remover imagem em destaque', 'crema' ),
            'use_featured_image'    => __( 'Usar como imagem em destaque', 'crema' ),
            'insert_into_item'      => __( 'Pesquisar no cliente', 'crema' ),
            'uploaded_to_this_item' => __( 'Enviado para o cliente', 'crema' ),
            'items_list'            => __( 'Lista de clientes', 'crema' ),
            'items_list_navigation' => __( 'Navegação de lista de clientes', 'crema' ),
            'filter_items_list'     => __( 'Filtrar lista de clientes', 'crema' ),
        );
        $rewrite = array(
            'slug'                  => 'clientes',
            'with_front'            => true,
            'pages'                 => true,
            'feeds'                 => true,
        );
        $args = array(
            'label'                 => __( 'Cliente', 'crema' ),
            'description'           => __( 'Clientes', 'crema' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
            'taxonomies'            => array( 'category' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-businessman',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => 'clientes',
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'rewrite'               => $rewrite,
            'capability_type'       => 'page',
            'show_in_rest'          => true,
        );
        register_post_type( 'clientes', $args );
    
    }
    add_action( 'init', 'clientes_post_type', 0 );
    
}

// Set content width value based on the theme's design
if ( ! isset( $content_width ) )
	$content_width = 800;

if ( ! function_exists('custom_theme_features') ) {

// Register Theme Features
function custom_theme_features()  {

	// Add theme support for Automatic Feed Links
	add_theme_support( 'automatic-feed-links' );

	// Add theme support for Featured Images
	add_theme_support( 'post-thumbnails', array( 'post', 'page', 'clientes' ) );

	// Add theme support for HTML5 Semantic Markup
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

	// Add theme support for document Title tag
	add_theme_support( 'title-tag' );

	// Add theme support for custom CSS in the TinyMCE visual editor
	add_editor_style( 'editor-style.css' );

	// Add theme support for Translation
	load_theme_textdomain( 'crema', get_template_directory() . '/lang' );
}
add_action( 'after_setup_theme', 'custom_theme_features' );

}

add_image_size( 'clientesHome', 600, 360, array( 'center', 'center' ) );
add_image_size( 'artigosHome', 711, 443, array( 'center', 'center' ) );

function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );