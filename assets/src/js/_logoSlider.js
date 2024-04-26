import Splide from "@splidejs/splide";

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
      perPage: 4,
      start: 0,
    });

    this.splide.mount();
  }
}

export default LogoSlider;
