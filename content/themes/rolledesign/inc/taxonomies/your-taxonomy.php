<?php
/**
 * @package rolle
 * @Author: Niku Hietanen
 * @Date: 2020-02-18 15:05:35
 * @Last Modified by: Niku Hietanen
 * @Last Modified time: 2020-02-18 15:06:07
 */

namespace Air_Light;

/**
 * Registers the Your Taxonomy taxonomy.
 *
 * @param Array $post_types Optional. Post types in
 * which the taxonomy should be registered.
 */
class Your_Taxonomy extends Taxonomy {


  public function register( array $post_types = [] ) {
    // Taxonomy labels.
    $labels = [
      'name'                  => _x( 'Your Taxonomies', 'Taxonomy plural name', 'rolle' ),
      'singular_name'         => _x( 'Your Taxonomy', 'Taxonomy singular name', 'rolle' ),
      'search_items'          => __( 'Search Your Taxonomies', 'rolle' ),
      'popular_items'         => __( 'Popular Your Taxonomies', 'rolle' ),
      'all_items'             => __( 'All Your Taxonomies', 'rolle' ),
      'parent_item'           => __( 'Parent Your Taxonomy', 'rolle' ),
      'parent_item_colon'     => __( 'Parent Your Taxonomy', 'rolle' ),
      'edit_item'             => __( 'Edit Your Taxonomy', 'rolle' ),
      'update_item'           => __( 'Update Your Taxonomy', 'rolle' ),
      'add_new_item'          => __( 'Add New Your Taxonomy', 'rolle' ),
      'new_item_name'         => __( 'New Your Taxonomy', 'rolle' ),
      'add_or_remove_items'   => __( 'Add or remove Your Taxonomies', 'rolle' ),
      'choose_from_most_used' => __( 'Choose from most used Taxonomies', 'rolle' ),
      'menu_name'             => __( 'Your Taxonomy', 'rolle' ),
    ];

    $args = [
      'labels'            => $labels,
      'public'            => false,
      'show_in_nav_menus' => true,
      'show_admin_column' => true,
      'hierarchical'      => true,
      'show_tagcloud'     => false,
      'show_ui'           => true,
      'query_var'         => false,
      'rewrite'           => [
        'slug' => 'your-taxonomy',
      ],
    ];

    $this->register_wp_taxonomy( $this->slug, $post_types, $args );
  }

}
