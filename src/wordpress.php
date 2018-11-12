<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>WordPress designer – @rolle from Finland</title>
  <meta name="description" content="I like to do stuff like WordPress, design, code, automate, analyze. On top of that I do side projects, read books, watch movies, play retro games. Get to know me!">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/global.css">

  <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
  <link rel="icon" href="images/favicon.png">
</head>
<body>

  <nav class="main-menu">
    <ul>
      <li><a href="/"><?php echo file_get_contents( '../dist/svg/home.svg' ); ?><span>Home</span></a></li>
      <li><a href="/blog"><?php echo file_get_contents( '../dist/svg/blog.svg' ); ?><span>Blog</span></a></li>
      <li><a href="/wordpress" class="active"><?php echo file_get_contents( '../dist/svg/wordpress.svg' ); ?><span>WordPress</span></a></li>
      <li><a href="/projects"><?php echo file_get_contents( '../dist/svg/projects.svg' ); ?><span>Projects</span></a></li>
      <li><a href="/contact"><?php echo file_get_contents( '../dist/svg/contact.svg' ); ?><span>Contact</span></a></li>
    </ul>
  </nav>

  <header class="block block-hero block-hero-wordpress">
    <div class="content">
      <h1><?php echo file_get_contents( '../dist/svg/wordpress.svg' ); ?><span class="screen-reader-text">WordPress</span></h1>
      <p>Nothing yet. Go to <a href="https://profiles.wordpress.org/rolle">profiles.wordpress.org/rolle</a> in the meantime.</p>
    </div>
  </header>

  <div class="block block-my-things">
    <div class="head">
      <p>More stuff here soon.</p>
      <h2><a href="https://github.com/ronilaukkarinen/rolle.design">Follow my progress on GitHub. <?php echo file_get_contents( '../dist/svg/github.svg' ); ?></a></h2>
    </div>
  </div>

  <?php
  include( 'footer.php' );
