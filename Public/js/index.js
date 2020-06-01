$(document).ready(function(){
    $('#slide_newarivals .owl-carousel').owlCarousel({
      loop:true,
      margin:10,
      dots:false,
      responsive:{
        0:{
          items:1
        },
        600:{
          items:3
        },
        1000:{
          items:4
        }
      }
    })
  $('#tabs-content .owl-carousel').owlCarousel({
      loop:true,
      margin:10,
      dots:false,
      responsive:{
        0:{
          items:1
        },
        600:{
          items:3
        },
        1000:{
          items:5
        }
      }
    })
  $('#slider .owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    dots:false,
    navText: ["<img src='./Public/icon/previous.png'>","<img src='./Public/icon/next.png'>"],
    responsive:{
      0:{
        items:1
      },
      600:{
        items:3
      },
      1000:{
        items:5
      }
    }
        })
  $('.carousel').carousel({
    interval: 2000
  })
});
