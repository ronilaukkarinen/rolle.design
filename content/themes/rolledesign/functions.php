<?php
/**
 * Gather all bits and pieces together.
 * If you end up having multiple post types, taxonomies,
 * hooks and functions - please split those to their
 * own files under /inc and just require here.
 *
 * @Date: 2019-10-15 12:30:02
 * @Last Modified by: Roni Laukkarinen
 * @Last Modified time: 2021-04-01 20:30:46
 *
 * @package rolle
 */

namespace Air_Light;

/**
 * The current version of the theme.
 */
define( 'AIR_LIGHT_VERSION', '6.9.8' );

/**
 * Theme settings
 */

$theme_settings = [
  /**
   * Image and content sizes
   */
  'image_sizes' => [
    'small' => 300,
    'medium' => 700,
    'large' => 1200,
  ],
  'content_width' => 800,

  /**
   * Logo and featured image
   */
  'default_featured_image' => null,
  'logo' => '/svg/logo.svg',

  /**
   * Theme textdomain
   */
  'textdomain' => 'rolle',

  /**
   * Menu locations
   */
  'menu_locations' => [
      'primary' => __( 'Primary Menu', 'rolle' ),
  ],

  /**
   * Taxonomies
   *
   * See the instructions:
   * https://github.com/digitoimistodude/rolle#custom-taxonomies
   */
    'taxonomies' => [
  /**
  'your-taxonomy' => [
  'name' => 'Your_Taxonomy',
  'post_types' => [ 'post', 'page' ],
  ],
  */
  ],

/**
 * Post types
 *
 * See the instructions:
 * https://github.com/digitoimistodude/rolle#custom-post-types
 */
// TODO Instructions how to add post types

  'post_types' => [
  // 'your-post-type' => 'Your_Post_Type',
  ],

  /**
   * Gutenberg -related settings
   */

  // If you want to use classic editor somewhere, define it here
  'use_classic_editor' => [ 'page' ],

    // Don't restrict blocks
    'allowed_blocks' => 'all',

    // Module caching
    'enable_module_caching' => true,
    'exclude_module_from_cache' => [
      'contact-form' => true,
    ],

  // Add your own settings and use them wherever you need, for example THEME_SETTINGS['my_custom_setting']
  'my_custom_setting' => true,
];

$theme_settings = apply_filters( 'air_helper_theme_settings', $theme_settings );

define( 'THEME_SETTINGS', $theme_settings );

/**
 * Required files
 */
require get_theme_file_path( '/inc/hooks.php' );
require get_theme_file_path( '/inc/includes.php' );
require get_theme_file_path( '/inc/template-tags.php' );

// Run theme setup
add_action( 'init', __NAMESPACE__ . '\theme_setup' );
add_action( 'after_setup_theme', __NAMESPACE__ . '\build_theme_support' );

// Disable email delivery nag
add_filter( 'air_helper_mail_delivery', '__return_false' );

