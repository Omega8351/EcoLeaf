<?php
//Creamos las variables para nuestra conexión
$host = "localhost";
$database = "db_ecoleaf";
$usuario = "root";
$contrasena ="";

//Generamos nuestra query de conexión
$mysqli = new mysqli($host, $usuario, $contrasena, $database);

//Establecemos el codificado de caracteres de las query
$mysqli->set_charset('utf8');

//Verificamos que no se dé un error al ejecutar la query
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
?>