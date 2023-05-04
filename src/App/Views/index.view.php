<!DOCTYPE html>
<html lang="es">

  <head>
    <?php
      require 'parts/head.view.php';
    ?>
  </head>

  <body>
   <!--header-->
   <?php
      require 'parts/header.view.php';
    ?>
    <!--header-->
    <!--navbar-->
    <?php
      require 'parts/nav.view.php';
    ?>
    <!--navbar-->
    <!--body-->
    <main>
      <!--secciones-->
      <section class="formulario">
        <!--necesito usar form para pedir los datos--> 
        <h2>Solicitar Turno</h2>
        <form action="solicitarturno" method="GET" tabindex="0">
          <label>Nombre y Apellido</label>
          <input name="nombre_apellido" type="text" placeholder="Ej: Pedro alvarez" tabindex="1" />
          <label>Dirección de correo electrónico</label>
          <input name="email" type="text" placeholder="Ej: Pedrialva@gmail.com" tabindex="2" />
          <label for="listaEspecialidades">Escoja una especialidad</label>
          <input name="especialidad" list="listaEspecialidades" tabindex="3" />
          <datalist id="listaEspecialidades">
            <option value=""selected hidden disabled>Seleccione</option>
            <option value="Psiquiatria">Psiquiatría</option>
            <option value="Ortopedia">Ortopedía</option>
            <option value="Neurologia">Neurología</option>
            <option value="Cardiologia">Cardiología</option>
          </datalist>
          <label for="listaProfesionales">Escoja un/a profesional</label>
          <input name="profesional" list="listaProfesionales"  tabindex="4" />
          <datalist id="listaProfesionales">
            <option value=""selected hidden disabled>Seleccione</option>
            <option value="Dra. Ana García">Dra. Ana García</option>
            <option value="Dr. Jorge Martínez">Dr. Jorge Martínez</option>
            <option value="Dra. Verónica Sánchez">Dra. Verónica Sánchez</option>
            <option value="Dr. Juan Rodríguez">Dr. Juan Rodríguez</option>
          </datalist>
          <label>Fechas disponibles</label>
          <input name="fecha_turno" type="date" tabindex="5" />
        <!--
        <select id="fecha" name="fecha">
                  <option value=""selected hidden disabled>Seleccione</option>
                  <option value="2023-04-01">1 de abril de 2023</option>
                  <option value="2023-04-02">2 de abril de 2023</option>
                  <option value="2023-04-03">3 de abril de 2023</option>
                  <option value="2023-04-04">4 de abril de 2023</option>
                  <option value="2023-04-05">5 de abril de 2023</option>
                </select>
               -->
          <input type="submit" value="Continuar" tabindex="6"/>
        </form>
      </section>

      <section class="noticias">
        <h2>Noticias</h2>
        <ul>
          <li>
            <!--necesito poner dentro de la seccion articulos, 2 por ejemplo-->
            <a href="noticias" target="_blank">
              <article>
                <h3>Noticia ejemplo</h3>
                <small>12/4/23</small>
                <img src="/assets/img/noticiaej.png"/>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet tellus cras adipiscing enim eu. Purus semper eget duis at tellus at. Pellentesque habitant morbi tristique senectus et netus et malesuada. Metus vulputate eu scelerisque felis imperdiet proin fermentum leo. Adipiscing enim eu turpis egestas pretium aenean pharetra magna ac. Consequat id porta nibh venenatis cras. Gravida quis blandit turpis cursus. Elit ullamcorper dignissim cras tincidunt lobortis feugiat vivamus at. Ac ut consequat semper viverra. Dolor sit amet consectetur adipiscing elit pellentesque habitant.

Amet purus gravida quis blandit turpis cursus in hac habitasse. Aliquet risus feugiat in ante metus dictum at tempor commodo. Amet commodo nulla facilisi nullam. A scelerisque purus semper eget duis at tellus at urna. Ornare lectus sit amet est. Auctor elit sed vulputate mi sit amet. Dolor purus non enim praesent elementum facilisis. Sit amet venenatis urna cursus eget nunc scelerisque viverra mauris. In ornare quam viverra orci sagittis eu volutpat odio facilisis. Ullamcorper malesuada proin libero nunc. Massa placerat duis ultricies lacus sed turpis tincidunt id. In hac habitasse platea dictumst vestibulum rhoncus est pellentesque. Sed cras ornare arcu dui. Aenean euismod elementum nisi quis eleifend quam adipiscing. Ut venenatis tellus in metus vulputate. Eu nisl nunc mi ipsum faucibus vitae aliquet. Tristique nulla aliquet enim tortor at auctor urna nunc.</p>
              </article>
            </a>
          </li>
          <li>
            <a href="noticias" target="_blank">
              <article>
                <h3>Noticia ejemplo</h3>
                <small>31/3/23</small>
                <img src="/assets/img/noticiaej.png"/>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
              </article>
            </a>
          </li>
        </ul>
      </section>

      <section class="ubicacion">
        <h2>Donde nos podés encontrar</h2>
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3285.060752478424!2d-59.093086973046894!3d-34.57732929999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bc877639af966d%3A0x937cf2a3a61e9b56!2sUniversidad%20Nacional%20de%20Luj%C3%A1n!5e0!3m2!1ses-419!2sar!4v1679530400843!5m2!1ses-419!2sar"
          width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </section>

      <section class="elegirnos">
        <h2>¿Por qué elegirnos?</h2>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis veritatis repellendus sint numquam vitae dolores pariatur voluptatem iste consequatur incidunt ea ad, voluptas quo quibusdam impedit quam quasi corporis doloremque!</p>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/aahyZICBe90" title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          allowfullscreen>
        </iframe>
      </section>
    </main>
    <!--body-->
    <!--footer-->
    <?php
      require 'parts/footer.view.php';
    ?>
    <!--footer-->
  </body>
</html>
