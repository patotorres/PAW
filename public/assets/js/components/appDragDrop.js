class appDragDrop {
	constructor() {
        document.addEventListener("DOMContentLoaded", () => {
          PAW.cargarScript("PAWdragdropfile", "assets/js/components/PAWdragdropfile.js", () => {
			let carousel = new PAWdragdropfile();
			});
        });
    }
}

let  DragDrop = new  appDragDrop();