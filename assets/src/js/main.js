import Nav from "./_nav";
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
    }
    initGeneral();
  },
};

document.addEventListener("DOMContentLoaded", () => {
  App.init();
});
