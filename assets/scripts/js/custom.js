
jQuery(document).ready(function() {



})




jQuery( window ).load(function() {
// Testimonial slider
jQuery('.testimonial-slider').show();
jQuery('.testimonial-slider').slick({
  dots: false,
  lazyLoad: 'ondemand',
  infinite: true,
  speed: 1800,
  slidesToShow: 2,
  slidesToScroll: 2,
  autoplay: true,
  autoplaySpeed: 4000,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
})
})
