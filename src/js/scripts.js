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
  });
