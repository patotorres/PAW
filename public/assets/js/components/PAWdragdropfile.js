class PAWdragdropfile {

constructor(){
    const dropzone = document.getElementById('dropzone');
    const preview = document.getElementById('preview');

dropzone.addEventListener('change', function() {
    const file = this.files[0];
    if (file) {
        const reader = new FileReader();
        reader.readAsDataURL(file);
        reader.onload = () => {
          const img = document.createElement("img");
          img.src = reader.result;
          preview.innerHTML = "";
          preview.appendChild(img);
        };
    }
});
// Manejadores de eventos para prevenir comportamientos predeterminados
dropzone.addEventListener('dragenter', (e) => {
  e.preventDefault();
  e.stopPropagation();
  dropzone.classList.add('dragover');
});

dropzone.addEventListener("dragleave", () => {
    dropzone.classList.remove("dragover");
});
  

dropzone.addEventListener('dragover', (e) => {
  e.preventDefault();
  e.stopPropagation();
  dropzone.classList.add("dragover");
});

dropzone.addEventListener('drop', (e) => {
  e.preventDefault();
  e.stopPropagation();

  // Se obtiene el archivo que se ha soltado en el elemento
  const file = e.dataTransfer.files[0];

  // Se comprueba si el archivo es válido (extensión y tamaño)
  if (validateFile(file)) {
    // Se asigna el archivo al elemento de entrada de tipo archivo
    const input = document.getElementById('dropzone');
    input.files = e.dataTransfer.files;
    const reader = new FileReader();
    reader.readAsDataURL(file);
    reader.onload = () => {
      const img = document.createElement("img");
      img.src = reader.result;
      preview.innerHTML = "";
      preview.appendChild(img);
    };
  } else {
    alert('Archivo no válido');
  }
  dropzone.classList.remove("dragover");
});

// Función para validar el archivo
function validateFile(file) {
  const allowedExtensions = /(\.png|\.jpg|\.jpeg|\.pdf)$/i;
  const maxSize = 5 * 1024 * 1024; // 5 MB

  if (!allowedExtensions.test(file.name)) {
    return false;
  }

  if (file.size > maxSize) {
    return false;
  }

  return true;
}
}
}

