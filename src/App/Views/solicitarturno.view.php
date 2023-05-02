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
    <main class="formulario"><h2>Solicitar Turno</h2>
      <form action="confirmardatos" method="POST" tabindex="0">
        <label>Nombre y apellido:</label>
        <input name="nombre-apellido" type="text" placeholder="juan perez" tabindex="1" />
        <label>Correo electrónico</label>
        <input name="email" type="email" placeholder="juanpe@gmail.com" tabindex="2" />
        <label>DNI</label>
        <input name="dni" type="text" placeholder="34111111" tabindex="3" />
        <label>Teléfono:</label>
        <input name="telefono" type="tel" placeholder="2323 123456" tabindex="4" />
        <label>Fecha de nacimiento:</label>
        <input name="fecha-nacimiento" type="date" tabindex="5" />
        <label for="listaEspecialidades">Escoja una especialidad</label>
        <input name="especialidad" list="listaEspecialidades" tabindex="6">
        <datalist id="listaEspecialidades">
          <option value="" selected hidden disabled>Seleccione</option>
          <option value="Psiquiatria">Psiquiatría</option>
          <option value="Ortopedia">Ortopedía</option>
          <option value="Neurologia">Neurología</option>
          <option value="Cardiologia">Cardiología</option>
        </datalist>
        <label for="listaProfesionales">Escoja un/a profesional</label>
        <input name="profesional" list="listaProfesionales" tabindex="7">
        <datalist id="listaProfesionales">
          <option value="" selected hidden disabled>Seleccione</option>
          <option value="AnaGarcia">Dra. Ana García</option>
          <option value="JorgeMartinez">Dr. Jorge Martínez</option>
          <option value="VeroSanchez">Dra. Verónica Sánchez</option>
          <option value="JuanRodriguez">Dr. Juan Rodríguez</option>
        </datalist>
        <label>Fechas disponibles</label>
        <input name="fecha-turno" type="date" tabindex="8"/>
        <label>Hora del turno</label>
        <input name="hora" type="time" tabindex="9"/>
        <div class="form-buttons">
          <a class="btn" href="/" tabindex="11">Cancelar</a>
          <input type="submit" value="Confirmar" tabindex="10" >
        </div>
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