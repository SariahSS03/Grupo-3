<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <style>
    .body-personas-estudiante {
      display: grid;
      grid-template-columns: auto auto ;
      grid-template-rows: auto auto auto;
      grid-template-areas:"principal principal"
                          "opciones mn"
                          "opciones tabla";
      font-family: Verdana, Geneva, Tahoma, sans-serif;
      background-color: #f8f8f8;
      margin:0px;
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
<body class="body-personas-estudiante">
   <?php
        include("inicio1.php");
  ?>
  <div class="n">
      <?php
         include("subestudiante.php"); 
      ?>
   </div>
   <div class="tablapersonas">
    <h2 class="titulo-seccion">Compañeros de clase</h2>

    <?php
    $ID = $_GET['ID'];   
    $sql = "SELECT * FROM clases_has_cuenta WHERE Clases_ID='$ID'";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        while ($fila = $resultado->fetch_assoc()) {
            $Cuenta_User = $fila['Cuenta_User'];
            $sql2 = "SELECT * FROM Informacion WHERE CI='$Cuenta_User'";
            $resultado2 = $conexion->query($sql2);

            if ($resultado2->num_rows > 0) {
                while ($fila2 = $resultado2->fetch_assoc()) {
                    $Nombres = $fila2['Nombres'];
                    $Apellidos = $fila2['Apellidos'];
                    $NombreCompleto = $Nombres . " " . $Apellidos;
                    ?>

                    <div class="compañero-item">
                        <?= $NombreCompleto ?>
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
