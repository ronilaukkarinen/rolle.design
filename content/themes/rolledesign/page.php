<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @Date:   2019-10-15 12:30:02
 * @Last Modified by: Roni Laukkarinen
 * @Last Modified time: 2021-04-01 23:09:04
 * @package rolle
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

namespace Air_Light;

the_post();
get_header(); ?>

<main class="site-main transition-fade">
  <?php the_content(); ?>
  <?php if ( get_edit_post_link() ) {
    edit_post_link( sprintf( wp_kses( __( 'Edit <span class="screen-reader-text">%s</span>', 'rolle' ), [ 'span' => [ 'class' => [] ] ] ), get_the_title() ), '<p class="edit-link"><span class="pushable"><span class="shadow"></span><span class="edge"></span><span class="front">', '</span></span></p>' );
  } ?>
</main>
</button>

<?php get_footer();
