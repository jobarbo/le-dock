import Splide from "@splidejs/splide";

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
      perPage: 2,
      focus: "center",
      trimSpace: false,
      autoWidth: true,
      breakpoints: {
        768: {
          perPage: 1,
          gap: "1rem",
        },
      },
    });

    this.splide.mount();
  }
}

export default TalentSlider;
