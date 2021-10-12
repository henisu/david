(function ($, Drupal) {
  Drupal.behaviors.initSlidersParagraphs = {
    attach: function (context) {
      var SWIPER_BASE = ".paragraph-slider";

      $(`${SWIPER_BASE} .swiper-container`, context)
        .once("initSlidersParagraphs")
        .each(function () {
          const id = $(this).attr("id");
          new Swiper({
            el: `${SWIPER_BASE} .swiper-container.swiper-${id}`,
            loop: true,
            effect: "slide",
            slidesPerView: 1,
            spaceBetween: 10,    
            // autoplay: {
            //   delay: 6000,
            //   disableOnInteraction: false,
            //   speed: 600,
            // },
            pagination: {
              el: `.swiper-pagination.swiper-${id}`,
              clickable: true,
            },
            navigation: {
              prevEl: `.swiper-${id}.swiper-button-prev`,
              nextEl: `.swiper-${id}.swiper-button-next`,
            },
          });
        });
    },
  };

  Drupal.behaviors.initSliderProducts = {
    attach: function (context) {
      var SWIPER_BASE = ".product-slider";

      $(`${SWIPER_BASE} .swiper-container`, context)
        .once("initSlidersParagraphs")
        .each(function () {
          const id = $(this).attr("id");
          new Swiper({
            el: `${SWIPER_BASE} .swiper-container.swiper-${id}`,
            loop: true,
            effect: "slide",
            slidesPerView: 1,
            spaceBetween: 10,    
            // autoplay: {
            //   delay: 6000,
            //   disableOnInteraction: false,
            //   speed: 600,
            // },
            pagination: {
              el: `.swiper-pagination.swiper-${id}`,
              clickable: true,
            },
            navigation: {
              prevEl: `.swiper-${id}.swiper-button-prev`,
              nextEl: `.swiper-${id}.swiper-button-next`,
            },
          });
        });
    },
  };
})(jQuery, Drupal);