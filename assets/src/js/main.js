import Nav from "./_nav";
import Hero from "./_hero";
import WordSlider from "./_wordSlider";
import LogoSlider from "./_logoSlider";
import Utils from "./helpers/_utils";

const App = {
  /**
   * App.init
   */
  init() {
    // General scripts
    function initGeneral() {
      const utils = new Utils();
      const nav = new Nav();
      const hero = new Hero();
      const wordSlider = new WordSlider();
      const logoSlider = new LogoSlider();
    }
    initGeneral();
  },
};

document.addEventListener("DOMContentLoaded", () => {
  App.init();
});
