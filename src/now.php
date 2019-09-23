<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Now - Roni Laukkarinen, @rolle</title>
  <meta name="description" content="This is my Now page, inspired by nownownow.com.">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/global.css">
  <link rel="icon" href="images/favicon.png">
</head>
<body class="now">

  <?php include '../partials/nav.php'; ?>

  <header class="block block-hero block-hero-contact">
    <div class="content">
      <h1>Now</h1>
      <p>Now page is a place to tell you about the things I focus in <i><u>right now</u></i>. I'll try to keep this up to date best I can. Inspired by the <a href="https://nownownow.com/">nownownow project</a>.</p>

      <ul>
        <li>Working at <a href="https://www.dude.fi">Dude</a> as a founder and a full-time full stack developer (back-end, front-end, UI, servers)</li>
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
