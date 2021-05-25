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
    global $wpdb;
    $limit = 0;
    $year_prev = null;
    $months = $wpdb->get_results( "SELECT DISTINCT MONTH( post_date ) AS month ,  YEAR( post_date ) AS year, COUNT( id ) as post_count FROM $wpdb->posts WHERE post_status = 'publish' and post_date <= now( ) and post_type = 'post' GROUP BY month , year ORDER BY post_date DESC" );
    foreach ( $months as $month ) :
        $year_current = $month->year;
        if ( $year_current != $year_prev ) {
            if ( $year_prev != null ) { ?>
            <?php } ?>
            <h2><a href="<?php bloginfo( 'url' ) ?>/<?php echo $month->year; ?>/"><?php echo $month->year; ?></a></h2>
        <?php } ?>
        <li><a href="<?php bloginfo( 'url' ) ?>/<?php echo $month->year; ?>/<?php echo date( 'm', mktime( 0, 0, 0, $month->month, 1, $month->year ) ) ?>"><span class="archive-month"><?php echo date_i18n( 'F', mktime( 0, 0, 0, $month->month, 1, $month->year ) ) ?></span></a></li>

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
if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
				// do something
			echo get_the_title();
					}
}

// Restore original Post Data
wp_reset_postdata();

?>

        <?php $year_prev = $year_current;
        if ( ++$limit >= 18 ) { break; }
    endforeach;
  ?>

    </div>
  </section>

</main>

<?php get_footer();
