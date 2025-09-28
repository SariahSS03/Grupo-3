<?php
session_start();
?>
<!DOCTYPE html> 
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Personas - Aula Virtual</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <style>
    body {
      display: grid;
      grid-template-columns: 16% 84%;
      grid-template-rows: auto auto ;
      grid-template-areas:"principal principal"
                          "opciones mn"
                          "opciones tabla";
      font-family: 'Roboto', sans-serif;
      margin: 0;
      background: #f9f9f9;
      color: #333;
    }
    .tablapersonas {
      margin-top: 20px;
      padding: 0 20px;
      max-width: 600px;
      grid-area:tabla;
   }

   .titulo-seccion {
      font-size: 24px;
      font-weight: 500;
      margin-bottom: 20px;
      border-bottom: 1px solid #ddd;
      padding-bottom: 10px;
      color: #2c2c2c;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
   }

   .compañero-item {
        padding: 12px 0;
        border-bottom: 1px solid #eee;
        font-size: 16px;
        color: #333;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
   .eliminar-link {
        color: #e74c3c;
        text-decoration: none;
        font-size: 14px;
        border: 1px solid #e74c3c;
        padding: 5px 10px;
        border-radius: 4px;
        transition: all 0.2s ease;
    }

    .eliminar-link:hover {
        background-color: #e74c3c;
        color: white;
    }

  </style>
</head>
<?php
        $direccion="localhost";
        $usuario="root";
        $contrasena="";
        $dbname="proyecto3"; 
        
        
        $conexion= new mysqli($direccion,$usuario,$contrasena,$dbname);
        if($conexion->error){
            echo"Hubo un error al conectar a la base de datos";
        }
?>
<body>`
  <?php
    include("inicio2.php");  
  ?>
  <div class="mn">
      <?php
         include("subprofesor.php"); 
      ?>
   </div>
  <div class="tablapersonas">
    <h2 class="titulo-seccion">Alumnos de tu clase</h2>
    <?php
               $ID=$_GET['ID'];   
               $sql=" SELECT * FROM clases_has_cuenta WHERE Clases_ID='$ID' ";
               $resultado=$conexion->query($sql);
               if($resultado -> num_rows >0){
                  While($fila=$resultado ->fetch_assoc()){
                     $Cuenta_User=$fila['Cuenta_User'];
                     $sql2="SELECT*FROM Informacion WHERE CI='$Cuenta_User'";
                     $resultado2=$conexion->query ($sql2);
                     if ($resultado2->num_rows>0){
                           While($fila2=$resultado2->fetch_assoc()){
                              $Nombres=$fila2['Nombres'];
                              $Apellidos=$fila2['Apellidos'];
                              $Direccion=$fila2['Direccion'];
                              $Fecha=$fila2['FechadeNacimiento'];
                              $Celular=$fila2['Telefono'];
                              $Curso=$fila2['Curso'];
                              $Rude=$fila2['RUDE'];
                              $CI=$fila2['CI'];
                              ?>
                    <div class="compañero-item">
                        <span><?= $NombreCompleto ?></span>
                        <a href="eliminar_estudiante.php?CI_estudiante=<?=$CI?>&ID_clase=<?=$ID?>" class="eliminar-link">Eliminar estudiante</a>
                    </div>
                <?php
                }
            }
        }
    }
    ?>
   </div>
</body>
</html>
