// $('.owl-carousel').owlCarousel({
//     loop: true,
//     margin: 0,
//     nav: true,
//     navText: [
//         "<a class='prevC' style=''>&#10094</a>",
//         "<a class='nextC' style=''>&#10095</a>"
//     //   "<i class='fa fa-caret-left'></i>",
//     //   "<i class='fa fa-caret-right'></i>"
//     ],
//     // autoplay: true,
//     autoplayHoverPause: true
//   // ,
//   // responsive: {
//   //   0: {
//   //     items: 0
//   //   },
//   //   1: {
//   //     items: 1
//   //   },
//   //   1: {
//   //     items: 2
//   //   }
//   //   ,
//   //   1: {
//   //     items: 3
//   //   }
//   // }
//   })

  const responsive = {
    0: {
      items: 1
    },
    320: {
      items: 1
    },
    560: {
      items: 2
    },
    960: {
      items: 3
    }
  }

  $('.owl-carousel').owlCarousel({
    loop: true,
    autoplay: false,
    autoplayTimeout: 3000,
    dots: false,
    nav: true,
    navText: [$('.owl-navigation .owl-nav-prev'), $('.owl-navigation .owl-nav-next')],
    responsive: responsive
  });

$(".owl-carousel").each(function (index, el) {
  var containerHeight = $(el).height();
  $(el).find(".product_img").each(function (index, img) {
    var w = $(img).prop('naturalWidth');
    var h = $(img).prop('naturalHeight');
    $(img).css({
      'width': Math.round(containerHeight * w / h/3) + 'px',
      'height': containerHeight/3 + 'px'
    });
  }),
    $(el).owlCarousel({
      autoWidth: true
    });
});
  

