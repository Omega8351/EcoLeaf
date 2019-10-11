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
      <div class="row col s12 m12">
        <?php
          //Agregamos el código php para mostrar los productos del catalogo
          $query = "SELECT nombre_producto, descripcion_producto, imagen_producto FROM tb_productos WHERE codigo_catalogo=1";
          $resultado = $mysqli->query($query);
          while ($fila = $resultado->fetch_assoc()) { ?>
            <div class="card col s6 m6 cartaprincipal" align="center">
              <div class="card-image productos waves-effect waves-block waves-light cartaprincipal" id="cuadrado">
                <img class="activator" src="../<?php echo $fila['imagen_producto']; ?>">
              </div>
              <div class="card-content cartaprincipal">
                <span class="card-title activator grey-text text-darken-4"><?php echo $fila['nombre_producto']; ?><i class="material-icons right">info</i></span>
              </div>
              <div class="card-reveal cartaprincipal">
                <span class="card-title grey-text text-darken-4"><?php echo $fila['nombre_producto']; ?><i class="material-icons right">close</i></span>
                <p><?php echo $fila['descripcion_producto']; ?></p>
              </div>
            </div>
          <?php }?>
      </div>
      <br>
      <!-- Incluimos el archivo maestro que enlaza nuestros scripts -->
      <?php include '../inc/scripts.php' ?>
    </body>
    <?php include '../inc/footer.php' ?>
  </html>