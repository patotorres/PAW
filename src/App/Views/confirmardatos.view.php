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
    <main class="confirmarturno"><h2>Confirmar datos</h2>
      <form action="confirmarturno" method="POST">
        <label>Nombre y apellido:</label>
        <p>juan perez</p> 
        <label>Correo electrónico:</label>
        <p>juanpe@gmail.com</p>
        <label>DNI:</label>
        <p>34111111</p>
        <label>Teléfono:</label>
        <p>2323 123456</p>
        <label>Fecha de nacimiento:</label>
        <p>31/03/98</p>
        <label>Fecha del turno:</label>
        <p>31/03/23</p>
        <label>Hora del turno:</label>
        <p>09:00</p>
        <label>Especialidad:</label>
          <p>Psiquiatria</p>
        <label>Profesional:</label>
          <p>JorgeMartinez</p>
        <a class="btn" href="/">Cancelar</a>
        <a class="btn" href="solicitarturno">Modificar datos</a>
        <input type="submit" value="Confirmar"/>
      </form>
    </main>
    <!--body-->
    <!--footer-->
    <?php
      require 'parts/footer.view.php';
    ?>
    <!--footer-->
  </body>
</html>