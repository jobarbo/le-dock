import * as d3 from "d3";

class WordCloud {
  constructor() {
    this.listElement = document.querySelector("[data-services-list]");
    if (this.listElement) {
      // get the x position of the list element
      this.listElementX = this.listElement.getBoundingClientRect().x;
      // get the y position of the list element
      this.listElementY = this.listElement.getBoundingClientRect().y;
      // get the width of the list element
      this.listElementWidth = this.listElement.getBoundingClientRect().width;
      // get the height of the list element
      this.listElementHeight = this.listElement.getBoundingClientRect().height;
      this.cw = 5;
      this.strength = -50;
      this.palette = { blue: "#0d1c30", gray: "#d1d3db" };
      this.colors = d3.scaleOrdinal(d3.schemeTableau10);
      this.links = [];
      this.simulation;
      this.myChart = "";
      this.nodes = [
        { name: "PRODUCTION VIDÉO", value: 50 },
        { name: "TOURNAGE", value: 35 },
        { name: "MUSIQUE", value: 32 },
        { name: "2D", value: 45 },
        { name: "ENTREVUE", value: 36 },
        { name: "MONTAGE", value: 31 },
        { name: "DESIGN", value: 34 },
        { name: "PUBLICITÉ", value: 28 },
        { name: "SOUND DESIGN", value: 39 },
        { name: "RECHERCHE", value: 34 },
        { name: "GESTION", value: 43 },
        { name: "PRODUCTION", value: 28 },
        { name: "3D", value: 37 },
        { name: "VFX", value: 45 },
        { name: "CONCEPTION", value: 32 },
        { name: "MOTION DESIGN", value: 29 },
        { name: "CONTENUE DE MARQUE", value: 36 },
        { name: "FILM D'ENTREPRISE", value: 32 },
      ];

      this.init();

      // check resize
      window.addEventListener("resize", () => {
        // Update dimensions
        this.listElementX = this.listElement.getBoundingClientRect().x;
        this.listElementY = this.listElement.getBoundingClientRect().y;
        this.listElementWidth = this.listElement.getBoundingClientRect().width;
        this.listElementHeight =
          this.listElement.getBoundingClientRect().height;

        // Update simulation center
        this.simulation.force(
          "center",
          d3.forceCenter(this.listElementWidth / 2, this.listElementHeight / 2)
        );

        // Redraw nodes
        node.style("left", (d) => `${d.x}px`).style("top", (d) => `${d.y}px`);
      });
    }
  }

  init() {
    if (window.innerWidth < 850 && window.innerWidth > 450) {
      this.strength = -30;
    } else if (window.innerWidth < 450) {
      this.strength = -10;
    } else {
      this.strength = (window.innerWidth / 30) * -1;
    }
    this.myChart = d3
      .select("[data-services-cloud]")
      .append("div")
      .classed("services__word-container", true)
      .attr("style", `width: 100%; height: ${this.listElementHeight}px`);
    // I want the gravity to be centered in the middle of the screen
    this.simulation = d3
      .forceSimulation(this.nodes)
      .force("charge", d3.forceManyBody().strength(this.strength))
      .force(
        "center",
        d3.forceCenter(this.listElementWidth / 2.5, this.listElementHeight / 2)
      );

    // make the simulation to take into account the limits of the container element

    let node = this.myChart
      .selectAll("div")
      .data(this.nodes)
      .enter()
      .append("div");

    // Keep track of the previously selected node

    let prevNode = null;

    node.on("click", (event, d) => {
      // Reset all nodes to their original color
      node.selectAll("p").style("color", (d) => {
        if (d.value <= 50) {
          return this.palette.gray;
        } else {
          return this.palette.blue;
        }
      });

      // Reset all nodes to their original size
      node.selectAll("p").style("font-size", (d, i) => {
        if (window.innerWidth < 850 && window.innerWidth > 450) {
          return `${d.value / 1.5}px`;
        } else if (window.innerWidth < 450) {
          return `${d.value / 2.5}px`;
        } else {
          return `${d.value}px`;
        }
      });

      // Change the color of the clicked node to blue
      d3.select(event.currentTarget)
        .select("p")
        .style("color", this.palette.blue);

      // Enlarge the clicked node
      d3.select(event.currentTarget)
        .select("p")
        .style("font-size", (d) => {
          if (window.innerWidth < 850 && window.innerWidth > 450) {
            return `${d.value / 1.2}px`;
          } else if (window.innerWidth < 450) {
            return `${d.value / 2}px`;
          } else {
            return `${d.value * 1.4}px`;
          }
        });
    });

    this.simulation.on("tick", () => {
      node.style("left", (d) => `${d.x}px`).style("top", (d) => `${d.y}px`);
    });

    // Add text to the nodes
    node
      .append("p")
      .text(function (d) {
        return d.name;
      })
      .style("font-family", "anek")
      .style("font-weight", "800")
      .style("color", (d, i) => {
        if (d.value <= 50) {
          return `${this.palette.gray}`;
        } else if (d.value > 50) {
          return `${this.palette.blue}`;
        } else {
          return `${this.palette.gray}`;
        }
      })
      .style("font-size", function (d, i) {
        if (window.innerWidth < 850 && window.innerWidth > 450) {
          return `${d.value / 1.5}px`;
        } else if (window.innerWidth < 450) {
          return `${d.value / 2.5}px`;
        } else {
          return `${d.value}px`;
        }
      });
    // I want that when I click on a node, that node becomes the center of the screen and changes its color to red and resets the color of the previous clicked node
  }
}

export default WordCloud;
