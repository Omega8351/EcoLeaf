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
            <a class="carousel-item" href=""><img class="carrusel-items" src="../img/eco1.jpg"></a>
            <a class="carousel-item" href=""><img class="carrusel-items" src="../img/eco2.jpg"></a>
          </div>
        </div>
        <br>
        <br>
        <br>
        <div class="col s7 m7">
          <div>
            <h3>¿Qué es EcoLeaf?</h3>
          </div>
          <div>
            <p>En nuestro país existe un consumo masivo de productos desechables que generan un gran impacto al medio ambiente es por ello que hemos decidido desarrollar nuevos procesos de producción que contribuyan al desarrollo sustentable de la economía y la sociedad. De esta forma, ha surgido la consideración de la ecología como un componente básico de la filosofía o forma de pensar de nuestro proyecto que da lugar al concepto de Marketing Ecológico y Biocomercio Sostenible a nuestra Empresa denominada ECOLEAF, SA. DE CV. Nuestra empresa EcoLeaf ofrece una alternativa y solución ecológica perfecta para la reducción de desechos generados por la vajilla desechable tradicional, brindándoles a nuestros clientes una alternativa inocua, biodegradable, compostable y de alta calidad.</p>
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
          <div class="card-content cartaprincipal col s3 m5 g7">
            <div id="mision">Ser reconocidos por ofrecer a nuestros clientes una nueva alternativa ecológica, para reducir el impacto ambiental en nuestra vida cotidiana, a través de la fabricación y comercialización de platos desechables de palma areca y fibras naturales, incorporando tecnología  ecológica y diseños innovadores, 100% orgánicos y de excelente calidad.</div>
            <div id="vision">Ser una empresa  rentable de biocomercio, líder en el mercado, ofreciendo la más amplia gama de productos amigables con el medio ambiente y manteniendo la calidad de nuestros productos, para satisfacer el sector alimenticio del mercado nacional e internacional. Esto con el fin de reducir la generación de basura, y con ello mejorar nuestro entorno. 
            </div>
          </div>
        </div>
      </div>
      <br>
      <!-- Incluimos el archivo maestro que enlaza nuestros scripts -->
      <?php include '../inc/scripts.php' ?>
    </body>
    <?php include '../inc/footer.php' ?>
  </html>