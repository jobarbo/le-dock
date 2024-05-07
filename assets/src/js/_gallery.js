import MiniMasonry from "minimasonry";

class Gallery {
  constructor() {
    this.gallery = document.querySelector("[data-masonry]");

    if (this.gallery) {
      // if device is tablet or bigger
      if (window.innerWidth > 768) {
        this.masonry = new MiniMasonry({
          container: document.querySelector("[data-masonry]"),
          item: document.querySelector("[data-masonry-item]"),
          gutter: 10,
          baseWidth: 500,
          minify: true,
          wedge: false,
        });
      } else {
        this.masonry = new MiniMasonry({
          container: document.querySelector("[data-masonry]"),
          item: document.querySelector("[data-masonry-item]"),
          gutter: 10,
          baseWidth: 300,
          minify: true,
          wedge: false,
        });
      }
    }
  }
}

export default Gallery;