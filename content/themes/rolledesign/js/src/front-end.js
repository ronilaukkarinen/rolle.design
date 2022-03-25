/**
 * @Author: Roni Laukkarinen
 * @Date:   2021-04-05 10:50:22
 * @Last Modified by:   Roni Laukkarinen
 * @Last Modified time: 2022-03-25 11:37:39
 */
/**
 * Air theme JavaScript.
 */

// Import modules (comment to disable)
import MoveTo from 'moveto';
import Swup from 'swup';
import SwupScriptsPlugin from '@swup/scripts-plugin';
import SwupBodyClassPlugin from '@swup/body-class-plugin';
import LazyLoad from 'vanilla-lazyload';
import reframe from 'reframe.js';
import getLocalization from './modules/localization';
import styleExternalLinks from './modules/external-link';
import './modules/dark-mode';
import './modules/prism';
import './modules/prism-inline-color';
import './modules/copy-to-clipboard';
import 'what-input';

// Define Javascript is active by changing the body class
document.body.classList.remove('no-js');
document.body.classList.add('js');

// Style external links
styleExternalLinks();

// Fit videos
reframe('iframe');

// Initiate Swup transitions
const swup = new Swup({
  plugins: [
    new SwupScriptsPlugin({
      head: true,
      body: true
    }),
    new SwupBodyClassPlugin()
  ]
});

// Bg parallax and moveTo functionality
function doSomethingWithAnimation() {
  const heros = document.getElementsByClassName('block-hero');
  if ( heros ) {
    window.onscroll = function() {
      for (var i = 0; i < heros.length; i++) {

        var scrollposition = window.pageYOffset | document.body.scrollTop;
        var hero = heros[i], css = hero.style;

        css.opacity = 1 - scrollposition / 450;
        css.backgroundSize = (100 + 50 * scrollposition / 250) + '%';
      }
    };
  }

  const easeFunctions = {
    easeInQuad: function (t, b, c, d) {
      t /= d;
      return c * t * t + b;
    },
    easeOutQuad: function (t, b, c, d) {
      t /= d;
      return -c * t * (t - 2) + b;
    }
  };
  const moveTo = new MoveTo({
      ease: 'easeInQuad'
    },
    easeFunctions
  );
  const triggers = document.getElementsByClassName('js-trigger');
  for (var i = 0; i < triggers.length; i++) {
    moveTo.registerTrigger(triggers[i]);
  }
}

// Init lazyload
// Usage example on template side when air-helper enabled:
// <?php vanilla_lazyload_tag( get_post_thumbnail_id( $post->ID ) ); ?>
// Refer to documentation:
// 1) https://github.com/digitoimistodude/air-helper#image-lazyloading-1
// 2) https://github.com/verlok/vanilla-lazyload#-getting-started---html
var rolle_LazyLoad = new LazyLoad();
// After your content has changed...
rolle_LazyLoad.update();

// Grab the prefers reduced media query
const mediaQuery = window.matchMedia("(prefers-reduced-motion: reduce)");

// Swup starts
swup.on('contentReplaced', function () {

  // Always move scroll position to up when clicking a link
  var moveToTop = new MoveTo({
    tolerance: 0,
    duration: 0,
    easing: 'easeOutQuart',
    container: window
  });

  var target = document.getElementById('swup');
  moveToTop.move(target);

  document.addEventListener('DOMContentLoaded', function () {

    // Check if the media query matches or is not available.
    if ( ! mediaQuery || mediaQuery.matches) {
      // doSomethingWithoutAnimation();
    } else {
      doSomethingWithAnimation();
    }
  });

  // Adds an event listener to check for changes in the media query's value.
  mediaQuery.addEventListener("change", () => {
    if (mediaQuery.matches) {
      // doSomethingWithoutAnimation();
    } else {
      doSomethingWithAnimation();
    }
  });

});
// Swup ends

// jQuery start
(function ($) {
  // Accessibility: Ensure back to top is right color on right background
  // Note: Needs .has-light-bg or .has-dark-bg class on all blocks
  var stickyOffset = $('.back-to-top').offset();
  var $contentDivs = $('.block, .site-footer');
  $(document).scroll(function () {
    $contentDivs.each(function (k) {
      var _thisOffset = $(this).offset();
      var _actPosition = _thisOffset.top - $(window).scrollTop();
      if (
        _actPosition < stickyOffset.top &&
        _actPosition + $(this).height() > 0
      ) {
        $('.back-to-top')
          .removeClass('has-light-bg has-dark-bg')
          .addClass(
            $(this).hasClass('has-light-bg') ? 'has-light-bg' : 'has-dark-bg'
          );
        return false;
      }
    });
  });

  // Detect Visible section on viewport from bottom
  // @link https://codepen.io/BoyWithSilverWings/pen/MJgQqR
  $.fn.isInViewport = function () {
    var elementTop = $(this).offset().top;
    var elementBottom = elementTop + $(this).outerHeight();

    var viewportTop = $(window).scrollTop();
    var viewportBottom = viewportTop + $(window).height();

    return elementBottom > viewportTop && elementTop < viewportBottom;
  };

  // Accessibility: Ensure back to top is right color on right background
  $(window).on('resize scroll', function () {
    $('.block, .site-footer').each(function () {
      if ($(this).isInViewport()) {
        $('.back-to-top')
          .removeClass('has-light-bg has-dark-bg')
          .addClass(
            $(this).hasClass('has-light-bg') ? 'has-light-bg' : 'has-dark-bg'
          );
      }
    });
  });

  // Hide or show the 'back to top' link
  $(window).scroll(function () {
    // Back to top
    var offset = 300; // Browser window scroll (in pixels) after which the 'back to top' link is shown
    var offset_opacity = 1200; // Browser window scroll (in pixels) after which the link opacity is reduced
    var scroll_top_duration = 700; // Duration of the top scrolling animation (in ms)
    var link_class = '.back-to-top';

    if ($(this).scrollTop() > offset) {
      $(link_class).addClass('is-visible');
    } else {
      $(link_class).removeClass('is-visible');
    }

    if ($(this).scrollTop() > offset_opacity) {
      $(link_class).addClass('fade-out');
    } else {
      $(link_class).removeClass('fade-out');
    }
  });
})(jQuery);
