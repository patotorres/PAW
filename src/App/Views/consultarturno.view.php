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
    <main class="consultarturno"><h2>Consultar Turno</h2>
      <form method="POST" action="consultarturno">
        <label>Ingrese el ID del turno:</label>
        <input name="id-turno" type="text" placeholder="aNYE%&+_}!2"/>
        <input type="submit" value="Consultar"/>
      </form>
      <hr />
      <label>Datos del turno:</label>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto iure sint exercitationem consequatur, beatae modi harum ipsum totam, perspiciatis recusandae voluptatem similique fugiat, corrupti facilis voluptatibus facere unde numquam mollitia?</p>
      <label>Datos del profesional:</label>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo, inventore? Sit vero autem, laborum repellat eius molestiae ratione impedit in accusamus fuga porro tempora, iure earum alias quae hic vel.consectetur adipisicing elit. Quo, inventore? Sit vero autem, laborum repellat eius molestiae ratione impedit in accusamus fuga porro tempora, iure earum alias quae hic vel.</p>
      <img src="/assets/img/personaej.png"/>
    </main>
    <!--body-->
    <!--footer-->
    <?php
      require 'parts/footer.view.php';
    ?>
    <!--footer-->
  </body>
</html>