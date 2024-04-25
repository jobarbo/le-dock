import Splide from "@splidejs/splide";

class WordSlider {
  constructor() {
    this.manageEvents();

    // Managing events
  }

  manageEvents() {
    // Managing events
    let splide = new Splide(".splide", {
      direction: "ttb",
      height: "10rem",
      arrows: false,
      pagination: false,
      autoplay: false,
      type: "loop",
      start: 1,
    });

    splide.mount();
  }
}

export default WordSlider;
