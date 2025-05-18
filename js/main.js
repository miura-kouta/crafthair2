"use strict";

// swiper
const swiper = new Swiper(".swiper", {
  slidesPerView: 3, // デフォルトは3枚表示
  loop: true,

  autoplay: {
    delay: 0,
  },

  speed: 3000,

  pagination: {
    el: ".swiper-pagination",
  },

  on: {
    setTranslate: function () {
      document.querySelector(".swiper-wrapper").style.transitionTimingFunction =
        "linear";
    },
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

    document
      .querySelectorAll(".attachment-medium_large")
      .forEach(function (popupImg) {
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
  const questionButtons = document.querySelectorAll(
    ".archiveQanda__tabTextQuestion"
  );
  questionButtons.forEach((button) => {
    button.addEventListener("click", () => toggleAnswer(button));
  });

  const toggleAnswer = (clickedButton) => {
    const allAnswers = document.querySelectorAll(
      ".archiveQanda__tabTextAnswer"
    );
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

      const allQuestions = document.querySelectorAll(
        ".archiveQanda__tabTextQuestion"
      );
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

//フェードイン
let fadeInTarget = document.querySelectorAll(".fade-in");
window.addEventListener("scroll", () => {
  for (let i = 0; i < fadeInTarget.length; i++) {
    const rect = fadeInTarget[i].getBoundingClientRect().top;
    const scroll = window.pageYOffset || document.documentElement.scrollTop;
    const offset = rect + scroll;
    const windowHeight = window.innerHeight;
    if (scroll > offset - windowHeight + 200) {
      fadeInTarget[i].classList.add("scroll-in");
    }
  }
});

// // Webフォントのちらつきを防ぐため、ページ読込完了したらbodyタグのopacityを1に設定
function doSomething() {
  document.body.style.opacity = "1";
}

document.addEventListener("readystatechange", function checkReady() {
  if (document.readyState === "complete") {
    doSomething();
    document.removeEventListener("readystatechange", checkReady);
  }
});

//Contact Form 7、バリデーション

// 全角文字のみチェック（1文字でも半角が入っていたらNG）
document.addEventListener("DOMContentLoaded", () => {
  const inputElement = document.querySelector(".wpcf7-validates-as-required");
  const errorMessages = document.querySelector(".error-message");
  const outputs = document.querySelector(".wpcf7-response-output");
  // const outputs = document.querySelector(
  //   ".wpcf7 form.init .wpcf7-response-output"
  // );
  // const abc = document.querySelector(".wpcf7-response-output");
  const element = document.querySelector(
    ".wpcf7 form.invalid .wpcf7-response-output"
  );

  if (inputElement && errorMessages) {
    inputElement.addEventListener("input", function () {
      const nameValue = inputElement.value.trim();

      if (nameValue === "") {
        errorMessages.style.display = "none";
        outputs.style.display = block;
        return;
      }

      const isAllZenkaku = /^[^\x01-\x7E\uFF61-\uFF9F]+$/.test(nameValue);

      if (!isAllZenkaku) {
        errorMessages.style.display = "block";
        outputs.style.display = block;
      } else {
        errorMessages.style.display = "none";
      }
    });
  }
});

document.addEventListener("DOMContentLoaded", () => {
  const inputElement = document.querySelector(".wpcf7-validates-as-required");
  const errorMessages = document.querySelector(".error-message");

  if (inputElement && errorMessages) {
    inputElement.addEventListener("input", function () {
      const nameValue = inputElement.value.trim();

      if (nameValue === "") {
        errorMessages.style.display = "none";
        return;
      }

      const isAllZenkaku = /^[^\x01-\x7E\uFF61-\uFF9F]+$/.test(nameValue);

      if (!isAllZenkaku) {
        errorMessages.style.display = "block";
      } else {
        errorMessages.style.display = "none";
      }
    });
  }
});
