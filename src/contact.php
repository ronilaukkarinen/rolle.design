<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Contact Roni Laukkarinen – @rolle's Projects</title>
  <meta name="description" content="I like to do stuff like wordpress, design, code, automate, analyze. On top of that I do side projects, read books, watch movies, play retro games. Get in touch!">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/global.css">
  <link rel="icon" href="images/favicon.png">
</head>
<body>

  <nav class="main-menu">
    <ul>
      <li><a href="/"><?php echo file_get_contents( '../dist/svg/home.svg' ); ?><span>Home</span></a></li>
      <li><a href="/blog"><?php echo file_get_contents( '../dist/svg/blog.svg' ); ?><span>Blog</span></a></li>
      <li><a href="/wordpress"><?php echo file_get_contents( '../dist/svg/wordpress.svg' ); ?><span>WordPress</span></a></li>
      <li><a href="/projects"><?php echo file_get_contents( '../dist/svg/projects.svg' ); ?><span>Projects</span></a></li>
      <li><a href="/contact" class="active"><?php echo file_get_contents( '../dist/svg/contact.svg' ); ?><span>Contact</span></a></li>
    </ul>
  </nav>

  <header class="block block-hero block-hero-contact">
    <div class="content">
      <h1>Get in touch</h1>
      <p>Best way to contact me currently is to send email to <a href="mailto:roni@dude.fi">roni@dude.fi</a> or <a href="https://twitter.com/rolle">tweet me.</a> I may create a form here. Or a livechat. Or not. I guess we'll see :)</p>
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
