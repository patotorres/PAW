class PAWcarousel {
    /*constructor (contenedor) {
        //Conseguir Nodo Ul de obrasocial que se llama ulcarrousel
        let contenedor = document.querySelector(contenedor);
        if (contenedor) contenedor.classList.add("ulcarrousel");
        // Armar Boton
        let boton = PAW. nuevoElemento("button", "Menu", {
        class: "PAN-Menu-Abrir",
        });
        // Insertar boton en e1 NAV
        contenedor.prepend(boton);
    }*/
	constructor(Imagenes, pContenedor) {
        this.Imagenes = Imagenes;
        this.loadedImages = 0;
        this.imageCount = Imagenes.length;
        this.userInteracted = false;

        this.animaciones = [
            'fade',
            'moveRight',
            'foolishIn'
        ]
        let contenedor = pContenedor.tagName ? pContenedor : document.querySelector(pContenedor);

        if (contenedor) {

            // Inserto CSS
            let css = PAW.nuevoElemento("link", "", {
                rel: "stylesheet",
                href: "assets/js/components/styles/carousel.css",
            });
            document.head.appendChild(css);

            let slideContainer = PAW.nuevoElemento("div", "", {"class": "slide-container"});// document.querySelector("#slide-container");

            contenedor.appendChild(slideContainer);

            let index = 0;
            let progressBar = PAW.nuevoElemento("div", "", {"class": "progressBar"});
            let actualProgress = PAW.nuevoElemento("div", "", {"class": "progress"});

            Imagenes.forEach(element => {
                let containerImagen = PAW.nuevoElemento("div", "", {
                    "class": "box slide",
                    "index": "img\"" + index + "\""
                });
                slideContainer.appendChild(containerImagen);
                let nuevaImagen = PAW.nuevoElemento("img", "", {"src": element, "alt": "img\"" + index + "\""});

                nuevaImagen.addEventListener("load", event => {
                    this.loadedImages++;
                    let averageOfLoad = (this.loadedImages / this.imageCount) * 100;
                    if (averageOfLoad == 100) {
                        actualProgress.setAttribute("loaded", "100");
                        contenedor.removeChild(progressBar);
                    } else
                        actualProgress.style.setProperty("--ancho", averageOfLoad + "vw");
                });

                progressBar.appendChild(actualProgress);
                containerImagen.appendChild(nuevaImagen);
                index++;
            });

            contenedor.appendChild(progressBar);

            let slides = document.querySelectorAll('.slide');
            let contenedorDots = PAW.nuevoElemento("ul", "", {"class": "dots-wrapper"});// document.querySelector("#dots-wrapper");

            contenedorDots.classList.add('center_x');

            //Agrego botones dependiendo de la cantidad de imagenes que existen
            for (let i = 0; i < slides.length; i++) {
                let dot = PAW.nuevoElemento("li", "", {
                    class: "dot-nav",
                });
                contenedorDots.prepend(dot);
            }

            slideContainer.appendChild(contenedorDots);

            for (let i = 0; i < slides.length; i++) {
                let random = numeroAleatorio(0, this.animaciones.length -1 );

                slides[i].classList.add(this.animaciones[random]);
            }

            function numeroAleatorio(min, max) {
                return Math.round(Math.random() * (max - min) + min);
            }

            //Flechas laterales
            let arrow_prev = PAW.nuevoElemento("p", "❮", {"class": "arrow-prev"});
            arrow_prev.addEventListener('click', () => {
                show_slide(--slider_index);
            });

            let arrow_next = PAW.nuevoElemento("p", "❯", {"class": "arrow-next"});
            arrow_next.addEventListener('click', () => {
                show_slide(++slider_index);
            });

            //Agrego clases a los botones inferiores
            let contenedorButtons = PAW.nuevoElemento("div", "", {"class": "arrows-wrapper"});// document.querySelector("#arrows-wrapper");
            
            slideContainer.appendChild(contenedorButtons);
            
            contenedorButtons.appendChild(arrow_prev);
            contenedorButtons.appendChild(arrow_next);

            let buttons = contenedorButtons.querySelectorAll("p");
            for (let i = 0; i < buttons.length; i++) {
                buttons[i].classList.add('slider-arrow');
                buttons[i].classList.add('center_y');
            }

            let dots = document.querySelectorAll('.dot-nav');
            let slider_index = 0;

            function show_slide(index) {
                if (index >= slides.length)
                    slider_index = 0;

                if (index < 0)
                    slider_index = slides.length - 1

                for (let i = 0; i < slides.length; i++) {
                    slides[i].classList.remove('active');
                    dots[i].classList.remove('active-dot');
                }

                slides[slider_index].classList.add('active');
                dots[slider_index].classList.add('active-dot');
            }

            //Desplazamientos
            show_slide(slider_index);

            //Botones inferiores
            document.querySelectorAll('.dot-nav').forEach((element) => {
                element.addEventListener('click', function () {
                    var dots = Array.prototype.slice.call(this.parentElement.children),
                        dot_index = dots.indexOf(element);
                    show_slide(slider_index = dot_index);
                })
            });

            //Automatico, cada 10 seg
            setInterval(() => {
                show_slide(++slider_index)
            }, 10000);


            let width = slides[0].offsetWidth + 30;
            //contenedorGeneral.style.minWidth = `${slides.length * width}px`;
            // Eventos de teclado
            document.addEventListener("keydown", function (e) {
                switch (e.which) {
                    case 39:
                        // Flecha derecha
                        show_slide(++slider_index, false);
                        break;
                    case 37:
                        // Flecha izquierda
                        show_slide(--slider_index, false);
                        break;
                }
            });

            //Swipe
            let start;
            let change;

            slideContainer.addEventListener('dragstart', (e) => {
                start = e.clientX;
            })

            slideContainer.addEventListener('dragover', (e) => {
                e.preventDefault();
                let touch = e.clientX;
                change = touch - start;
            })

            slideContainer.addEventListener('dragend', slideShow);
            //Touch events on mobile, tablet

            slideContainer.addEventListener('touchstart', (e) => {
                start = e.touches[0].clientX;
            })

            slideContainer.addEventListener('touchmove', (e) => {
                e.preventDefault();
                let touch = e.touches[0];
                change = touch.clientX - start;
            })

            slideContainer.addEventListener('touchend', slideShow);

            function slideShow() {
                if (change > 0) {
                    show_slide(++slider_index)

                } else if (change < 0) {
                    show_slide(--slider_index)
                }
            }


        }
    }
}