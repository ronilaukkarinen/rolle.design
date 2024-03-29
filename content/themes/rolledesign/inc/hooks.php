<?php
/**
 * File: hooks.php
 *
 * Description: hooks
 *
 * @Author:		Roni Laukkarinen
 * @Date:   		2022-12-15 10:54:27
 * @Last Modified by:   Roni Laukkarinen
 * @Last Modified time: 2024-01-09 19:30:35
 *
 * @package rolle.design
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */

/**
 * All hooks that are run in the theme are listed here
 *
 * @package rolle
 */

namespace Air_Light;

/**
 * Enable search view
 */
// add_filter( 'air_helper_disable_views_search', '__return_false' );

/**
 * Enable author view for ActivityPub
 */
// add_filter( 'air_helper_disable_views_author', '__return_false' );

/**
 * Enable users endpoint view for ActivityPub
 */
remove_filter( 'rest_endpoints', __NAMESPACE__ . '\air_helper_disable_rest_endpoints' );

/**
 * Breadcrumb
 */
// require get_theme_file_path( 'inc/hooks/breadcrumb.php' );

/**
 * General hooks
 */
require get_theme_file_path( 'inc/hooks/general.php' );
add_action( 'widgets_init', __NAMESPACE__ . '\widgets_init' );

/**
 * Scripts and styles associated hooks
 */
require get_theme_file_path( 'inc/hooks/scripts-styles.php' );
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_polyfills' );
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_theme_scripts' );
add_action( 'wp_default_scripts', __NAMESPACE__ . '\move_jquery_into_footer' );

/**
 * Gutenberg associated hooks
 */
require get_theme_file_path( 'inc/hooks/gutenberg.php' );
add_filter( 'allowed_block_types', __NAMESPACE__ . '\allowed_block_types', 10, 2 );
add_filter( 'use_block_editor_for_post_type', __NAMESPACE__ . '\use_block_editor_for_post_type', 10, 2 );
add_action( 'enqueue_block_editor_assets', __NAMESPACE__ . '\register_block_editor_assets' );
add_action( 'after_setup_theme', __NAMESPACE__ . '\setup_editor_styles' );

/**
 * Form related hooks
 */
require get_theme_file_path( 'inc/hooks/forms.php' );
add_action( 'gform_enqueue_scripts', __NAMESPACE__ . '\dequeue_gf_stylesheets', 999 );

/**
 * Prevent content adding paragraphs and br-tags
 */
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );
