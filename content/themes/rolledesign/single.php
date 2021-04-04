<?php
/**
 * The template for displaying all single posts
 *
 *
 * @Date:   2019-10-15 12:30:02
 * @Last Modified by: Roni Laukkarinen
 * @Last Modified time: 2021-04-01 23:16:06
 * @package rolle
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 */

namespace Air_Light;

// Fields
$url_to_tweet = get_field( 'url_to_tweet' );

the_post();
get_header(); ?>

<main class="site-main transition-fade">
  <section class="block block-single has-light-bg">
    <div class="gutenberg-content">

      <h1><?php the_title(); ?></h1>

      <?php
        the_content();
        entry_footer();
      ?>

      <?php if ( ! empty( $url_to_tweet ) ) : ?>
        <p class="comment-on-twitter"><a href="<?php echo esc_url( $url_to_tweet ); ?>">Comment on Twitter <?php include get_theme_file_path( '/svg/twitter.svg' ); ?></a></p>
      <?php endif; ?>

      <?php if ( get_edit_post_link() ) {
     edit_post_link( sprintf( __( '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg><span class="screen-reader-text">%s</span>', 'rolle' ), [ 'span' => [ 'class' => [] ] ], get_the_title() ), '<p class="edit-link">', '</p>' ); // phps:ignore
      } ?>

    </div>
  </section>

</main>

<?php get_footer();
