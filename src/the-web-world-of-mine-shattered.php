<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    $title = 'The web world of mine, shattered - Roni Laukkarinen';
    $description = '';
  ?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title; ?></title>
  <meta name="description" content="<?php echo $description; ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="<?php echo $title; ?>">
  <meta property="og:site_name" content="rolle.design">
  <meta property="og:url" content="https://rolle.design/the-web-world-of-mine-shattered">
  <meta property="og:description" content="<?php echo $description; ?>">
  <meta property="og:type" content="article">
  <meta property="og:image" content="https://rolle.design/images/mountains.jpg">

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@rolle">
  <meta name="twitter:title" content="<?php echo $title; ?>">
  <meta name="twitter:description" content="<?php echo $description; ?>">
  <meta name="twitter:image" content="https://rolle.design/images/mountains.jpg">
  <meta name="twitter:image:alt" content="Mountains">

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
        <h2><a href="/the-web-world-of-mine-shattered" rel="bookmark">The web world of mine, shattered</a></h2>
        <h3>Who am I? What do I do? It's all over the place!</h3>
      </header><!-- .entry-header -->

        <div class="entry-content single">

          <p>I have five blogs now. I used to have even more than that. It was much simpler back in the days when I only had one site with <i>all the stuff</i>. Nowadays I have separate niches for many things. Way too many. I have been thinking more about my readers than myself.</p>

          <p>Too many times I just create a blog and then leave it. This has a nasty side effect, almost every side project or blog I have have turned dead. I may occasionally write or update something but rather focus on work or something else than increase my anxiety by looking at the things I once liked to create but loathe upon today. The things I lived for during my past time.</p>

          <p>Well, lack of energy may come from something else than just <i>having too many websites</i>. I should look into recovering from January, when my dear father passed away. I should focus on my kids and my general well being instead of worrying about some sites. Yet I yearn for creating something here at rolle.design as well, even though my inspiration and motivation is half-gone.</p>

          <p>For this reason I decided to form a <a href="/now">Now-page</a>. I like to focus on the present and not to stay in the past or in the future in too long inside my chaotic little head.</p>

          <p>Maybe we'll see something here as well. Before the end of year 2019, that is.</p>

          <p class="comment-on-twitter"><a href="https://twitter.com/rolle/status/999">Comment on Twitter <?php echo file_get_contents( '../dist/svg/twitter.svg' ); ?></a>

        </div>

        <footer class="entry-footer">
          <p class="byline">

            <span class="author">
              <?php echo file_get_contents( '../dist/svg/user.svg' ); ?><span class="screen-reader-text">Posted by</span><a href="https://twitter.com/rolle/">Rolle</a>
            </span>

            <span class="posted-on">
              <?php echo file_get_contents( '../dist/svg/time.svg' ); ?><a href="/designed-a-new-site-just-like-that" rel="bookmark">
                <time class="entry-date published" datetime="2019-09-23T11:37:00">September 23, 2019</time></a>
            </span>

            <span class="category">
              <?php echo file_get_contents( '../dist/svg/archive.svg' ); ?>
                <a href="/side-projects">Side projects</a>
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

  <script src="js/all.js"></script>

</body>
</html>
