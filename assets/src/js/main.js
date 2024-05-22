import Nav from "./_nav";
import Hero from "./_hero";
import WordSlider from "./_wordSlider";
import LogoSlider from "./_logoSlider";
import ProjectSlider from "./_projectSlider";
import WordCloud from "./_wordCloud";
import TalentSlider from "./_talentSlider";
import Gallery from "./_gallery";
import Utils from "./helpers/_utils";
import Scroll from "./_scroll";

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
      const projectSlider = new ProjectSlider();
      const talentSlider = new TalentSlider();
      const wordCloud = new WordCloud();
      const gallery = new Gallery();
      const scroll = new Scroll();
    }
    initGeneral();
  },
};

document.addEventListener("DOMContentLoaded", () => {
  App.init();
});
