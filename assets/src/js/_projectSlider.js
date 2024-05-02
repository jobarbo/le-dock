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
      gap: "-4rem",
    });

    this.splide.mount();
  }
}

export default ProjectSlider;
