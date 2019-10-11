<!-- Agregamos la imagen que se muestra en todos los sitios -->
<div class="col s12">
  <img class="topimg" src="../img/src7.jpg">
</div>
<!-- Creamos nuestro menú -->
<nav id="menu">
    <div class="nav-wrapper">
    	<?php
            //Agregamos el código php para mostrar el logo de la empresa
              $query = "SELECT logo_empresa FROM tb_empresa WHERE codigo_empresa=1";
              $resultado = $mysqli->query($query);
              $fila = $resultado->fetch_assoc();
        ?>
	    <a href="../home/index.php" class="brand-logo left"><img id="logo" src="../<?php echo $fila['logo_empresa'];?>"></a>
	    <ul class="right">
	    	<li class="submenu"><a href="../home/index.php">Inicio</a></li>
	        <li class="submenu"><a href="../catalogo/catalogo.php">Catálogo</a></li>
	    	<li class="submenu"><a href="../home/contacto.php">Contacto</a></li>
	    </ul>
    </div>
</nav>