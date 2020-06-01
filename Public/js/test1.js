$(document).ready(function() {

  $(".owl-carousel").owlCarousel({
      items:4,
      loop:true,
      margin:10,
      autoplay:true,
      autoplayTimeout:3000,
      autoplayHoverPause:true
});
  $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
    e.target // newly activated tab
    e.relatedTarget // previous active tab
    $(".owl-carousel").trigger('refresh.owl.carousel');
  });
});
