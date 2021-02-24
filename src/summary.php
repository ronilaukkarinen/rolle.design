<?php
  $title = 'Summary';
  $slug = 'summary';
  $article_image = 'https://rolle.design/images/mountains.jpg';
  $description = '';

  include '../src/partials/head.php';
?>
<body class="home">

  <header class="block block-hero block-hero-summary">
    <div class="content">
      <h1>Summary</h1>
      <p>A very self-aware nerd from Central Finland.</p>

      <img src="images/gravatar.jpg" alt="Gravatar image of me" class="gravatar" />
      <p class="gravatar-description">Yep, that's me in 2010. Still the best photo of me in my opinion. More recent photos at <a class="instagram-link" href="https://www.instagram.com/rolle_/" aria-label="Instagram"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37zM17.5 6.5h.01"/></svg> Instagram</a>.
        <svg class="arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125" width="60" height="60"><path d="M15.8 64.5c9.1 6.6 20.9 8.4 31.6 5.2C58 66.5 67.3 59 73.8 50.3c3.3-4.3 5.9-9 8-14-.3 4.1-.1 8.2.7 12.3.1.6.5 2 1.4 1.6.8-.4.9-2.1.8-2.8-.9-4.7-1-9.4-.2-14.1V33c1-1 .4-5.3-1.2-3.9-2.2 2-4.6 3.8-7.2 5.3-1.3.7-2.7 1.4-4 2-1.4.6-2.8 1.2-4.3 1-.9-.1-1.1 1.7-1.1 2.3 0 .7.2 2.2 1.1 2.3 1.6.2 3.2-.4 4.7-1s2.9-1.3 4.3-2.1c.4-.2.9-.5 1.3-.8-3.6 7.1-8.8 13.5-14.9 18.4-4.3 3.5-9 6.4-14.2 8.3-5.1 1.9-10.6 2.5-16 1.9-5.9-.7-11.6-2.9-16.5-6.4-.8-.6-1.3 1.1-1.4 1.6-.2.7-.1 2 .7 2.6z" fill="#231f20"/></svg>
      </p>
    </div>
  </header>

  <section class="block block-list">
    <h3>Finnish info</h3>

    <ul>
      <li><a href="https://rollemaa.fi/info">Rollemaa.fi/info</a></li>
    </ul>
  </section>

  <div class="block block-doing-stuff">
    <div class="head">
      <p>I like to create things like</p>
      <h2><span>Design,</span> <span>code,</span> <span>servers,</span> <span>articles.</span></h2>
    </div>
  </div>

  <?php include '../src/partials/footer.php'; ?>

</body>
</html>
