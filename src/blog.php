<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Blog of a web designer and developer – @rolle from Finland</title>
  <meta name="description" content="I like to do stuff like design, code, automate, analyze. On top of that I do side projects, read books, watch movies, play retro games. Read my blog!">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/global.css">
  <link rel="icon" href="images/favicon.png">
</head>
<body>

  <nav class="main-menu">
    <ul>
      <li><a href="/"><?php echo file_get_contents( '../dist/svg/home.svg' ); ?><span>Home</span></a></li>
      <li><a href="/blog" class="active"><?php echo file_get_contents( '../dist/svg/blog.svg' ); ?><span>Blog</span></a></li>
      <li><a href="/wordpress"><?php echo file_get_contents( '../dist/svg/wordpress.svg' ); ?><span>WordPress</span></a></li>
      <li><a href="/projects"><?php echo file_get_contents( '../dist/svg/projects.svg' ); ?><span>Projects</span></a></li>
      <li><a href="/contact"><?php echo file_get_contents( '../dist/svg/contact.svg' ); ?><span>Contact</span></a></li>
    </ul>
  </nav>

  <div class="block block-blog">

    <article class="container article">
      <header class="entry-header">
        <h2><a href="/designed-a-new-site-just-like-that" rel="bookmark">Designed a new site &ndash; just like that</a></h2>
        <h3>Why does rolle.design exist? Yet another blog? What's the purpose of this site?</h3>
      </header><!-- .entry-header -->

        <div class="entry-content">

          <p>Well, releasing websites is what brings food to the table. But not just that, for me designing and coding websites have been more than a day job for eternity for me.</p>

          <p>You may know me from the Internet. If not, you should know I currently write to five blogs, more or less. Not having much time to do that lately though. So why a new one? why now?</p>

          <p>In fact, this is not just a blog...</p>

          <p class="button-wrapper"><a class="button" href="/designed-a-new-site-just-like-that">Read the rest of the article</a></p>

        </div>

        <footer class="entry-footer">
          <p class="byline">

            <span class="author">
              <?php echo file_get_contents( '../dist/svg/user.svg' ); ?><span class="screen-reader-text">Posted by</span><a href="https://twitter.com/rolle/">Rolle</a>
            </span>

            <span class="posted-on">
              <?php echo file_get_contents( '../dist/svg/time.svg' ); ?><a href="/designed-a-new-site-just-like-that" rel="bookmark">
                <time class="entry-date published" datetime="2018-11-12T23:36:00">November 12, 2018</time></a>
            </span>

            <span class="category">
              <?php echo file_get_contents( '../dist/svg/archive.svg' ); ?>
                <a href="/web-development">Web development</a>
            </span>

          </p>
          </footer><!-- .entry-footer -->
        </article>

      </div>

  <div class="block block-my-things">
    <div class="head">
      <p>More stuff here soon.</p>
      <h2><a href="https://github.com/ronilaukkarinen/rolle.design">Follow my progress on GitHub. <?php echo file_get_contents( '../dist/svg/github.svg' ); ?></a></h2>
    </div>
  </div>

  <?php
  include( 'footer.php' );
