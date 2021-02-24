<?php
  $title = 'Designed a new site &ndash; just like that';
  $slug = 'designed-a-new-site-just-like-that';
  $article_image = 'https://rolle.design/images/mountains.jpg';
  $description = 'Well, releasing websites is what brings food to the table. But not just that, for me designing and coding websites have been more than a day job for eternity for me.';

  include '../src/partials/head.php';
?>
<body class="blog">

  <?php include '../src/partials/nav.php'; ?>

  <div class="block block-blog">

    <article class="container article">
      <header class="entry-header">
        <h2><a href="/designed-a-new-site-just-like-that" rel="bookmark">Designed a new site &ndash; just like that</a></h2>
        <h3>Why does rolle.design exist? Yet another blog? What's the purpose of this site?</h3>
      </header><!-- .entry-header -->

        <div class="entry-content single">

          <p>Well, releasing websites is what brings food to the table. But not just that, for me designing and coding websites have been more than a day job for eternity for me.</p>

          <p>You may know me from the Internet. If not, you should know I currently write to five blogs, more or less. Not having much time to do that lately though. So why a new one? why now?</p>

          <p>In fact, this is not just a blog... this is my personal ego booster, portfolio, a showcase of what I can do, what I'm best in, what makes me happy.</p>

          <h3>Not just a job or a hobby, a way of life</h3>

          <p>This is the showcase of who I am and what I do. For years and years, I have been trying to build a "simple site" that is all about me. My paradise, place that no-one can touch. A place full of design ideas, minimalism, writings about creative things, code, WordPress, job, ethics, apps, analytics, numbers, psychology, books I read and other things I find interesting.</p>

          <p>But as I'm a jack of all trades, do lots of stuff, an analytic person who likes to write down <i>everything</i> I often find things blow up when I try to summarize them, I find it extremely difficult to tell things in one or two sentences. People who know me know I tend to overcomplicate things I tell to people. Even in normal things, I'm excited of, it takes time until you know what I'm talking about. Most of the time, that is. Many times after starting the design process I notice every single one of my "portfolio sites" come up with gigantic walls of text instead of projects, references or lifestreams of mine.</p>

          <p>But no more. Things I cannot put out without a wall of text, I simply won't. I have other blogs and resources for that. In here, I try to be minimal, creative and just... design. Live. Show off. Or something.</p>

          <h3>What about the code? what CMS are you using on rolle.design?</h3>

          <p>Everything you see here is static. That means no CMS, no WordPress, no Jekyll, no nothing. Everything is hardcoded HTML, CSS and couple of lines of Javascript. Yet everything is built using modern tools like npm, gulp.js, and techniques like SCSS. All HTML is minified and all assets are compressed on the fly.</p>

          <h3>Blogging in HTML? Really?</h3>

          <p>I know there are many brilliant light, markdown based CMSs around there. But I write HTML naturally. In fact, I have been blogging with WordPress by using the HTML editor, because it's so normal to me. HTML was my first touch in web back in the 90s.</p>

          <p>I'm a WordPress guy, so you may wonder why I don't have WordPress installed here like in every other site I've made. That's because this is fun. I miss the times I could just code without "rules". I can now go back and make the web as it used to be... or almost, because many things make stuff easier and faster. So my goal here is to combine modern tools with web design from the past.</p>

          <p>It's like what I'm doing with WordPress. I have strong opinions about modern web tools and frameworks because I prefer backward compatible, easy to learn, traditional and minimal ways to do things. A good example is my <a href="https://github.com/digitoimistodude/air-light">WordPress starter theme</a> which may seem like a monster, but hey take a look at <a href="https://roots.io/sage/">Sage</a> or <a href="https://labs.tonik.pl/theme/">Tonik</a>. I mean, they sure are great, but the whole principal irritates me.</p>

          <h3>What's to come?</h3>

          <p>I have an actual task list for this site. Over 20 tasks and counting. I plan to get my "life" here in some way. I want to show recent book I've read, an album I've listened, a code I've written, a movie I've watched, a talk I have given, a project I like and so on.</p>

          <p>I coded this little site on Monday, 12th of November 2018 from 7 pm to midnight and I will continue to develop rolle.design further. You will see here blog posts, reviews, WordPress and code related writings, ramblings about stuff, projects and things that get me going.</p>

          <p>See you next time! Hopefully, you like what I'm doing.</p>

          <p class="comment-on-twitter"><a href="https://twitter.com/rolle/status/1062117395387564037">Comment on Twitter <?php echo file_get_contents( '../dist/svg/twitter.svg' ); ?></a>

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
