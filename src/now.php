<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    $title = 'Now - Roni Laukkarinen, @rolle';
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
<body class="now">

  <?php include '../partials/nav.php'; ?>

  <header class="block block-hero block-hero-contact block-hero-now has-static-hero">
    <div class="content">
      <h1>Now</h1>
      <p>Now page is a place to tell you about the things I focus on <i><u>right now</u></i>. I'll try to keep this up to date best I can. Inspired by the <a href="https://nownownow.com/">nownownow project</a>.</p>

      <ul>
        <li>Working at <a href="https://www.dude.fi">Dude</a> as a founder and a full-time full stack developer, my tasks consists of back-end, front-end, UI and servers. My code and configs are up to date on <a href="https://github.com/ronilaukkarinen">GitHub</a>.</li>
        <li>Contributing in WordPress community somehow on weekly basis, check out my <a href="https://profiles.wordpress.org/rolle/">WordPress.org profile</a>. Organizing <a href="https://www.meetup.com/Jyvaskyla-WordPress-Meetup/events/upcoming">WordPress Jyväskylä Meetups</a>.</li>
        <li>Blogging at least once a month about <a href="https://www.kevyttalukemista.fi">books</a>, <a href="https://www.rollemaa.fi">life</a>, <a href="https://www.rollemaa.fi/leffat">movies</a>, <a href="https://www.huurteinen.fi">craft beer</a>, <a href="https://geekylifestyle.com">geeky lifestyle</a>, <a href="https://www.dude.fi/blogi">the web and digital agency business</a> from which the latter is the most active one.</li>
        <li>Reading books daily. Occasional progress updates at <a href="http://goodreads.com/rolle">Goodreads</a>.</li>
        <li>Creating dreamy synthwave. Check out <a href="https://soundcloud.com/streetgazer">Streetgazer at SoundCloud</a> or <a href="https://open.spotify.com/artist/1YWN38WUKnCFTssFX0DNbb">Spotify</a>.</li>
        <li><a href="https://twitter.com/rolle">Twitter</a> and <a href="https://www.instagram.com/rolle_">Instagram</a> are my top choices of social media today. Trying to post an Instagram Story every day. Mostly in <a href="https://en.wikipedia.org/wiki/Finnish_language" style="top: 2px; position: relative;" title="Finnish">🇫🇮</a>, sadly.</li>
        <li class="updated">Updated 23. September, 2019</li>
      </ul>
    </div>
  </header>

  <div class="block block-my-things">
    <div class="head">
      <p>More stuff here soon.</p>
      <h2><a href="https://github.com/ronilaukkarinen/rolle.design">Follow my progress on GitHub. <?php echo file_get_contents( '../dist/svg/github.svg' ); ?></a></h2>
    </div>
  </div>

  <script src="js/all.js"></script>

</body>
</html>
