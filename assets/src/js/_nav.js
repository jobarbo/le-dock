class Nav {
  constructor() {
    this.toggle = document.querySelector("[data-nav-toggle]");
    this.nav = document.querySelector("[data-nav]");
    this.manageEvents();
  }

  manageEvents() {
    // Managing events
    this.toggle.addEventListener("click", () => {
      this.toggleNav();
    });
  }

  toggleNav() {
    this.nav.classList.toggle(`${this.nav.classList[0]}--open`);
    this.toggle.classList.toggle(`${this.toggle.classList[0]}--open`);
  }
}

export default Nav;
