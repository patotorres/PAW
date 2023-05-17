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
          PAW.cargarScript("PAWcarousel", "assets/js/components/PAWcarousel.js", () => {
			let Imagenes =[
				"/assets/images/portadas/obrasocialej.png",
				"/assets/images/portadas/obrasocialej.png",
				"/assets/images/portadas/obrasocialej.png",
				"/assets/images/portadas/obrasocialej.png",
			]
			let carousel = new PAWcarousel(Imagenes,"#carousel");
			});
        });
    }
}

let app = new appPAW();
