class SalaEspera {
	constructor(pContenedor, pUrlBase) {
		this.pContenedor = pContenedor;
		this.urlBase = pUrlBase
		this.pacienteActual = "";

		this.lista = PAW.nuevoElemento("ul", "");
		//this.tiempoEspera = PAW.nuevoElemento("p", "", {"class": "tiempo-espera"});

		pContenedor.appendChild(this.lista);
		//pContenedor.appendChild(this.tiempoEspera);

		this.actualizarLista();

		setInterval(() => {
			this.actualizarLista();
		}, 10000);
	}

	actualizarLista() {
		fetch("/sala-espera?type=json")
			.then((response) => {
				response.json().then(data => {
					//this.tiempoEspera.textContent = "Tiempo estimado " + data.tiempo_estimado + " minutos";
					this.lista.replaceChildren();

					this.lista.appendChild(PAW.nuevoElemento("li", "Turno"));
					this.lista.appendChild(PAW.nuevoElemento("li", "Consultorio"));
					this.lista.appendChild(PAW.nuevoElemento("li", "Paciente"));

					if(data.lista_turnos[0].id != this.pacienteActual) {
						this.pacienteActual = data.lista_turnos[0].id;
						this.playAlertSound();
					}

					for (let key in data.lista_turnos) {
						let turno = data.lista_turnos[key];
						let fila = PAW.nuevoElemento("li", "");
						let ul = PAW.nuevoElemento("ul", "");

						ul.appendChild(PAW.nuevoElemento("li", turno.id));
						ul.appendChild(PAW.nuevoElemento("li", turno.consultorio));
						ul.appendChild(PAW.nuevoElemento("li", turno.nombre + " " + turno.apellido));

						fila.appendChild(ul);

						this.lista.appendChild(fila);
					}
				});
			})
			.catch((err) => {
				console.log(err);
			});
	}

	playAlertSound() {
      const audio = new Audio('/assets/alerta.mp3');
      audio.play();
    }
}