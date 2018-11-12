$( document ).ready(function() {
  var x;

  $(window).scroll(function(){

    $('.block.block-hero')
    .css('opacity', 1 - $(window).scrollTop() / 450)
    .css('background-size', (150 + 50 * $(window).scrollTop() / 250) + '%');

  });
});
