<!DOCTYPE html>
  <html>
    <head>
      <!-- Incluimos el archivo maestro que importa nuestras librerias --->
      <?php include '../inc/estilos.php' ?>
      <!--Configuramos para que el sitio sea compatible con moviles -->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <!-- Configuramos el sitio para que soporte carácteres UTF-8 -->
      <meta charset="UTF-8">
    </head>

    <body>
      <!-- Incluimos el archivo maestro que contiene el menú -->
    	<?php include '../inc/menu.php' ?>

      <!-- Agregammos un pequeño slide show para que el sitio se vea atractivo -->
      <div class="slider">
        <ul class="slides">
          <li>
            <img src="../img/sld1.jpg"> 
            <div class="caption center-align">
              <h3>100% Ecológicos</h3>
              <h5 class="light grey-text text-lighten-3">Productos amigables con el medio ambiente.</h5>
            </div>
          </li>
          <li>
            <img src="../img/sld2.jpg"> 
            <div class="caption left-align">
              <h3>Material biodegradable</h3>
              <h5 class="light grey-text text-lighten-3">Elaborados de Hoja de Palma.</h5>
            </div>
          </li>
          <li>
            <img src="../img/sld3.jpg">
            <div class="caption right-align">
              <h3>Materiales Resistente</h3>
              <h5 class="light grey-text text-lighten-3">Tolerantes a diversas temperaturas.</h5>
            </div>
          </li>
        </ul>
      </div>
      <br>
      <!-- Mostraremos ambos productos en cards de materialize debido a su versatilidad -->
      <div class="row">
        <div class="col s1 m1">
        </div>
        <div class="card col s4 m4 cartaprincipal" align="center">
          <div class="card-image productos waves-effect waves-block waves-light cartaprincipal" id="cuadrado">
            <img class="activator" src="../img/eco1.jpg">
          </div>
          <div class="card-content cartaprincipal">
            <span class="card-title activator grey-text text-darken-4">Plato Cuadrado de Hoja de Palma (8"x8")<i class="material-icons right">info</i></span>
          </div>
          <div class="card-reveal cartaprincipal">
            <span class="card-title grey-text text-darken-4">Plato Cuadrado de Hoja de Palma (8"x8")<i class="material-icons right">close</i></span>
            <p>Plato cuadrado desechable de  8”x8” fabricado de hoja de palma 100% Biodegradable. Es apto para utilizar en horno, microondas y congelador, lo que lo convierte en un plato muy versátil y resistente.</p>
          </div>
        </div>
        <div class="col s2 m2">
        </div>
        <div class="card col s4 m4 cartaprincipal" align="center">
          <div class="card-image productos waves-effect waves-block waves-light cartaprincipal circle" align="center-align">
            <img class="activator" src="../img/eco2.jpg">
          </div>
          <div class="card-content cartaprincipal">
            <span class="card-title activator grey-text text-darken-4">Plato Redondo de Hoja de Palma (6")<i class="material-icons right">info</i></span>
          </div>
          <div class="card-reveal cartaprincipal">
            <span class="card-title grey-text text-darken-4">Plato Redondo de Hoja de Palma (6")<i class="material-icons right">close</i></span>
            <p>Plato redondo desechable de 6” fabricado de hoja de palma. 100% Biodegradable y apto para su uso en horno, microondas y congelador.</p>
          </div>
        </div>
      </div>
      <br>
      <!-- Incluimos el archivo maestro que enlaza nuestros scripts -->
      <?php include '../inc/scripts.php' ?>
    </body>
    <?php include '../inc/footer.php' ?>
  </html>