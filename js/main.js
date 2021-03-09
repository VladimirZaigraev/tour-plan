const swiper = new Swiper(".swiper-container", {
  // Optional parameters

  loop: true,
  // Navigation arrows
  navigation: {
    nextEl: ".slider-button__next",
    prevEl: ".slider-button__prev",
  },

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
