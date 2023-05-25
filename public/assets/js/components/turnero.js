document.addEventListener("DOMContentLoaded", () => {
    const especialistas = [
        {
          "matricula": "123",
          "nombre": "Dr. Juan Pérez",
          "apellido": "string",
          "diasQueAtiende": ["Lunes", "Miércoles", "Viernes"],
          "horarioInicio": {
              "horas": 9,
              "minutos": 0
          },
          "horarioFinalizacion": {
              "horas": 16,
              "minutos": 0
          },
          "duracionTurno": 30,
          "turnosTomados": [
              {
                  "dia": "Lunes",
                  "horas": 9,
                  "minutos": 0
              },
              {
                  "dia": "Lunes",
                  "horas": 9,
                  "minutos": 30
              },
              {
                  "dia": "Miércoles",
                  "horas": 9,
                  "minutos": 0
              }
          ]
        },
        {
          "matricula": "456",
          "nombre": "Dra. María Gómez",
          "apellido": "string",
          "diasQueAtiende": ["Martes", "Jueves"],
          "horarioInicio": {
              "horas": 10,
              "minutos": 0
          },
          "horarioFinalizacion": {
              "horas": 17,
              "minutos": 0
          },
          "duracionTurno": 30,
          "turnosTomados": [
              {
                  "dia": "Martes",
                  "horas": 10,
                  "minutos": 0
              },
              {
                  "dia": "Martes",
                  "horas": 10,
                  "minutos": 30
              },
              {
                  "dia": "Jueves",
                  "horas": 10,
                  "minutos": 0
              }
          ]
        },
        {
          "matricula": "789",
          "nombre": "Dr. Carlos López",
          "apellido": "string",
          "diasQueAtiende": ["Lunes", "Miércoles", "Viernes"],
          "horarioInicio": {
              "horas": 8,
              "minutos": 0
          },
          "horarioFinalizacion": {
              "horas": 15,
              "minutos": 0
          },
          "duracionTurno": 30,
          "turnosTomados": [
              {
                  "dia": "Lunes",
                  "horas": 8,
                  "minutos": 0
              },
              {
                  "dia": "Lunes",
                  "horas": 8,
                  "minutos": 30
              },
              {
                  "dia": "Miércoles",
                  "horas": 8,
                  "minutos": 0
              }
          ]
        }
      ];
  
      const medicoInput = document.getElementById("listaProfesional");
      const diasSelect = document.getElementById("fecha_turno");
      const horariosSelect = document.getElementById("hora_turno");
  
      document.querySelector("button.dias-horarios").addEventListener("click", (e) => {
        e.preventDefault();
        cargarDiasYHorarios();
      });

      function cargarDiasYHorarios() {
        const medicoSeleccionado = medicoInput.value;
        const medico = especialistas.find(especialista => especialista.nombre === medicoSeleccionado);
  
        if (medico) {
          diasSelect.innerHTML = ""; // Limpiar opciones anteriores
  
          medico.diasQueAtiende.forEach(dia => {
            const option = document.createElement("option");
            option.value = dia;
            option.innerText = dia;
            diasSelect.appendChild(option);
          });
  
          cargarHorarios();
        }
      }
  
      function cargarHorarios() {
        const medicoSeleccionado = medicoInput.value;
        const diaSeleccionado = diasSelect.value;
        const medico = especialistas.find(especialista => especialista.nombre === medicoSeleccionado);
  
        if (medico && diaSeleccionado) {
          horariosSelect.innerHTML = ""; // Limpiar opciones anteriores
  
          const diaSemana = obtenerNumeroDiaSemana(diaSeleccionado);
          const horarioInicio = medico.horarioInicio;
          const horarioFinalizacion = medico.horarioFinalizacion;
          const duracionTurno = medico.duracionTurno;
  
          let hora = horarioInicio.horas;
          let minutos = horarioInicio.minutos;
  
          while (hora < horarioFinalizacion.horas || (hora === horarioFinalizacion.horas && minutos < horarioFinalizacion.minutos)) {
            const option = document.createElement("option");
            option.value = `${hora.toString().padStart(2, "0")}:${minutos.toString().padStart(2, "0")}`;
            option.innerText = `${hora.toString().padStart(2, "0")}:${minutos.toString().padStart(2, "0")}`;
            horariosSelect.appendChild(option);
  
            minutos += duracionTurno;
            if (minutos >= 60) {
              minutos -= 60;
              hora++;
            }
          }
        }
      }
  
      function obtenerNumeroDiaSemana(dia) {
        const diasSemana = ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"];
        return diasSemana.indexOf(dia);
      }
  
      function solicitarTurno() {
        const medicoSeleccionado = medicoInput.value;
        const diaSeleccionado = diasSelect.value;
        const horarioSeleccionado = horariosSelect.value;
  
        if (!medicoSeleccionado || !diaSeleccionado || !horarioSeleccionado) {
          alert("Seleccione un médico, día y horario antes de solicitar un turno.");
          return;
        }
  
        alert(`Turno solicitado con ${medicoSeleccionado} el ${diaSeleccionado} a las ${horarioSeleccionado}.`);
        // Aquí puedes agregar la lógica para guardar el turno en tu sistema
      }
});