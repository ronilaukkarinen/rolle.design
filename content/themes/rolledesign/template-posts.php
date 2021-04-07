<?php
/**
 * Template Name: Blog post list
 *
 * @package rolle
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

namespace Air_Light;

get_header(); ?>

<main class="site-main transition-fade">
  <section class="block block-blog block-blog-post-list has-light-bg">
    <div class="container">

      <?php
      // Do a database query and save it to the cache if the there is no cache data with this key:
      $cache_key = 'template-posts-years';
      $years = $wpdb->get_col( $wpdb->prepare( "SELECT DISTINCT YEAR(post_date) FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = 'post' ORDER BY post_date DESC" ) ); // phpcs:ignore

      foreach ( $years as $year ) : ?>
        <div class="listing" id="content">
        <h2><?php echo esc_html( $year ); ?></h2>
          <?php
          $months = $wpdb->get_col( $wpdb->prepare( "SELECT DISTINCT MONTH(post_date) FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = 'post' AND YEAR(post_date) = '" . $year . "' ORDER BY post_date DESC" ) ); // phpcs:ignore
          foreach ( $months as $month ) : ?>
            <ul>
              <?php
              $theids = $wpdb->get_results( $wpdb->prepare( "SELECT ID, post_title FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = 'post' AND YEAR(post_date) = '" . $year . "' ORDER BY post_date DESC" ) ); // phpcs:ignore
              foreach ( $theids as $theid ) : ?>
                <li>
                  <a href="<?php echo esc_url( get_the_permalink( $theid->ID ) ); ?>">
                    <?php echo esc_html( $theid->post_title ); ?>
                  </a>
                  <span class="date"><time datetime="<?php echo esc_html( get_the_time( 'c', $theid->ID ) ); ?>"><?php echo esc_html( get_the_time( 'm', $theid->ID ) ); ?>/<?php echo esc_html( get_the_time( 'd', $theid->ID ) ); ?></time></span>
                </li>
              <?php endforeach; ?>
            </ul>
          <?php endforeach; ?>
        </div>
      <?php endforeach; ?>

    </div>
  </section>

</main>

<?php get_footer();
