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

//アコーディオン
document.addEventListener("DOMContentLoaded", function () {
  const questionButtons = document.querySelectorAll(".archiveQanda__tabTextQuestion");
  questionButtons.forEach((button) => {
    button.addEventListener("click", () => toggleAnswer(button));
  });

  const toggleAnswer = (clickedButton) => {
    const allAnswers = document.querySelectorAll(".archiveQanda__tabTextAnswer");
    const clickedAnswer = clickedButton.nextElementSibling;

    if (clickedAnswer.classList.contains("acdn_open")) {
      clickedAnswer.style.maxHeight = null; // 高さをリセット
      clickedAnswer.classList.remove("acdn_open");
      clickedAnswer.classList.add("acdn_close");
      clickedButton.classList.remove("acdn_open");
      clickedButton.classList.add("acdn_close");
    } else {
      allAnswers.forEach((answer) => {
        answer.style.maxHeight = null; // 高さをリセット
        answer.classList.remove("acdn_open");
        answer.classList.add("acdn_close");
      });
      clickedAnswer.classList.remove("acdn_close");
      clickedAnswer.classList.add("acdn_open");

      const allQuestions = document.querySelectorAll(".archiveQanda__tabTextQuestion");
      allQuestions.forEach((question) => {
        question.classList.remove("acdn_open");
        question.classList.add("acdn_close");
      });

      // 開く回答の高さを設定
      const ulElement = clickedAnswer.querySelector("ul");
      const ulHeight = ulElement.scrollHeight; // ulの実際の高さを取得
      clickedAnswer.style.maxHeight = `${ulHeight + 32}px`; // 32px の padding を追加

      clickedButton.classList.remove("acdn_close");
      clickedButton.classList.add("acdn_open");
    }
  };
});