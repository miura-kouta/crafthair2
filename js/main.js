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

// モーダルウインドウ
document.addEventListener("DOMContentLoaded", function () {
    const modal = document.querySelector(".modal__container");

    if (modal) {
        const img = modal.querySelector("img");

        document.querySelectorAll(".attachment-medium_large").forEach(function (popupImg) {
            popupImg.addEventListener("click", function (event) {
                event.preventDefault();
                img.src = this.src;
                modal.style.display = "block";
            });
        });

        modal.addEventListener("click", function () {
            this.style.display = "none";
        });
    }
});
