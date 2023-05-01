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
    <main class="consultarturno"><h2>Consultar Turno</h2>
      <form>
        <label>Ingrese el ID del turno:</label>
        <input type="text" placeholder="aNYE%&+_}!2"/>
        <input type="submit" value="Consultar"/>
      </form>
      <hr />
      <label>Datos del turno:</label>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto iure sint exercitationem consequatur, beatae modi harum ipsum totam, perspiciatis recusandae voluptatem similique fugiat, corrupti facilis voluptatibus facere unde numquam mollitia?</p>
      <label>Datos del profesional:</label>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo, inventore? Sit vero autem, laborum repellat eius molestiae ratione impedit in accusamus fuga porro tempora, iure earum alias quae hic vel.consectetur adipisicing elit. Quo, inventore? Sit vero autem, laborum repellat eius molestiae ratione impedit in accusamus fuga porro tempora, iure earum alias quae hic vel.</p>
      <img src="img/personaej.png"/>
    </main>
    <!--body-->
    <!--footer-->
    <?php
      require 'parts/footer.view.php';
    ?>
    <!--footer-->
  </body>
</html>