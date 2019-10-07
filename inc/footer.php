<footer class="page-footer" id="footer">
	<div>
		<div class="row">
	      	<div class="col l4 s4">
	      		<img class="imgf" id="f1" src="../img/src5.png">
	      	</div>
	      	<div class="col l4 s4">
	      		<img class="imgf" id="f2" src="../img/src4.png">
	      	</div>
	      	<div class="col l4 s4">
	      		<img class="imgf" id="f3" src="../img/src3.png">
	      	</div>
		</div>
	  	<div class="footer-copyright">
		    <div class="container">
		    <?php
            //Agregamos el código php para mostrar el nombre de la empresa en el copyright
              $query = "SELECT nombre_empresa FROM tb_empresa WHERE codigo_empresa=1";
              $resultado = $mysqli->query($query);
              $fila = $resultado->fetch_assoc();
              echo $fila['nombre_empresa'];

              //Cerramos la conexión
              $mysqli->close();
            ?>
		    </div>
	  	</div>
	</div>
</footer>