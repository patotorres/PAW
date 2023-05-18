class PAWdragdropfile {

constructor(){
    const dropzone = document.getElementById('dropzone');
    const preview = document.getElementById('preview');

dropzone.addEventListener('change', function() {
   const files = event.target.files;

    // Iterar sobre cada archivo
    for (const file of files) {
        // Mostrar una vista previa de la imagen
        if (file.type.match('image.*')) {
            
          const preview = document.getElementById('preview');
          const images = preview.querySelectorAll('img');
          for (let i = 0; i < images.length; i++) {
            images[i].remove();
          }  
            const reader = new FileReader();
            reader.addEventListener('load', (event) => {
                const img = document.createElement('img');
                img.setAttribute('src', event.target.result);
                img.classList.add('preview-img');
                img.addEventListener('click', function() {
                    this.parentNode.removeChild(this);
                    const fileList = dropzone.files;
                    for (let i = 0; i < fileList.length; i++) {
                      if (fileList[i].name === file.name && fileList[i].size === file.size) {
                        fileList.splice(i, 1);
                        break;
                      }
                    }
                  });
                preview.appendChild(img);
            });

            reader.readAsDataURL(file);
        }
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

    // Se asigna el archivo al elemento de entrada de tipo archivo
    const input = document.getElementById('dropzone');
    const files = e.dataTransfer.files;
    for (const file of files) {
     if (file.type.match('image.*')) {
      
      
      const fileInput = document.getElementById('dropzone');
      const existingFiles = fileInput.files;
      const newFile = file;
      const dataTransfer = new DataTransfer();
      Array.from(existingFiles).forEach((file) => {
        dataTransfer.items.add(file);
      });
      dataTransfer.items.add(newFile);
      fileInput.files = dataTransfer.files;
      
           
            const reader = new FileReader();
            reader.addEventListener('load', (event) => {
                const img = document.createElement('img');
                img.setAttribute('src', event.target.result);
                img.classList.add('preview-img');
                preview.appendChild(img);
            });

            reader.readAsDataURL(file);
        }}
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

