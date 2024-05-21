import Splide from "@splidejs/splide";

class ProjectSlider {
  constructor() {
    this.slide = document.querySelector("[data-project-slide]");
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
    this.splide = new Splide(".projects__slider", {
      arrows: false,
      pagination: false,
      type: "loop",
      gap: "-6rem",

      breakpoints: {
        768: {
          perPage: 1,
          gap: "-2rem",
        },
      },
    });

    this.splide.mount();
  }
}

export default ProjectSlider;
