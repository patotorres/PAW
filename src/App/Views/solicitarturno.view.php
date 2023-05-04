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
      <form action="solicitarturno" method="POST" tabindex="0" enctype="multipart/form-data">
        <label>Nombre y apellido:</label>
        <input name="nombre_apellido" type="text" placeholder="juan perez" tabindex="1" <?php if(isset($nombre_apellido)) { echo 'value="' . $nombre_apellido . '"'; } ?>/>
        
        <label>Correo electrónico</label>
        <input name="email" type="email" placeholder="juanpe@gmail.com" tabindex="2" <?php if(isset($email)) { echo 'value="' . $email . '"'; } ?>/>
        <?php if(isset($email_invalido)) {?>
        <label class="dato-invalido"><?=$email_invalido ?></label>
        <?php } ?>
        
        <label>DNI</label>
        <input name="dni" type="number" inputmode="numeric" placeholder="34111111" tabindex="3" <?php if(isset($dni)) { echo 'value="' . $dni . '"'; } ?>/>
        
        <label>Teléfono:</label>
        <input name="telefono" type="tel" placeholder="2323 123456" tabindex="4" <?php if(isset($tel)) { echo 'value="' . $tel . '"'; } ?>/>
        
        <label>Fecha de nacimiento:</label>
        <input name="fecha_nacimiento" type="date" tabindex="5" <?php if(isset($fecha_nacimiento)) { echo 'value="' . $fecha_nacimiento . '"'; } ?>/>
        
        <label for="listaEspecialidades">Escoja una especialidad</label>
        <input name="especialidad" list="listaEspecialidades" tabindex="6" <?php if(isset($especialidad)) { echo 'value="' . $especialidad . '"'; } ?>>
        <datalist id="listaEspecialidades">
          <option value="" selected hidden disabled>Seleccione</option>
          <option value="Psiquiatria">Psiquiatría</option>
          <option value="Ortopedia">Ortopedía</option>
          <option value="Neurologia">Neurología</option>
          <option value="Cardiologia">Cardiología</option>
        </datalist>
       
        <label for="listaProfesionales">Escoja un/a profesional</label>
        <input name="profesional" list="listaProfesionales" tabindex="7" <?php if(isset($profesional)) { echo 'value="' . $profesional . '"'; } ?>>
        <datalist id="listaProfesionales">
          <option value="" selected hidden disabled>Seleccione</option>
          <option value="AnaGarcia">Dra. Ana García</option>
          <option value="JorgeMartinez">Dr. Jorge Martínez</option>
          <option value="VeroSanchez">Dra. Verónica Sánchez</option>
          <option value="JuanRodriguez">Dr. Juan Rodríguez</option>
        </datalist>

        <label for="estudio">Estudio</label>
        <input name="estudio" type="file" accept=".png,.jpg,.jpeg,.pdf" tabindex="8">
        <?php if(isset($estudio_invalido)) { ?>
        <label class="dato-invalido"><?= $estudio_invalido ?></label>
        <?php } ?>

        <label>Fechas disponibles</label>
        <input name="fecha_turno" type="date" tabindex="9" <?php if(isset($fecha_turno)) { echo 'value="' . $fecha_turno . '"'; } ?>/>
        <?php if(isset($fecha_turno_invalido)) { ?>
        <label class="dato-invalido"><?= $fecha_turno_invalido ?></label>
        <?php } ?>
        
        <label>Hora del turno</label>
        <input name="hora_turno" type="time" tabindex="10" <?php if(isset($hora_turno)) { echo 'value="' . $hora_turno . '"'; } ?>/>
        
        <div class="form-buttons">
          <a class="btn" href="/" tabindex="12">Cancelar</a>
          <input type="submit" value="Confirmar" tabindex="11" >
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