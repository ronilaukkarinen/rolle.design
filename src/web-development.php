<?php
  $title = 'Web development – @rolle from Finland';
  $slug = 'web-development';
  $article_image = 'https://rolle.design/images/mountains.jpg';
  $description = '';

  include '../src/partials/head.php';
?>
<body class="blog">

  <?php include '../src/partials/nav.php'; ?>

  <header class="page-header container">
    <h1 class="page-title"><span class="category-description">Writings about</span> <span class="page-description">Web development</span></h1>
  </header>

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

  <?php include '../src/partials/footer.php'; ?>

</body>
</html>
