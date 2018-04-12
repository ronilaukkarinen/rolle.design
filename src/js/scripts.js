$( document ).ready(function() {

  // Count numbers up
  $('.counter').each(function() {
    var $this = $(this),
    countTo = $this.attr('data-count');

    $({ countNum: $this.text()}).animate({
      countNum: countTo
    },

    {
      duration: 1000,
      easing:'linear',
      step: function() {
        $this.text(Math.floor(this.countNum));
      },
      complete: function() {
        $this.text(this.countNum);
      }
    });
  });

  // Drag, drop and save
  $.cookie.json = true;
  var list = $.cookie('list')
  var children = $('.boxes-sortable').children().each(function(i) {
        $(this).data('number', i) // Number the children
      })
    if (list && list.length) { // Cookie order
      $.each(list, function(v, i) {
        $('.boxes-sortable').append(children.eq(i))
      })
    }
    $('.boxes-sortable').sortable({
      placeholder: 'box-placeholder',
      connectWith: '.column',
      update: function(e, ui) {
        var list = $(this).children().map(function() {
          return $(this).data('number')
        }).get()
            $.cookie('list', list) // Save new order
          }
        }).disableSelection()

    // RSS feeds
    $('.uurteinen').rss('https://www.huurteinen.fi/feed/', { 
      limit: 1,
      ssl: true, 
      layoutTemplate: '<div class="column">{entries}</div>',
      entryTemplate: '<h4><a href="{url}">{title}</a></h4><div class="meta"><div class="meta-avatar" style="background-image: url(\'https://www.rollemaa.fi/content/themes/khonsu/images/avatar-huurteinen.png\');"></div><div class="meta-title-stuff"><h5><a href="https://www.huurteinen.fi">Huurteinen</a></h5><h6><time datetime="{date}">{date}</time></h6></div></div>',
      dateFormat: 'D.M.Y',
      effect: 'show'
    });

    $('.leffat').rss('https://www.rollemaa.fi/leffat-rss.php', { 
      limit: 1,
      ssl: true,
      layoutTemplate: '<div class="column">{entries}</div>',
      entryTemplate: '<h4><a href="{url}">Elokuva-arvio: {title}</a></h4><div class="meta"><div class="meta-avatar" style="background-image: url(\'https://www.rollemaa.fi/content/themes/khonsu/images/avatar-leffat.png\');"></div><div class="meta-title-stuff"><h5><a href="https://www.rollemaa.fi/leffat">Rollen leffablogi</a></h5><h6><time datetime="{date}">{date}</time></h6></div></div>',
      dateFormat: 'D.M.Y',
      effect: 'show'
    });

    $('.geekylifestyle').rss('https://geekylifestyle.com/feed/', { 
      limit: 1,
      ssl: true,
      layoutTemplate: '<div class="column">{entries}</div>',
      entryTemplate: '<h4><a href="{url}">{title}</a></h4><div class="meta"><div class="meta-avatar" style="background-image: url(\'https://www.rollemaa.fi/content/themes/khonsu/images/avatar-geekylifestyle.jpg\');"></div><div class="meta-title-stuff"><h5><a href="https://geekylifestyle.com">Geeky Lifestyle</a></h5><h6><time datetime="{date}">{date}</time></h6></div></div>',
      dateFormat: 'D.M.Y',
      effect: 'show'
    });

    $('.medium').rss('https://medium.com/feed/@rolle/', { 
      limit: 1,
      ssl: true,
      layoutTemplate: '<div class="column">{entries}</div>',
      entryTemplate: '<h4><a href="{url}">{title}</a></h4><div class="meta"><div class="meta-avatar" style="background-image: url(\'https://www.rollemaa.fi/content/themes/khonsu/images/avatar-medium.png\');"></div><div class="meta-title-stuff"><h5><a href="https://medium.com/@rolle">Stories by Roni Laukkarinen on Medium</a></h5><h6><time datetime="{date}">{date}</time></h6></div></div>',
      dateFormat: 'D.M.Y',
      effect: 'show'
    });

    $('.dude').rss('https://www.dude.fi/feed', {
      limit: 1,
      ssl: true,
      layoutTemplate: '<div class="column">{entries}</div>',
      entryTemplate: '<h4><a href="{url}">{title}</a></h4><div class="meta"><div class="meta-avatar" style="background-image: url(\'https://www.rollemaa.fi/content/themes/khonsu/images/avatar-dude.png\');"></div><div class="meta-title-stuff"><h5><a href="https://www.dude.fi/blogi">Digitoimisto Dude</a></h5><h6><time datetime="{date}">{date}</time></h6></div></div>',
      dateFormat: 'D.M.Y',
      effect: 'show'
    });

    $('.rollemaa').rss('https://www.rollemaa.fi/feed', {
      limit: 1,
      ssl: true,
      layoutTemplate: '<div class="column">{entries}</div>',
      entryTemplate: '<h4><a href="{url}">{title}</a></h4><div class="meta"><div class="meta-avatar" style="background-image: url(\'https://www.rollemaa.fi/content/themes/khonsu/images/avatar-dude.png\');"></div><div class="meta-title-stuff"><h5><a href="https://www.dude.fi/blogi">Digitoimisto Dude</a></h5><h6><time datetime="{date}">{date}</time></h6></div></div>',
      dateFormat: 'D.M.Y',
      effect: 'show'
    });

});
