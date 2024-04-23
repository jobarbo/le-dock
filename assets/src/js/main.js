import General from "./_general";
import Utils from "./helpers/_utils";

const App = {
  /**
   * App.init
   */
  init() {
    // General scripts
    function initGeneral() {
      const utils = new Utils();
      return new General();
    }
    initGeneral();
  },
};

document.addEventListener("DOMContentLoaded", () => {
  App.init();
});
