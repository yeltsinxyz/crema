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