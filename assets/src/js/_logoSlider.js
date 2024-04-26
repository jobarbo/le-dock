import Splide from "@splidejs/splide";
import { AutoScroll } from "@splidejs/splide-extension-auto-scroll";
class LogoSlider {
  constructor() {
    this.slide = document.querySelector("[data-logo-slide]");
    this.splide = "";
    this.manageEvents();
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
      perPage: 4,
      start: 0,
      gap: "6rem",
      padding: "5rem",
      type: "loop",
      autoScroll: {
        speed: 2,
      },
    });

    this.splide.mount({ AutoScroll });
  }
}

export default LogoSlider;
