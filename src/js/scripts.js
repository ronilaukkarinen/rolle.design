$( document ).ready(function() {

  $('.show-more').click(function() {
    $(this).toggleClass('open');
    $('.show-more-content').toggleClass('open');
  });

});
