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

      <!-- Mostraremos en una collection de materialize a los integrantes de EcoLeaf -->
      <div class="container">
        <br>
        <h4 align="center">EcoLeaf esta conformado por:</h4>
        <br>
        <ul class="contacto">
          <li class="collection-item avatar">
            <i class="material-icons circle">palette</i>
            <span class="title nombre">Mayra Elisa Estrada</span>
            <p>Artesana<br>
               Estudiante de Licenciatura en Trabajo Social</p>
            <br>
          </li>
        </ul>
        <ul class="contacto">
          <li class="collection-item avatar">
            <i class="material-icons circle">pie_chart</i>
            <span class="title nombre">Donny Soriano</span>
            <p>Licenciado en Mercadotecnia</p>
            <br>
          </li>
        </ul>
        <ul class="contacto">
          <li class="collection-item avatar">
            <i class="material-icons circle">question_answer</i>
            <span class="title nombre">Contáctenos</span>
            <p>ecoleaf.sa.de.cv@gmail.com</p>
            <br>
          </li>
        </ul>
      </div>
      <br>
      <!-- Incluimos el archivo maestro que enlaza nuestros scripts -->
      <?php include '../inc/scripts.php' ?>
    </body>
    <?php include '../inc/footer.php' ?>
  </html>