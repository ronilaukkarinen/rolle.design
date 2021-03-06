<?php
/**
 * Site branding & logo
 *
 * @package rolle
 */

namespace Air_Light;

$description = get_bloginfo( 'description', 'display' );
?>

<div class="site-branding screen-reader-text">

  <p class="site-title">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
      <span class="screen-reader-text"><?php bloginfo( 'name' ); ?></span>
      <?php // include get_theme_file_path( THEME_SETTINGS['logo'] ); ?>
    </a>
  </p>

  <?php if ( $description || is_customize_preview() ) : ?>
    <p class="site-description screen-reader-text">
      <?php echo esc_html( $description ); ?>
    </p>
  <?php endif; ?>

</div>
