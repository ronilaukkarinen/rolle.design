<?php
  $title = 'The web world of mine, shattered - Roni Laukkarinen';
  $slug = 'the-web-world-of-mine-shattered';
  $article_image = 'https://rolle.design/images/mountains.jpg';
  $description = '';

  include '../src/partials/head.php';
?>
<body class="blog">

  <?php include '../src/partials/nav.php'; ?>

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

          <p class="comment-on-twitter"><a href="https://twitter.com/rolle/status/1176075153240920064">Comment on Twitter <?php echo file_get_contents( '../dist/svg/twitter.svg' ); ?></a>

        </div>

        <footer class="entry-footer">
          <p class="byline">

            <span class="author">
              <?php echo file_get_contents( '../dist/svg/user.svg' ); ?><span class="screen-reader-text">Posted by</span><a href="https://twitter.com/rolle/">Rolle</a>
            </span>

            <span class="posted-on">
              <?php echo file_get_contents( '../dist/svg/time.svg' ); ?><a href="/the-web-world-of-mine-shattered" rel="bookmark">
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

  <?php include '../src/partials/footer.php'; ?>

</body>
</html>
