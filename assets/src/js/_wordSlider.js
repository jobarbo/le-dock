import Splide from "@splidejs/splide";

class WordSlider {
  constructor() {
    this.slide = document.querySelector(".splide");
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
    let splide = new Splide(".splide", {
      direction: "ttb",
      height: `${this.fontSize * 2}px`,
      arrows: false,
      pagination: false,
      autoplay: false,
      type: "false",
      start: 0,
    });

    splide.mount();
  }
}

export default WordSlider;
