class appPAW {
	constructor() {
        //Inicializar la funcionalidad Menu
        //document.addEventListener("DOMContentLoaded", () => {
		//PAW.cargarScript("PAW-Menu", "js/components/paw-menu.js", () => {	
		//		let menu = new PAWMenu("nav");
		//	});
		//}
        //);
	//Inicializar la funcionalidad Carousel
		document.addEventListener("DOMContentLoaded", () => {
			let contenedor = document.querySelector("main.obrasocial");

			if (contenedor) {
				PAW.cargarScript("PAWcarousel", "assets/js/components/PAWcarousel.js", () => {
					let Imagenes = [
						"/assets/img/obrasocialej.png",
						"/assets/img/obrasocialej.png",
						"/assets/img/obrasocialej.png",
						"/assets/img/obrasocialej.png"
					];

					let carousel = new PAWcarousel(Imagenes, contenedor);
				});
			}
		});
	}
}

let app = new appPAW();
