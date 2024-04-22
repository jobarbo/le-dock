import LocomotiveScroll from "locomotive-scroll";

export default class Scroll {
	constructor() {
		this.scroll = new LocomotiveScroll({
			el: document.querySelector("[data-scroll-container]"),
			smooth: true,
		});
		this.var = "test";
		console.log(this.scroll);
		this.manageEvents();
	}

	manageEvents() {
		console.log(this.var);
	}
}
