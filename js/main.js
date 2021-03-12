const hotelSlider = new Swiper(".hotel-slider", {
  // Optional parameters

  loop: true,
  // Navigation arrows
  navigation: {
    nextEl: ".hotel-slider__button--next",
    prevEl: ".hotel-slider__button--prev",
  },
  effect: "coverflow",

  keyboard: {
    enabled: true,
    onlyInViewport: false,
  },
});
//подключение карты
type = "text/javascript";
ymaps.ready(init);
function init() {
  var myMap = new ymaps.Map("map", {
    center: [12.93434771, 100.88389939],

    zoom: 16,
  });
}
const reviewsSlider = new Swiper(".reviews-slider", {
  // Optional parameters

  loop: true,
  // Navigation arrows
  navigation: {
    nextEl: ".reviews-slider__button--next",
    prevEl: ".reviews-slider__button--prev",
  },

  keyboard: {
    enabled: true,
    onlyInViewport: false,
  },
});
$(".newsletter").parallax({ imageSrc: "img/newsletter-bg.jpg" });
