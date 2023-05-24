class appPAW {
	URL_BASE = "http://localhost:8080"
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

			contenedor = document.querySelector("main.sala-espera");

			if (contenedor) {
				PAW.cargarScript("SalaEspera", "assets/js/components/SalaEspera.js", () => {
					let sala = new SalaEspera(contenedor, this.URL_BASE);
				});
			}
		});
	}
}

let app = new appPAW();
