<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Blog of a web designer and developer – @rolle from Finland</title>
  <meta name="description" content="I like to do stuff like design, code, automate, analyze. On top of that I do side projects, read books, watch movies, play retro games. Read my blog!">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/global.css">
  <link rel="icon" href="images/favicon.png">
</head>
<body class="blog">

  <?php include '../partials/nav.php'; ?>

  <div class="block block-blog">

    <!-- Article start --><article class="container article article-blog">
      <header class="entry-header">
        <h2><a href="/the-web-world-of-mine-shattered" rel="bookmark">The web world of mine, shattered</a></h2>
        <h3>Who am I? What do I do? It's all over the place!</h3>
      </header><!-- .entry-header -->

        <div class="entry-content">

          <p>I have five blogs now. I used to have even more than that. It was much simpler back in the days when I only had one site with <i>all the stuff</i>. Nowadays I have separate niches for many things. Way too many. I have been thinking more about my readers than myself.</p>

          <p>Too many times I just create a blog and then leave it. This has a nasty side effect, almost every side project or blog I have have turned dead. I may occasionally write or update something but rather focus on work or something else than increase my anxiety by looking at the things I once liked to create but loathe upon today. The things I lived for during my past time.</p>

          <p class="button-wrapper"><a class="button" href="/the-web-world-of-mine-shattered">Read the rest of the article</a></p>

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
          <!-- Article end --></article>

    <!-- Article start --><article class="container article article-blog">
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
        <!-- Article end --></article>

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
