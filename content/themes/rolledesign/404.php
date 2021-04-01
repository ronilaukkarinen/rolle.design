<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @Date:   2019-10-15 12:30:02
 * @Last Modified by: Roni Laukkarinen
 * @Last Modified time: 2021-04-01 23:19:18
 * @package rolle
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 */

namespace Air_Light;

get_header(); ?>

<main class="site-main transition-fade">

  <section class="block block-error-404">
    <div class="container">
      <div class="content">

        <h1 id="content">404 <span class="screen-reader-text"><?php echo esc_html( get_default_localization( 'Page not found.' ) ); ?></span></h1>
        <h2 aria-hidden="true"><?php echo esc_html( get_default_localization( 'Page not found.' ) ); ?></h2>
        <p><?php echo esc_html( get_default_localization( 'The reason might be mistyped or expired URL.' ) ); ?></p>

      </div>
    </div>
  </section>

</main>

<?php

// Enable visible footer if fits project:
// get_footer();

// WordPress scripts and hooks
wp_footer();
