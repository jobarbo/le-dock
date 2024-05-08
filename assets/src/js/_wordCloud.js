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
        { name: "PRODUCTION VIDÉO", value: 29 },
        { name: "TOURNAGE", value: 25 },
        { name: "MUSIQUE", value: 22 },
        { name: "2D", value: 35 },
        { name: "ENTREVUE", value: 26 },
        { name: "MONTAGE", value: 21 },
        { name: "DESIGN", value: 24 },
        { name: "PUBLICITÉ", value: 18 },
        { name: "SOUND DESIGN", value: 29 },
        { name: "RECHERCHE", value: 24 },
        { name: "GESTION", value: 33 },
        { name: "PRODUCTION", value: 18 },
        { name: "3D", value: 27 },
        { name: "VFX", value: 35 },
        { name: "CONCEPTION", value: 22 },
        { name: "MOTION DESIGN", value: 19 },
        { name: "CONTENUE DE MARQUE", value: 26 },
        { name: "FILM D'ENTREPRISE", value: 22 },
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
      this.strength = -40;
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

    let link = this.myChart
      .selectAll("line")
      .data(this.links)
      .append("line")
      .attr("stroke", this.palette.gray)
      .attr("stroke-width", 1);

    let node = this.myChart
      .selectAll("circle")
      .data(this.nodes)
      .enter()
      .append("div");

    // Keep track of the previously selected node

    let prevNode = null;

    node.on("click", (event, d) => {
      // Reset all nodes to their original color
      node.selectAll("p").style("color", (d) => {
        if (d.value <= 40) {
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

    node
      .append("circle")
      .attr("cx", function (d) {
        return d.x;
      })
      .attr("cy", function (d) {
        return d.y;
      })
      .attr("r", (d, i) => {
        // Changed to arrow function
        console.log(d.value);
        if (i > 0) {
          return this.cw + d.value;
        } else {
          return this.cw + 35;
        }
      })
      .attr("fill", (d, i) => {
        // Changed to arrow function
        if (i > 0) {
          return this.colors(i);
        } else {
          return "#fff";
        }
      })
      .attr("strokewidth", function (d, i) {
        if (i > 0) {
          return "0";
        } else {
          return "2";
        }
      })
      .attr("stroke", function (d, i) {
        if (i > 0) {
          return "";
        } else {
          return "black";
        }
      });

    this.simulation.on("tick", () => {
      node.style("left", (d) => `${d.x}px`).style("top", (d) => `${d.y}px`);

      link
        .attr("x1", (d) => d.source.x)
        .attr("y1", (d) => d.source.y)
        .attr("x2", (d) => d.target.x)
        .attr("y2", (d) => d.target.y);
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
        if (d.value <= 40) {
          return `${this.palette.gray}`;
        } else if (d.value > 40) {
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
