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

      <!-- Agregamos el concepto de EcoLeaf con un Carousel de Materialize -->
      <div class="row">
        <div class="col s5 m4">
          <div class="carousel principal">
            <?php
            //Agregamos el código php para llenar el slider de los productos con las imagenes de la base de datos
              $query = "SELECT imagen_producto FROM tb_productos";
              $resultado = $mysqli->query($query);
              while ($fila = $resultado->fetch_assoc()) { ?>
                <a class="carousel-item" href=""><img class="carrusel-items" src="../<?php echo $fila['imagen_producto']; ?>"></a>
              <?php }
            ?>
          </div>
        </div>
        <br>
        <br>
        <br>
        <div class="col s7 m7">
          <div>
            <?php
            //Agregamos el código php para mostrar el nombre de la empresa y la descripción
              $query = "SELECT nombre_empresa, descripcion_empresa FROM tb_empresa WHERE codigo_empresa=1";
              $resultado = $mysqli->query($query);
              $fila = $resultado->fetch_assoc();
            ?>
            <h3>¿Qué es <?php echo $fila['nombre_empresa'];?>?</h3>
          </div>
          <div>
            <p><?php echo $fila['descripcion_empresa'];?></p>
          </div>
        </div>
      </div>

      <!-- Estructuramos la misión y visión con cards de Materialize -->
      <div class="col s3 m5 g7">
        <div class="card cartaprincipal">
          <div class="card-content center cartaprincipal col s3 m5 g7">
            <img id="mv" src="../img/Leaf.png" align="center">
          </div>
          <div class="card-tabs cartaprincipal col s3 m5 g7">
            <ul class="tabs tabs-fixed-width cartaprincipal">
              <li class="tab"><a class="active" href="#mision">Misión</a></li>
              <li class="tab"><a href="#vision">Visión</a></li>
            </ul>
          </div>
          <?php
            //Agregamos el código php para mostrar la misión y visión de la empresa
              $query = "SELECT mision, vision FROM tb_empresa WHERE codigo_empresa=1";
              $resultado = $mysqli->query($query);
              $fila = $resultado->fetch_assoc();
            ?>
          <div class="card-content cartaprincipal col s3 m5 g7">
            <div id="mision"><?php echo $fila['mision'];?></div>
            <div id="vision"><?php echo $fila['vision'];?></div>
          </div>
        </div>
      </div>
      <br>
      <!-- Incluimos el archivo maestro que enlaza nuestros scripts -->
      <?php include '../inc/scripts.php' ?>
    </body>
    <?php include '../inc/footer.php' ?>
  </html>