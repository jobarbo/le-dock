class Nav {
  constructor() {
    this.toggle = document.querySelector("[data-nav-toggle]");
    this.nav = document.querySelector("[data-nav]");
    this.header = document.querySelector("[data-header]");
    this.manageEvents();
  }

  manageEvents() {
    // Managing events
    this.toggle.addEventListener("click", () => {
      this.toggleNav();
    });

    // check for scroll event, if the user scroll more than 100px, add class to the header
    window.addEventListener("scroll", () => {
      if (window.scrollY > 100) {
        this.header.classList.add(`${this.header.classList[0]}--scrolled`);
      } else {
        this.header.classList.remove(`${this.header.classList[0]}--scrolled`);
      }
    });
  }

  toggleNav() {
    this.nav.classList.toggle(`${this.nav.classList[0]}--open`);
    this.toggle.classList.toggle(`${this.toggle.classList[0]}--open`);
  }
}

export default Nav;
