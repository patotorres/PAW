<!DOCTYPE html>
<html lang="es">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UNLu PAW UL Hospitals</title>
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <link href="https://fonts.cdnfonts.com/css/gotham" rel="stylesheet">
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
    <main class="grilla"><h2>Especialidades y profesionales</h2>
      <form>
        <label for="listaEspecialidades">Escoja una especialidad</label>
        <input list="listaEspecialidades">
        <datalist id="listaEspecialidades">
          <option value="" selected hidden disabled>Seleccione</option>
          <option value="Psiquiatria">Psiquiatría</option>
          <option value="Ortopedia">Ortopedía</option>
          <option value="Neurologia">Neurología</option>
          <option value="Cardiologia">Cardiología</option>
        </datalist>

        <label for="listaProfesionales">Escoja un/a profesional</label>
        <input list="listaProfesionales">
        <datalist id="listaProfesionales">
          <option value="" selected hidden disabled>Seleccione</option>
          <option value="AnaGarcia">Dra. Ana García</option>
          <option value="JorgeMartinez">Dr. Jorge Martínez</option>
          <option value="VeroSanchez">Dra. Verónica Sánchez</option>
          <option value="JuanRodriguez">Dr. Juan Rodríguez</option>
        </datalist>

        <input type="submit" value="Continuar" />
      </form>
      
      <hr />
      <ul>
        <li>
          <img src="img/personaej.png" width="48" height="48" />
          <p>Nombre</p>
          <p>Rango</p>
        </li>
        <li>
          <img src="img/personaej.png" width="48" height="48" />
          <p>Nombre</p>
          <p>Rango</p>
        </li>
        <li>
          <img src="img/personaej.png" width="48" height="48" />
          <p>Nombre</p>
          <p>Rango</p>
        </li>
        <li>
          <img src="img/personaej.png" width="48" height="48" />
          <p>Nombre</p>
          <p>Rango</p>
        </li>
        <li>
          <img src="img/personaej.png" width="48" height="48" />
          <p>Nombre</p>
          <p>Rango</p>
        </li>
        <li>
          <img src="img/personaej.png" width="48" height="48" />
          <p>Nombre</p>
          <p>Rango</p>
        </li>
        <li>
          <img src="img/personaej.png" width="48" height="48" />
          <p>Nombre</p>
          <p>Rango</p>
        </li>
        <li>
          <img src="img/personaej.png" width="48" height="48" />
          <p>Nombre</p>
          <p>Rango</p>
        </li>
        <li>
          <img src="img/personaej.png" width="48" height="48" />
          <p>Nombre</p>
          <p>Rango</p>
        </li>
        <li>
          <img src="img/personaej.png" width="48" height="48" />
          <p>Nombre</p>
          <p>Rango</p>
        </li>
        <li>
          <img src="img/personaej.png" width="48" height="48" />
          <p>Nombre</p>
          <p>Rango</p>
        </li>
        <li>
          <img src="img/personaej.png" width="48" height="48" />
          <p>Nombre</p>
          <p>Rango</p>
        </li>
      </ul>

    </main>
    <!--body-->
    <!--footer-->
    <?php
      require 'parts/footer.view.php';
    ?>
    <!--footer-->
  </body>
</html>