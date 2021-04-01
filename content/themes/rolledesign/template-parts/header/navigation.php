<?php
/**
 * Navigation layout.
 *
 * @Author: Roni Laukkarinen
 * @Date: 2020-05-11 13:22:26
 * @Last Modified by:   Roni Laukkarinen
 * @Last Modified time: 2021-02-24 17:17:18
 *
 * @package rolle
 */

namespace Air_Light;

?>

<div class="main-navigation-wrapper" id="main-navigation-wrapper">

  <nav id="nav" class="nav-primary" aria-label="<?php echo esc_html( get_default_localization( 'Main navigation' ) ); ?>">

  <nav class="main-menu">
    <ul>
      <li><a class="home" href="<?php echo esc_url( get_home_url() ); ?>/"><?php include get_theme_file_path( '/svg/home.svg' ); ?><span>Home</span></a></li>
      <li><a class="blog" href="/blog"><?php include get_theme_file_path( '/svg/blog.svg' ); ?><span>Blog</span></a></li>
      <li><a class="wordpress" href="<?php echo esc_url( get_home_url() ); ?>/wordpress"><?php include get_theme_file_path( '/svg/home.svg' ); ?><span>WordPress</span></a></li>
      <li><a class="projects" href="<?php echo esc_url( get_home_url() ); ?>/projects"><?php include get_theme_file_path( '/svg/projects.svg' ); ?><span>Projects</span></a></li>
      <li><a class="contact" href="<?php echo esc_url( get_home_url() ); ?>/contact"><?php include get_theme_file_path( '/svg/contact.svg' ); ?><span>Contact</span></a></li>
      <li><a class="about" href="<?php echo esc_url( get_home_url() ); ?>/about"><?php include get_theme_file_path( '/svg/coffee.svg' ); ?><span>About</span></a></li>
      <li><a class="now" href="<?php echo esc_url( get_home_url() ); ?>/now"><?php include get_theme_file_path( '/svg/now.svg' ); ?><span>Now</span></a></li>
    </ul>
  </nav>

  </nav><!-- #nav -->
</div>
