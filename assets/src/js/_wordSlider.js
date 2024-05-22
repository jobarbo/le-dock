import Splide from "@splidejs/splide";
import Swiper from "swiper";

import { Autoplay } from "swiper/modules";
// Configure Swiper to use modules
class WordSlider {
  constructor() {
    this.slides = document.querySelectorAll("[data-word-slide]");
    this.activeSlide = document.querySelector(".swiper-slide-active");
    this.nextSlides = [];
    this.swiper = null;

    if (this.slides.length > 0) {
      this.initSlider();
      this.manageEvents();
    }
  }

  manageEvents() {
    this.swiper.on("transitionEnd", () => {
      this.updateActiveSlide();
      this.updateNextSlides();
    });
  }

  updateActiveSlide() {
    this.activeSlide = document.querySelector(".swiper-slide-active");
  }

  updateNextSlides() {
    if (!this.activeSlide) return;

    this.nextSlides = [
      this.activeSlide.nextElementSibling,
      this.activeSlide.nextElementSibling?.nextElementSibling,
    ];

    this.slides.forEach((slide) => {
      slide.classList.remove("next", "next--1", "next--2");
    });

    this.nextSlides.forEach((slide, index) => {
      if (slide) {
        slide.classList.add(`next`, `next--${index + 1}`);
      }
    });
  }

  initSlider() {
    this.swiper = new Swiper(".swiper", {
      direction: "vertical",
      slidesPerView: 2,
      loop: true,
      loopAdditionalSlides: 1,
      modules: [Autoplay],
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      },
    });

    this.updateActiveSlide();
    this.updateNextSlides();
  }
}

export default WordSlider;
