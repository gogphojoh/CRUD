<?php
$dbname="Paises1";
$dbuser="root";
$dbhost="localhost";
$dbpass="";
$conexion=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>