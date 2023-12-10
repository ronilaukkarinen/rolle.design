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
    <div class="container" id="content">

    <?php
      global $wpdb;

      $limit = 0;
      $year_prev = null;

      $months = $wpdb->get_results( "SELECT DISTINCT MONTH( post_date ) AS month ,  YEAR( post_date ) AS year, COUNT( id ) as post_count FROM $wpdb->posts WHERE post_status = 'publish' and post_date <= now( ) and post_type = 'post' GROUP BY month , year ORDER BY post_date DESC" ); // phpcs:ignore

      foreach ( $months as $month ) :
        $year_current = $month->year;

        if ( $year_current !== $year_prev ) {
          if ( null !== $year_prev ) { ?>
          <?php } ?>
            <h2><?php echo esc_html( $month->year ); ?></h2>
          <?php } ?>

          <div class="listing">
          <h3><?php echo wp_kses_post( date_i18n( 'F', mktime( 0, 0, 0, $month->month, 1, $month->year ) ) ); ?></h3>

          <?php
          // WP_Query arguments
          $args = array(
            'year'     => $month->year,
            'monthnum' => $month->month,
          	'posts_per_page' => '-1',
          );

          // The Query
          $query = new \WP_Query( $args );

          // The Loop
          if ( $query->have_posts() ) { ?>
          <ul>
			      <?php while ( $query->have_posts() ) {
				      $query->the_post(); ?>
			          <li>
                  <a data-no-swup href="<?php echo esc_url( get_the_permalink() ); ?>">
                    <?php echo esc_html( get_the_title() ); ?>
                  </a>
                  <span class="date">
                    <time datetime="<?php echo esc_html( get_the_time( 'c' ) ); ?>">
                      <?php echo esc_html( get_the_time( 'm' ) ); ?>/<?php echo esc_html( get_the_time( 'd' ) ); ?>
                    </time>
                  </span>
                </li>
					    <?php }
            } ?>
          </ul>
          </div>

          <?php wp_reset_postdata(); ?>

        <?php $year_prev = $year_current;
          if ( ++$limit >= 18 ) {
            break;
          }

          endforeach;
        ?>

    </div>
  </section>

</main>

<?php get_footer();
