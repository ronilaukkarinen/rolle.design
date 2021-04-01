<?php
/**
 * The template for displaying all single posts
 *
 *
 * @Date:   2019-10-15 12:30:02
 * @Last Modified by: Roni Laukkarinen
 * @Last Modified time: 2021-04-01 21:14:17
 * @package rolle
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 */

namespace Air_Light;

// Fields
$url_to_tweet = get_field( 'url_to_tweet' );

the_post();
get_header(); ?>

<main class="site-main">
  <section class="block block-single has-light-bg">
    <div class="gutenberg-content">

      <h1><?php the_title(); ?></h1>

      <?php the_content(); ?>

      <?php if ( ! empty( $url_to_tweet ) ) : ?>
        <p class="comment-on-twitter"><a href="<?php echo esc_url( $url_to_tweet ); ?>">Comment on Twitter <?php include get_theme_file_path( '/svg/twitter.svg' ); ?></a></p>
      <?php endif; ?>

      <?php entry_footer();
      if ( get_edit_post_link() ) {
        edit_post_link( sprintf( wp_kses( __( 'Edit <span class="screen-reader-text">%s</span>', 'rolle' ), [ 'span' => [ 'class' => [] ] ] ), get_the_title() ), '<p class="edit-link">', '</p>' );
      }
      ?>

    </div>
  </section>

</main>

<?php get_footer();
