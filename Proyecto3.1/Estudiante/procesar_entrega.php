<?php
$servername="localhost";
$username="root";
$password="";
$dbname="proyecto3";

 $conexion = new mysqli($servername, $username, $password, $dbname);

$titulo = $_POST['titulo'];
date_default_timezone_set('America/La_Paz');
$today = date("Y-m-d H:i:s");
$comentario=$_POST['comentario'];


?>