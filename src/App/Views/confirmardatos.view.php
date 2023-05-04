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
    <?php if(!isset($enviado) ) { ?>
      <main class="confirmarturno"><h2>Confirmar datos</h2>
        <form action="confirmarturno" method="POST">
          <label>Nombre y apellido:</label>
          <p><?= $nombre_apellido ?></p> 
          <label>Correo electrónico:</label>
          <p><?= $email ?></p>
          <label>DNI:</label>
          <p><?= $dni ?></p>
          <label>Teléfono:</label>
          <p><?= $telefono ?></p>
          <label>Fecha de nacimiento:</label>
          <p><?= $fecha_nacimiento ?></p>
          <label>Fecha del turno:</label>
          <p><?= $fecha_turno ?></p>
          <label>Hora del turno:</label>
          <p><?= $hora_turno ?></p>
          <label>Especialidad:</label>
          <p><?= $especialidad ?></p>
          <label>Profesional:</label>
          <p><?= $profesional ?></p>
          <a class="btn" href="/">Cancelar</a>
          <a class="btn" href="solicitarturno?<?= http_build_query($_POST) ?>">Modificar datos</a>
          <input type="submit" value="Confirmar"/>
        </form>
      </main>
    <?php } else { ?>
      <section class='confirmarturnoprocesado' >
        <p>Formulario enviado</p>
      </section>
    <?php } ?>
    <!--body-->
    <!--footer-->
    <?php
      require 'parts/footer.view.php';
    ?>
    <!--footer-->
  </body>
</html>