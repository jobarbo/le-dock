import Splide from "@splidejs/splide";

class TalentSlider {
  constructor() {
    this.slide = document.querySelector("[data-talents-slide]");
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
    this.splide = new Splide(".talents", {
      arrows: false,
      pagination: false,
      type: "loop",
      gap: "-4rem",
    });

    this.splide.mount();
  }
}

export default TalentSlider;
