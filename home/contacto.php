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
            <p>Representante Legal<br>
               Teléfono: 7112-6376</p>
            <br>
          </li>
        </ul>
        <ul class="contacto">
          <li class="collection-item avatar">
            <i class="material-icons circle">pie_chart</i>
            <span class="title nombre">Donny Soriano</span>
            <p>Encargado de Mercadotecnia <br>
                Teléfono: 7721-2045</p>
            <br>
          </li>
        </ul>
        <ul class="contacto">
          <li class="collection-item avatar">
            <i class="material-icons circle">question_answer</i>
            <span class="title nombre">Contáctenos</span>
            <?php
            //Agregamos el código php para mostrar el correo de contacto de la empresa
              $query = "SELECT correo_empresa FROM tb_empresa WHERE codigo_empresa=1";
              $resultado = $mysqli->query($query);
              $fila = $resultado->fetch_assoc();
            ?>
            <p><?php echo $fila['correo_empresa']; ?></p>
            <br>
          </li>
        </ul>
      </div>
      <br>

      <div class="row">
        <div class="col s1 m1 l1">
        </div>
        <div class="col s3 m3 l3">
          <img class="asociados imgc" src="../img/src9.png">
        </div>
        <div class="col s1 m1 l1">
        </div>
        <div class="col s3 m3 l3">
          <img class="asociados" src="../img/src10.png">
        </div>
        <div class="col s1 m1 l1">
        </div>
        <div class="col s3 m3 11">
          <img class="asociados imgc" src="../img/src11.jpg">
        </div>
      </div>
      <!-- Incluimos el archivo maestro que enlaza nuestros scripts -->
      <?php include '../inc/scripts.php' ?>
    </body>
    <?php include '../inc/footer.php' ?>
  </html>