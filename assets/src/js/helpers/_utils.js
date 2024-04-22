export default class Utils {
	static map(value, x1, y1, x2, y2) {
		return ((value - x1) * (y2 - x2)) / (y1 - x1) + x2;
	}

	static deviceType() {
		const ua = navigator.userAgent;
		let device = "desktop";
		if (/(tablet|ipad|playbook|silk)|(android(?!.*mobi))/i.test(ua)) {
			device = "tablet";
		} else if (/Mobile|Android|iP(hone|od)|IEMobile|BlackBerry|Kindle|Silk-Accelerated|(hpw|web)OS|Opera M(obi|ini)/.test(ua)) {
			device = "mobile";
		} else {
			device = "desktop";
		}
		return device;
	}
}
