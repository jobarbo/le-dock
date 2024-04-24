import Nav from "./_nav";
import Hero from "./_hero";
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
    }
    initGeneral();
  },
};

document.addEventListener("DOMContentLoaded", () => {
  App.init();
});
