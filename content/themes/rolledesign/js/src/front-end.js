/**
 * @Author: Roni Laukkarinen
 * @Date:   2021-04-05 10:50:22
 * @Last Modified by:   Roni Laukkarinen
 * @Last Modified time: 2022-12-15 11:23:17
 */
/**
 * Air theme JavaScript.
 */

import MoveTo from 'moveto';
import Swup from 'swup';
import SwupScriptsPlugin from '@swup/scripts-plugin';
import SwupBodyClassPlugin from '@swup/body-class-plugin';
import LazyLoad from 'vanilla-lazyload';
import getLocalization from './modules/localization';
import { styleExternalLinks, initExternalLinkLabels } from './modules/external-link';
import backToTop from './modules/top';
import './modules/prism';
import './modules/prism-inline-color';
import './modules/copy-to-clipboard';
import './modules/dark-mode';
import 'what-input';
import { iframeResizer } from 'iframe-resizer';

// Define Javascript is active by changing the body class
document.body.classList.remove('no-js');
document.body.classList.add('js');

// Style external links
styleExternalLinks();
initExternalLinkLabels();

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

  // Init back to top
  backToTop();

  // Iframe heights
  // Check if there's iframe on the page
  if ( document.querySelector('iframe') ) {
    iFrameResize({ log: true }, 'iframe');
  }

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

document.addEventListener('DOMContentLoaded', function () {

  // Init back to top
  backToTop();
  // Iframe heights
  if ( document.querySelector('iframe') ) {
    iFrameResize({ log: true }, 'iframe');
  }

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
