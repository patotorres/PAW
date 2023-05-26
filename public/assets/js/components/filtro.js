document.addEventListener('DOMContentLoaded', function() {
    
const cantPaginas = document.getElementById('cantPaginas');
const paginaIndice = document.getElementById('paginaIndice');
const ul = document.getElementById('listaPersonas');
const pagAnt = document.getElementById('pagAnt');
const pagSig = document.getElementById('pagSig');

let sublists = divideArrayIntoSublists(data, 6 );
cargarElementos(sublists,0);

cantPaginas.addEventListener('change', function () {
    borrarElementos();
    const value = cantPaginas.value;
    paginaIndice.value =1;
    sublists = divideArrayIntoSublists(data, value);
    cargarElementos(sublists,0);
});

paginaIndice.addEventListener('change', function () {
    if (paginaIndice.value < 1 ){
        paginaIndice.value = 1;
        return;
    }
    if (paginaIndice.value > paginaIndice.max ){
        paginaIndice.value = paginaIndice.max;
        return;
    }
    borrarElementos();
    indice =  paginaIndice.value;
    indice --;
    cargarElementos(sublists,indice);
});

pagSig.addEventListener('click', function () {
    indice = paginaIndice.value;
    indice ++;
    if (indice > paginaIndice.max ){
        paginaIndice.value = paginaIndice.max;
        return;
    }
    borrarElementos();
    cargarElementos(sublists,paginaIndice.value );
    paginaIndice.value = indice;
});

pagAnt.addEventListener('click', function () {
    indice = paginaIndice.value;
    if (indice <= 1 ){
        paginaIndice.value = 1;
        return;
    }
    indice--;
    paginaIndice.value = indice;
    indice--;
    borrarElementos();
    cargarElementos(sublists,indice);
    
});

function cargarElementos(sublists,indice){
    if (typeof sublists !== 'undefined') {
          page = sublists[indice];
          page.forEach(function(persona) {
          var li = document.createElement('li');
          var img = document.createElement('img');
          img.src = '/assets/img/personaej.png';
          img.width = 48;
          img.height = 48;
          li.appendChild(img);
      
          var nombre = document.createElement('p');
          nombre.textContent = persona.nombre;
          li.appendChild(nombre);
      
          var especialidad = document.createElement('p');
          especialidad.textContent = persona.especialidad;
          li.appendChild(especialidad);
      
          ul.appendChild(li);
        });
      }
}

function borrarElementos(){
const liElements = ul.querySelectorAll('li');
  liElements.forEach((li) => {
    li.remove();
  });
}

function divideArrayIntoSublists(array, sublistSize) {
    const length = array.length;
    const sublistCount = Math.ceil(length / sublistSize);
    const sublists = [];
  
    let startIndex = 0;
    sublistSize = parseInt(sublistSize);
    let endIndex = sublistSize;
  
    for (let i = 0; i < sublistCount; i++) {
      const sublist = array.slice(startIndex, endIndex);
      sublists.push(sublist);
      startIndex = endIndex;
      endIndex += sublistSize;
      
    }
    paginaIndice.setAttribute('max', sublistCount);
    return sublists;
  }

});
