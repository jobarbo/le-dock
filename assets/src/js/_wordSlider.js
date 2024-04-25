import Splide from "@splidejs/splide";

class WordSlider {
  constructor() {
    this.slide = document.querySelector("[data-word-slide]");
    this.splide = "";
    // get the font size of the slide, remove the px and store it in a variable as a number
    this.fontSize = parseInt(
      window.getComputedStyle(this.slide).getPropertyValue("font-size"),
      10
    );
    console.log(this.fontSize);
    this.manageEvents();

    // Managing events
  }

  manageEvents() {
    // Managing events
    this.initSlider();

    window.addEventListener("resize", () => {
      this.fontSize = parseInt(
        window.getComputedStyle(this.slide).getPropertyValue("font-size"),
        10
      );
      this.splide.destroy();
      this.initSlider();
    });
  }

  initSlider() {
    this.splide = new Splide(".splide", {
      direction: "ttb",
      height: `${this.fontSize * 1.1}px`,
      arrows: false,
      pagination: false,
      autoplay: false,
      type: "false",
      start: 0,
    });

    this.splide.mount();
  }
}

export default WordSlider;
