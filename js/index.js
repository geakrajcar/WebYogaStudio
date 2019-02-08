$(window).on('resize', function() {
  if (window.innerWidth < 768) {
    if ($('#logo').length != 0) {
      $('.navbar-brand').unwrap('<li id="logo"></li>');
      $('.navbar-brand').insertAfter('.navbar-toggle');
    }
  } else {
    if ($('#logo').length == 0) {
      $('.navbar-brand').wrap('<li id="logo"></li>');
      $('#logo').insertAfter('.navbar-nav li:nth-child(4)');
    }
  }
}).resize();

(function() {
  $('.gallery-link').magnificPopup({
    type: 'image',
    closeOnContentClick: true,
    closeBtnInside: false,
    mainClass: 'mfp-with-zoom mfp-img-mobile',
    image: {
      verticalFit: true,
      titleSrc: function(item) {
        return item.el.find('figcaption').text() || item.el.attr('title');
      }
    },
    zoom: {
      enabled: true
    },
    gallery: {
      enabled: true,
      navigateByImgClick: false,
      tCounter: ''
    },
    disableOn: function() {
      if ($(window).width() < 640) {
        return false;
      }
      return true;
    }
  });

}).call(this);