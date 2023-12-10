<?php
/**
 * The template for displaying front page
 *
 * Contains the closing of the site wrapper div and all content after.
 * Initial styles for front page template.
 *
 * @Date:   2019-10-15 12:30:02
 * @Last Modified by: Roni Laukkarinen
 * @Last Modified time: 2021-04-02 00:36:47
 * @package rolle
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */

namespace Air_Light;

get_header(); ?>
<main class="site-main transition-fade">
  <section class="block block-hero block-hero-front block-has-space" id="hero">
    <div class="content">
      <h1 id="content"><span>Ron</span> <span>the</span> <span>don.</span></h1>
      <p>Just say <span>Rolle</span>. My full name is Roni Laukkarinen and I'm a web designer and developer from Finland.</p>

      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/gravatar-2023.png" alt="Facial image of me, Roni Laukkarinen aka rolle from Twitter" class="gravatar" />
      <p class="gravatar-description">Yep, that's my current gravatar. More recent photos at <a class="instagram-link" href="https://www.instagram.com/rolle_/" aria-label="Instagram"><?php include get_theme_file_path( '/svg/instagram.svg' ); ?> Instagram</a>.
        <span class="arrow"><?php include get_theme_file_path( '/svg/arrow-drawing.svg' ); ?></span>
      </p>
    </div>
  </section>

  <secton class="block block-doing-stuff block-has-space">
    <div class="head">
      <p>I like to do things like</p>
      <h2><span>Design,</span> <span>code,</span> <span>servers,</span> <span>articles.</span></h2>
    </div>
  </secton>
</main>

<?php get_footer();
