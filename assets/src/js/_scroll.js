import { animate, inView, glide, stagger } from "motion";

export default class Scroll {
  constructor() {
    this.init();
  }

  init() {
    this.scroll();
  }

  scroll() {
    inView("[data-hero]", (info) => {
      console.log(info);
      if (info.isIntersecting) {
        animate(
          "[data-hero-title]",
          {
            opacity: 1,
            transform: "translateY(0)",
          },
          { delay: 0.4, duration: 0.6, easing: glide() }
        );
        animate(
          "[data-word-slider]",
          {
            opacity: 1,
            transform: "translateY(0)",
          },
          { delay: 0.6, duration: 0.6, easing: glide() }
        );
        animate(
          "[data-hero-button]",
          {
            opacity: 1,
            transform: "translateY(0)",
          },
          { delay: 0.8, duration: 0.6, easing: glide() }
        );
        animate(
          "[data-header-logo]",
          {
            opacity: 1,
            transform: "translateY(0)",
          },
          { delay: 1, duration: 0.6, easing: glide() }
        );
        animate(
          "[data-header-nav-item]",
          {
            opacity: 1,
            transform: "translateY(0)",
          },
          {
            delay: stagger(0.1, { start: 1.2 }),
            duration: 0.6,
            easing: glide(),
          }
        );
      }
    });

    inView("[data-talents]", (info) => {
      if (info.isIntersecting) {
        animate(
          "[data-talents-title]",
          {
            opacity: 1,
            transform: "translateY(0)",
          },
          { delay: 0.4, duration: 0.6, easing: glide() }
        );
        animate(
          "[data-talents-title-highlight]",
          {
            opacity: 1,
            transform:
              "scaleX(1.25) scaleY(1.25) translateY(0) translateX(-15px)",
          },
          { delay: 1, duration: 0.6, easing: glide() }
        );
      }
    });
  }
}
