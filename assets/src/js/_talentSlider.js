import Splide from "@splidejs/splide";
import { AutoScroll } from "@splidejs/splide-extension-auto-scroll";

class TalentSlider {
  constructor() {
    this.slide = document.querySelector("[data-talents-slide]");
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
    this.splide = new Splide(".talents", {
      arrows: false,
      pagination: false,
      type: "loop",
      gap: "4rem",
      perPage: 1,
      focus: "center",
      trimSpace: false,
      autoWidth: true,
      autoScroll: {
        speed: 0.5,
      },
      breakpoints: {
        768: {
          perPage: 1,
          gap: "1rem",
        },
        450: {
          perPage: 1,
          gap: "1rem",
        },
      },
    });

    this.splide.mount({ AutoScroll });
  }
}

export default TalentSlider;
