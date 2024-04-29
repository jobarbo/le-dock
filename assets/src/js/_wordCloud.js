import * as d3 from "d3";

class WordCloud {
  constructor() {
    this.w = 1000;
    this.h = 800;
    this.cw = 5;
    this.palette = { blue: "#0d1c30", gray: "#d1d3db" };

    this.colors = d3.scaleOrdinal(d3.schemeTableau10);
    this.links = [];
    this.nodes = [
      { name: "PRODUCTION VIDÉO", value: 31 },
      { name: "TOURNAGE", value: 15 },
      { name: "MUSIQUE", value: 22 },
      { name: "2D", value: 15 },
      { name: "ENTREVUE", value: 26 },
      { name: "MONTAGE", value: 13 },
      { name: "DESIGN", value: 24 },
      { name: "PUBLICITÉ", value: 18 },
      { name: "SOUND DESIGN", value: 29 },
      { name: "RECHERCHE", value: 14 },
      { name: "GESTION", value: 13 },
      { name: "PRODUCTION", value: 18 },
      { name: "3D", value: 27 },
      { name: "VFX", value: 15 },
      { name: "CONCEPTION", value: 18 },
      { name: "MOTION DESIGN", value: 19 },
      { name: "CONTENUE DE MARQUE", value: 26 },
      { name: "FILM D'ENTREPRISE", value: 12 },
    ];

    this.myChart = "";

    this.init();
  }

  init() {
    this.myChart = d3
      .select("[data-services-cloud]")
      .append("div")
      .classed("svg-container", true)
      .append("svg")
      .attr("preserveAspectRatio", "xMinYMin meet")
      .attr("viewBox", "0 0 1000 800")
      .classed("svg-content-responsive", true);

    // I want the gravity to be centered in the middle of the screen
    let simulation = d3
      .forceSimulation(this.nodes)
      .force("charge", d3.forceManyBody().strength(-30))
      .force("center", d3.forceCenter(this.w / 2, this.h / 2));
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
      .append("g");

    // Keep track of the previously selected node

    let prevNode = null;

    node.on("click", (event, d) => {
      // Changed to arrow function
      console.log("Clicked node", d.name);
      // If there was a previously selected node, revert its color
      if (prevNode) {
        d3.select(prevNode).select("text").attr("fill", this.palette.gray);
      }
      console.log(this);
      // Change the color of the clicked node
      d3.select(event.currentTarget)
        .select("text")
        .attr("fill", this.palette.blue);

      // Update the previously selected node
      prevNode = event.currentTarget;
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

    /*     function dragstarted(event, d) {
      if (!event.active) simulation.alphaTarget(0.3).restart();
      d.fx = d.x;
      d.fy = d.y;
    }

    function dragged(event, d) {
      d.fx = event.x;
      d.fy = event.y;
    }

    function dragended(event, d) {
      if (!event.active) simulation.alphaTarget(0);
      d.fx = null;
      d.fy = null;
    } */

    simulation.on("tick", function (e) {
      node.attr("transform", function (d, i) {
        return "translate(" + d.x + "," + d.y + ")";
      });

      link
        .attr("x1", function (d) {
          return d.source.x;
        })
        .attr("y1", function (d) {
          return d.source.y;
        })
        .attr("x2", function (d) {
          return d.target.x;
        })
        .attr("y2", function (d) {
          return d.target.y;
        });
    });

    // Add text to the nodes
    node
      .append("text")
      .text(function (d) {
        return d.name;
      })
      .attr("font-family", "anek", "Helvetica Neue, Helvetica")
      .attr("font-weight", "800")
      .attr("fill", (d, i) => {
        if (d.value <= 30) {
          return this.palette.gray;
        } else if (d.value > 30) {
          return this.palette.blue;
        } else {
          return this.palette.blue;
        }
      })
      .attr("text-anchor", function (d, i) {
        return "middle";
      })

      .attr("dominant-baseline", "middle")
      .attr("font-size", function (d, i) {
        return d.value;
      });
    // I want that when I click on a node, that node becomes the center of the screen and changes its color to red and resets the color of the previous clicked node
  }
}

export default WordCloud;