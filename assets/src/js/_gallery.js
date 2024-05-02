import MiniMasonry from "minimasonry";

class Gallery {
  constructor() {
    this.gallery = document.querySelector("[data-masonry]");

    if (this.gallery) {
      this.masonry = new MiniMasonry({
        container: document.querySelector("[data-masonry]"),
        item: document.querySelector("[data-masonry-item]"),
        gutter: 10,
        baseWidth: 500,
        minify: true,
        wedge: false,
      });
    }
  }
}

export default Gallery;
