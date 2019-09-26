(function ($, root, undefined) {

  $(function () {

    'use strict';

    // init Isotope
    var $grid = $('.grid').isotope({
      // options...
      layoutMode: 'packery',
      itemSelector: '.grid-item',
      percentPosition: true,
      packery: {
        gutter: '.gutter-sizer'
      }
    });

    // layout Isotope after each image loads
    $grid.imagesLoaded().progress( function() {
      $grid.isotope('layout');
    });

  });

})(jQuery, this);
