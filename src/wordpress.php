<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>WordPress designer – @rolle from Finland</title>
  <meta name="description" content="I like to do stuff like WordPress, design, code, automate, analyze. On top of that I do side projects, read books, watch movies, play retro games. Get to know me!">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/global.css">
  <link rel="icon" href="images/favicon.png">
</head>
<body class="wordpress">

  <?php include '../partials/nav.php'; ?>

  <header class="block block-hero block-hero-wordpress" id="hero">
    <div class="content">
      <h1><?php echo file_get_contents( '../dist/svg/wordpress.svg' ); ?><span class="screen-reader-text">WordPress</span></h1>
      <p>Nothing much yet. Go to <a href="https://profiles.wordpress.org/rolle">profiles.wordpress.org/rolle</a> in the meantime.</p>
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
