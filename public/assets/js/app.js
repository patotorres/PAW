class appPAW {
	constructor() {
        //Inicializar la funcionalidad Menu
        document.addEventListener("DOMContentLoaded", () => {
		PAW.cargarScript("PAW-Menu", "js/components/paw-menu.js", () => {	
				let menu = new PAWMenu("nav");
			});
		}
        );
        //Inicializar la funcionalidad Carousell
        /*PAW.cargarScript("PAW-Menu", "js/components/paw-menu.js", () => {
			document.addEventListener("DOMContentLoaded", () => {
				let menu = new PAWMenu();
			});
		});*/
    }
}

let app = new appPAW();
