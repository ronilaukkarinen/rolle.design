<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Web designer, web developer – @rolle from Finland</title>
  <meta name="description" content="I like to do stuff like design, code, automate, analyze. On top of that I do side projects, read books, watch movies, play retro games. Get to know me!">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/global.css">

  <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
  <link rel="icon" href="images/favicon.png">
</head>
<body>

  <nav class="main-menu">
    <ul>
      <li><a href="/" class="active"><?php echo file_get_contents( '../dist/svg/home.svg' ); ?><span>Home</span></a></li>
      <li><a href="/blog"><?php echo file_get_contents( '../dist/svg/blog.svg' ); ?><span>Blog</span></a></li>
      <li><a href="/wordpress"><?php echo file_get_contents( '../dist/svg/wordpress.svg' ); ?><span>WordPress</span></a></li>
      <li><a href="/projects"><?php echo file_get_contents( '../dist/svg/projects.svg' ); ?><span>Projects</span></a></li>
      <li><a href="/contact"><?php echo file_get_contents( '../dist/svg/contact.svg' ); ?><span>Contact</span></a></li>
    </ul>
  </nav>

  <header class="block block-hero">
    <div class="content">
      <h1><span>Ron</span> <span>the</span> <span>don.</span></h1>
      <p>But just say <span>Rolle</span>. My full name is Roni Laukkarinen and I'm a web designer and developer.</p>

      <img src="images/gravatar.jpg" alt="Gravatar image of me" class="gravatar" />
      <p class="gravatar-description">Yep, that's me in 2010. Still the best photo of me in my opinion.<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125" width="60" height="60"><path d="M15.8 64.5c9.1 6.6 20.9 8.4 31.6 5.2C58 66.5 67.3 59 73.8 50.3c3.3-4.3 5.9-9 8-14-.3 4.1-.1 8.2.7 12.3.1.6.5 2 1.4 1.6.8-.4.9-2.1.8-2.8-.9-4.7-1-9.4-.2-14.1V33c1-1 .4-5.3-1.2-3.9-2.2 2-4.6 3.8-7.2 5.3-1.3.7-2.7 1.4-4 2-1.4.6-2.8 1.2-4.3 1-.9-.1-1.1 1.7-1.1 2.3 0 .7.2 2.2 1.1 2.3 1.6.2 3.2-.4 4.7-1s2.9-1.3 4.3-2.1c.4-.2.9-.5 1.3-.8-3.6 7.1-8.8 13.5-14.9 18.4-4.3 3.5-9 6.4-14.2 8.3-5.1 1.9-10.6 2.5-16 1.9-5.9-.7-11.6-2.9-16.5-6.4-.8-.6-1.3 1.1-1.4 1.6-.2.7-.1 2 .7 2.6z" fill="#231f20"/></svg></p>
    </div>
  </header>

  <div class="block block-doing-stuff">
    <div class="head">
      <p>I like to do things like</p>
      <h2><span>Design,</span> <span>code,</span> <span>automate,</span> <span>analyze.</span></h2>
    </div>
  </div>

  <div class="block block-my-things">
    <div class="head">
      <p>More stuff here soon.</p>
      <h2><a href="https://github.com/ronilaukkarinen/rolle.design">Follow my progress on GitHub. <?php echo file_get_contents( '../dist/svg/github.svg' ); ?></a></h2>
    </div>
  </div>

  <?php
  include( 'footer.php' );
