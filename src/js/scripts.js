if( document.getElementById('hero') ) {

  window.onscroll = function() {
    var scrollposition = window.pageYOffset | document.body.scrollTop;
    var hero = document.getElementById('hero'), css = hero.style;

    css.opacity = 1 - scrollposition / 450;
    css.backgroundSize = (150 + 50 * scrollposition / 250) + '%';
  };

}
