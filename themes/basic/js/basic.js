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

  Drupal.behaviors.initFacets = {
    attach: function () {
      $(".accordion")
        .once()
        .each(function () {
          if ($(this).children("ul").length) {
            $(this).find("> .form-item").append("<span class='open'></span>");
          }
        });

      $(".open")
        .once()
        .click(function () {
          $(this).closest(".accordion").find("ul").slideToggle("fast");
          $(this).toggleClass("active");
        });
    },
  };
})(jQuery, Drupal);
