import Splide from "@splidejs/splide";
import { AutoScroll } from "@splidejs/splide-extension-auto-scroll";
class LogoSlider {
  constructor() {
    this.slide = document.querySelector("[data-logo-slide]");
    this.splide = "";
    if (this.slide) {
      this.manageEvents();
    }
  }

  manageEvents() {
    // Managing events
    this.initSlider();

    window.addEventListener("resize", () => {
      this.splide.destroy();
      this.initSlider();
    });
  }

  initSlider() {
    this.splide = new Splide(".projects__logo-container", {
      arrows: false,
      pagination: false,
      drag: "free",
      perPage: 2,
      start: 0,
      gap: "12rem",
      padding: "5rem",
      type: "loop",
      autoWidth: true,
      autoScroll: {
        speed: 1,
      },

      breakpoints: {
        768: {
          gap: "6rem",
        },
      },
    });

    this.splide.mount({ AutoScroll });
  }
}

export default LogoSlider;
