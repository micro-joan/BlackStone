(function($) {
  'use strict';
  var iconTochange;
  dragula([document.getElementById("dragula-left"), document.getElementById("dragula-right")]);
  dragula([document.getElementById("profile-list-left"), document.getElementById("profile-list-right")]);
  dragula([document.getElementById("dragula-event-left"), document.getElementById("dragula-event-right")])
    .on('drop', function(el) {
      console.log($(el));
      iconTochange = $(el).find('.mdi');
      if (iconTochange.hasClass('mdi-check')) {
        iconTochange.removeClass('mdi-check text-primary').addClass('mdi-check-all text-success');
      } else if (iconTochange.hasClass('mdi-check-all')) {
        iconTochange.removeClass('mdi-check-all text-success').addClass('mdi-check text-primary');
      }
    })
})(jQuery);