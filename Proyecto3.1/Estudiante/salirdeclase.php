<?php
$servername="localhost";
$username="root";
$password="";
$dbname="proyecto3";
session_start();

$conexion = new mysqli($servername, $username, $password, $dbname);

$CI=$_GET['CI'];
$Clase_ID= $_GET['ID_Clase'];

$sql= "DELETE FROM ";

?>