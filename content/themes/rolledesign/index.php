<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @Date:   2019-10-15 12:30:02
 * @Last Modified by: Roni Laukkarinen
 * @Last Modified time: 2021-04-01 21:28:19
 * @package rolle
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

namespace Air_Light;

get_header(); ?>

<main class="site-main transition-fade">
  <section class="block block-blog has-light-bg">
    <div class="container">

      <?php if ( have_posts() ) : ?>

        <?php if ( is_home() && ! is_front_page() ) : ?>
          <h1 id="content" class="screen-reader-text"><?php single_post_title(); ?></h1>
        <?php endif; ?>

        <?php while ( have_posts() ) : the_post(); ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h2><a data-no-swup href="<?php echo esc_url( get_the_permalink() ); ?>"><?php the_title(); ?></a></h2>

            <div class="content">
              <?php
                the_content();
                entry_footer();
              ?>
            </div>
          </article>
        <?php endwhile; ?>

        <?php the_posts_pagination(); ?>

      <?php endif; ?>

    </div>
  </section>

</main>

<?php get_footer();
