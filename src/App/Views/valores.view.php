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
    <main class="valores"><h2>Nuestros valores y objetivos</h2>
      <ul>
        <li>
          <h3>Misión</h3>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis veritatis repellendus sint numquam vitae dolores
            pariatur voluptatem iste consequatur incidunt ea ad, voluptas quo quibusdam impedit quam quasi corporis doloremque!
          </p>
          <img src="img/mision.png" width="180" height="180" />
        </li>

        <li>
          <h3>Visión</h3>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis veritatis repellendus sint numquam vitae dolores
            pariatur voluptatem iste consequatur incidunt ea ad, voluptas quo quibusdam impedit quam quasi corporis doloremque!
          </p>
          <img src="img/vision.png" width="180" height="180" />
        </li>

        <li>
          <h3>Valores</h3>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis veritatis repellendus sint numquam vitae dolores
            pariatur voluptatem iste consequatur incidunt ea ad, voluptas quo quibusdam impedit quam quasi corporis doloremque!
          </p>
          <img src="img/valores.png" width="180" height="180" />
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