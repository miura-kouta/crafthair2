"use strict";

// swiper
const swiper = new Swiper(".swiper", {
  slidesPerView: 3,
  loop: true,

  autoplay: {
    delay: 0,
  },

  speed: 3000,

  pagination: {
    el: ".swiper-pagination",
  },

});

// ハンバーガーメニュー
const drawerMenu = document.querySelector(".header__hamburgerBox");
const navi = document.querySelector(".header__hamburgerNav");

drawerMenu.addEventListener("click", function () {
	drawerMenu.classList.toggle("active");
	navi.classList.toggle("active");
});

navi.addEventListener("click", function () {
	drawerMenu.classList.toggle("active");
	navi.classList.toggle("active");
});
