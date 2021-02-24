<?php
  $title = 'Web designer, web developer – @rolle\'s Projects';
  $slug = 'projects';
  $article_image = 'https://rolle.design/images/mountains.jpg';
  $description = '';

  include '../src/partials/head.php';
?>
<body class="projects">

  <?php include '../src/partials/nav.php'; ?>

  <header class="block block-hero block-hero-projects" id="hero">
    <div class="content">
      <h1><?php echo file_get_contents( '../dist/svg/github.svg' ); ?><span class="screen-reader-text">Projects</span></h1>
      <p>Too many, I'm on fire 🔥 Go to <a href="https://github.com/ronilaukkarinen">github.com/ronilaukkarinen</a>, they're all there.</p>
    </div>
  </header>

  <?php include '../src/partials/footer.php'; ?>

</body>
</html>
