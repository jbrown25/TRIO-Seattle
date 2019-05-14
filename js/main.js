"use strict";

(function ($) {
  console.log('js loaded.');
  var search_toggle = $('.navbar .search_toggle');
  var search_form = $('.navbar .search-form');
  var search_input = search_form.find('input[type="search"]');
  var search_overlay = $('.search_overlay');
  search_toggle.on('click', function () {
    search_form.addClass('active');
    search_overlay.show();
    setTimeout(function () {
      search_input.focus();
    }, 250);
  });
  search_overlay.on('click', function () {
    search_form.removeClass('active');
    search_overlay.hide();
  });
})(jQuery);