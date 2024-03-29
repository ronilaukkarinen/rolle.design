<?php
/**
 * Template for displaying the footer
 *
 * Description for template.
 *
 * @Author: Roni Laukkarinen
 * @Date: 2020-05-11 13:33:49
 * @Last Modified by:   Roni Laukkarinen
 * @Last Modified time: 2022-12-15 13:25:12
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package rolle
 */

namespace Air_Light;

?>

</div>

<footer id="colophon" class="block block-has-space block-my-things site-footer has-light-bg">

  <div class="head">
    <p>I keep myself constantly busy. Everything is changing. Psst, I'm on <a rel="me" href="https://mementomori.social/@rolle">Mastodon</a>.</p>
    <h2><a href="https://github.com/ronilaukkarinen" class="no-external-link-indicator">Follow my projects on GitHub. <?php include get_theme_file_path( '/svg/github.svg' ); ?></a></h2>
  </div>

  <a
  href="#page"
  id="top"
  class="top no-external-link-indicator"
  data-version="<?php echo esc_attr( AIR_LIGHT_VERSION ); ?>"
>
  <span class="screen-reader-text"><?php echo esc_html( get_default_localization( 'Back to top' ) ); ?></span>
  <span aria-hidden="true">&uarr;</span>
</a>

</footer><!-- #colophon -->

</div><!-- #page -->

<nav aria-hidden="true">
  <div class="theme-switch-wrapper">
    <label class="theme-switch" for="checkbox">
      <input type="checkbox" id="checkbox" />
      <div class="slider round"></div>
    </label>
  </div>
</nav>

<?php wp_footer(); ?>
</body>

</html>
