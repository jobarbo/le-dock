import { animate, inView, glide, stagger } from "motion";

export default class Scroll {
  constructor() {
    this.init();
  }

  init() {
    // if on desktop
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

    inView("[data-about-text]", (info) => {
      if (info.isIntersecting) {
        animate(
          "[data-about-svg]",
          {
            opacity: 1,
            transform: "scale(1) translateY(0)",
          },
          {
            delay: stagger(0.15, { start: 0.2 }),
            duration: 0.4,
            easing: glide(),
          }
        );
        animate(
          "[data-about-title]",
          {
            opacity: 1,
            transform: "translateY(0)",
          },
          { delay: 0.3, duration: 0.6, easing: glide() }
        );

        animate(
          "[data-about-text]",
          {
            opacity: 1,
            transform: "translateY(0)",
          },
          { delay: 0.5, duration: 0.6, easing: glide() }
        );
      }
    });

    inView("[data-project-slider]", (info) => {
      if (info.isIntersecting) {
        animate(
          "[data-project-slider]",
          {
            opacity: 1,
            transform: "translateY(0)",
          },
          {
            delay: stagger(0.3, { start: 0.6 }),
            duration: 0.6,
            easing: glide(),
          }
        );
        animate(
          "[data-project-title]",
          {
            opacity: 1,
            transform: "translateY(0)",
          },
          { delay: 0.3, duration: 0.6, easing: glide() }
        );
      }
    });

    inView("[data-project-logo-container]", (info) => {
      if (info.isIntersecting) {
        animate(
          "[data-project-logo-container]",
          {
            opacity: 1,
            transform: "scaleX(1)",
          },
          { delay: 0.4, duration: 0.3, easing: glide() }
        );
        animate(
          "[data-logo-slide]",
          {
            opacity: 1,
          },
          {
            delay: stagger(0.1, { start: 0 }),
            duration: 1.4,
            easing: glide(),
          }
        );
      }
    });

    inView("[data-services]", (info) => {
      if (info.isIntersecting) {
        animate(
          "[data-services-word]",
          {
            opacity: 1,
            transform: "translateY(0)",
          },
          {
            delay: stagger(0.1, { start: 0 }),
            duration: 0.4,
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
        animate(
          "[data-talents-position]",
          {
            opacity: 1,
          },
          { delay: 1.3, duration: 0.6, easing: glide() }
        );
        animate(
          "[data-talents-name]",
          {
            opacity: 1,
          },
          { delay: 1.5, duration: 0.6, easing: glide() }
        );
        animate(
          "[data-talents-text]",
          {
            opacity: 1,
          },
          { delay: 1.7, duration: 0.6, easing: glide() }
        );
        animate(
          "[data-talents-quote]",
          {
            opacity: 1,
          },
          { delay: 1.9, duration: 0.6, easing: glide() }
        );
        animate(
          "[data-talents-image]",
          {
            opacity: 1,
            transform: "translateY(0)",
          },
          {
            delay: stagger(0.2, { start: 0 }),
            duration: 0.6,
            easing: glide(),
          }
        );
      }
    });

    inView("[data-contact]", (info) => {
      if (info.isIntersecting) {
        animate(
          "[data-contact]",
          {
            opacity: 1,
            transform: "translateY(0)",
          },
          { delay: 0.3, duration: 0.6, easing: glide() }
        );
        animate(
          "[data-contact-title]",
          {
            opacity: 1,
            transform: "translateY(0)",
          },
          { delay: 0.8, duration: 0.6, easing: glide() }
        );
        animate(
          "[data-contact-text]",
          {
            opacity: 1,
            transform: "translateY(0)",
          },
          { delay: 1, duration: 0.6, easing: glide() }
        );
        animate(
          "[data-contact-form]",
          {
            opacity: 1,
            transform: "translateY(0)",
          },
          { delay: 1.2, duration: 0.6, easing: glide() }
        );
      }
    });

    inView("[data-single-hero]", (info) => {
      if (info.isIntersecting) {
        animate(
          "[data-header-logo]",
          {
            opacity: 1,
            transform: "translateY(0)",
          },
          { delay: 0, duration: 0.6, easing: glide() }
        );
        animate(
          "[data-header-nav-item]",
          {
            opacity: 1,
            transform: "translateY(0)",
          },
          {
            delay: stagger(0.1, { start: 0.25 }),
            duration: 0.6,
            easing: glide(),
          }
        );

        animate(
          "[data-single-hero-media]",
          {
            opacity: 1,
            transform: "translateY(0)",
          },
          { delay: 1, duration: 0.6, easing: glide() }
        );
      }
    });

    inView(
      "[data-single-info-text]",
      (info) => {
        if (info.isIntersecting) {
          animate(
            "[data-single-info-title]",
            {
              opacity: 1,
              transform: "translateY(0)",
            },
            { delay: 0.1, duration: 0.4, easing: glide() }
          );
          animate(
            "[data-single-info-text]",
            {
              opacity: 1,
              transform: "translateY(0)",
            },
            { delay: 0.3, duration: 0.4, easing: glide() }
          );
          animate(
            "[data-single-list-title]",
            {
              opacity: 1,
              transform: "translateY(0)",
            },
            { delay: 0.5, duration: 0.4, easing: glide() }
          );
          animate(
            "[data-single-list-item]",
            {
              opacity: 1,
              transform: "translateY(0)",
            },
            {
              delay: stagger(0.1, { start: 0.8 }),
              duration: 0.4,
              easing: glide(),
            }
          );
        }
      },
      { amount: 0.35 }
    );

    inView(
      "[data-single-gallery]",
      (info) => {
        if (info.isIntersecting) {
          animate(
            "[data-single-gallery-img]",
            {
              opacity: 1,
              transform: "translateY(0)",
            },
            {
              delay: stagger(0.1, { start: 0 }),
              duration: 0.6,
              easing: glide(),
            }
          );
        }
      },
      { amount: 0.5 }
    );

    inView(
      "[data-single-navigation]",
      (info) => {
        if (info.isIntersecting) {
          animate(
            "[data-single-navigation-item]",
            {
              opacity: 1,
              transform: "translateY(0)",
            },
            {
              delay: 1,
              duration: 0.8,
              easing: glide(),
            }
          );
        }
      },
      { amount: 1 }
    );
  }
}
