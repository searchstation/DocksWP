
jQuery(document).ready(function() {
jQuery('.gallery').lightGallery({
selector: 'a[href$=".jpg"], a[href$=".jpeg"], a[href$=".png"], a[href$=".gif"]',
download: false,
share: false,
actualSize:false,
thumbnail:false,
});
});

jQuery(document).ready(function(){
jQuery('.hero-sliderDISABLED').bxSlider({
 mode: 'fade',
 auto: true,
 controls: false,
 adaptiveHeight: false,
 pager: false,
 startSlide: 1,
 speed: 5000,
 pause: 3000,
 randomStart: true
});
});

jQuery(document).ready(function(){
  jQuery.cookieBar();
});


jQuery(document).on( "opened.zf.offcanvas", function() {
  jQuery(".hamburger").addClass("is-active");
});

jQuery(document).on( "closed.zf.offcanvas", function() {
  jQuery(".hamburger").removeClass("is-active");
});




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
});
});
