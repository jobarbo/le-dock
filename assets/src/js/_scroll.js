import { animate, inView, glide } from "motion";

export default class Scroll {
  constructor() {
    this.init();
  }

  init() {
    this.scroll();
  }

  scroll() {
    inView(".hero", (info) => {
      console.log(info);
      if (info.isIntersecting) {
        animate(
          ".hero__title",
          {
            opacity: 1,
            transform: "translateY(0)",
          },
          { delay: 0.4, duration: 0.6, easing: glide() }
        );
        animate(
          ".hero__word-slider",
          {
            opacity: 1,
            transform: "translateY(0)",
          },
          { delay: 0.6, duration: 0.6, easing: glide() }
        );
      }
    });
  }
}
