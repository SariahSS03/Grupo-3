<?php
        $direccion="localhost";
        $usuario="root";
        $contrasena="";
        $dbname="proyecto3"; 
        $conexion= new mysqli($direccion,$usuario,$contrasena,$dbname);
        if($conexion->error){
            echo"Hubo un error al conectar a la base de datos";
        }
        $CI = $_GET['CI'];
        $sql="UPDATE Cuenta SET rol=1 WHERE User='$CI'";
        if(mysqli_query($conexion,$sql)) {
            header("Location: Usuarios.php");
        }

?>