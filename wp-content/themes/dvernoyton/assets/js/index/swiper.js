const swiper = new Swiper(".swiper", {
  loop: true,
  autoplay: {
    delay: 2000,
  },
  spaceBetween: 100,
  speed: 800,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});
