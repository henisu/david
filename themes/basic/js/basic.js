(function ($, Drupal) {
  Drupal.behaviors.initImageZoom = {
    attach: function (context) {
      $(".gallery__-images > div")
        .once()
        .click(function (e) {
          e.preventDefault();
          $(this).toggleClass("zoom");
          return null;
        });
    },
  };
})(jQuery, Drupal);
