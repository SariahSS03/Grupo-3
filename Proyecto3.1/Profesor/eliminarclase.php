<?php
$servername="localhost";
$username="root";
$password="";
$dbname="proyecto3";
session_start();

$conexion = new mysqli($servername, $username, $password, $dbname);
$CI = $_SESSION['CI']; 
$Clase_ID = $_GET['ID_Clase'];

// 1. Eliminar las tareas asociadas a la clase
$sql9 = "SELECT * FROM Tarea WHERE Clases_ID = '$Clase_ID'";
$resultado9 = $conexion->query($sql9);

if ($resultado9 && $resultado9->num_rows > 0) {
    while ($fila9 = $resultado9->fetch_assoc()) {
        $ID_tarea = $fila9['idTarea'];
        
        // Eliminar las tareas asignadas a estudiantes
        $sql8 = "DELETE FROM Cuenta_has_Tarea WHERE Tarea_idTarea = '$ID_tarea'";
        $conexion->query($sql8);
    }
}

// 2. Eliminar relación entre clase y usuarios
$sql2 = "DELETE FROM Clases_has_Cuenta WHERE Clases_ID = '$Clase_ID' AND Cuenta_User = '$CI'";

// 3. Eliminar tareas de la clase
$sql4 = "DELETE FROM Tarea WHERE Clases_ID = '$Clase_ID'";

// 4. Eliminar publicaciones asociadas
$sql5 = "DELETE FROM Publicaciones WHERE Clases_ID = '$Clase_ID'";

// 5. Eliminar la clase
$sql3 = "DELETE FROM Clases WHERE ID = '$Clase_ID'";

// 6. Ejecutar en orden correcto
if ($conexion->query($sql2) && $conexion->query($sql4) && $conexion->query($sql5) && $conexion->query($sql3)) {
    header('Location: /grupo-3/Proyecto3.1/Profesor/inicioprofesor.php');
    exit;
} else {
    echo "Error al eliminar los registros: " . $conexion->error;
}
?>
 
?>