class Hero {
  constructor() {
    this.heroText = document.querySelector("[data-hero-text]");
    this.container = document.querySelector("[data-hero-container]");
    this.play = document.querySelector("[data-hero-play]");
    this.close = document.querySelector("[data-hero-close]");
    this.manageEvents();
  }

  manageEvents() {
    // Managing events
    this.play.addEventListener("click", () => {
      console.log("play video");
      this.playVideo();
    });

    this.close.addEventListener("click", () => {
      this.closeVideo();
    });
  }

  playVideo() {
    this.heroText.classList.add(`${this.heroText.classList[0]}--hidden`);
    this.container.classList.add(`${this.container.classList[0]}--hidden`);
    this.play.classList.add(`${this.play.classList[0]}--hidden`);
    this.close.classList.remove(`${this.close.classList[0]}--hidden`);
  }

  closeVideo() {
    this.heroText.classList.remove(`${this.heroText.classList[0]}--hidden`);
    this.container.classList.remove(`${this.container.classList[0]}--hidden`);
    this.play.classList.remove(`${this.play.classList[0]}--hidden`);
    this.close.classList.add(`${this.close.classList[0]}--hidden`);
  }
}

export default Hero;
