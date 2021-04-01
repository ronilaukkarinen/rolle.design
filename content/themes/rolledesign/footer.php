<?php
/**
 * Template for displaying the footer
 *
 * Description for template.
 *
 * @Author: Roni Laukkarinen
 * @Date: 2020-05-11 13:33:49
 * @Last Modified by: Roni Laukkarinen
 * @Last Modified time: 2021-04-01 18:09:25
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package rolle
 */

namespace Air_Light;

?>

</div><!-- #content -->

<footer id="colophon" class="block block-my-things site-footer has-light-bg">

  <div class="head">
    <p>I keep myself constantly busy. Everything is changing.</p>
    <h2><a href="https://github.com/ronilaukkarinen">Follow my projects on GitHub. <?php include get_theme_file_path( '/svg/github.svg' ); ?></a></h2>
  </div>

  <p class="back-to-top"><a href="#page" class="js-trigger top no-text-link no-external-link-indicator" data-mt-duration="300"><span class="screen-reader-text"><?php echo esc_html( get_default_localization( 'Back to top' ) ); ?></span><?php include get_theme_file_path( '/svg/chevron-up.svg' ); ?></a></p>

</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>
</body>

</html>
