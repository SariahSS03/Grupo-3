<?php
session_start();
  $direccion="localhost";
  $usuario="root";
  $contrasena="";
  $dbname="proyecto3"; 

  $conexion= new mysqli($direccion,$usuario,$contrasena,$dbname);
  if($conexion->error){
      echo"Hubo un error al conectar a la base de datos";
  }
  if($_SESSION['rol']==2 ){
        header('Location:/grupo-3/Proyecto3.1/Profesor/inicioprofesor.php');
    }if($_SESSION['rol']==1 ){
        header('Location:/grupo-3/Proyecto3.1/Estudiante/inicioestudiante.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .body-usuarios{
      display: grid;
      grid-template-columns: 16% 84%;
      grid-template-rows: auto auto ;
      grid-template-areas:"principal principal"
                          "opciones mostrar";
      font-family: 'Roboto', sans-serif;
      margin: 0;
      background: #f9f9f9;
      color: #333;
    }
    .personas{
      grid-area:mostrar;
    }

    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 25px;
      border-bottom: 1px solid #ddd;
      background: #fff;
      position: sticky;
      top: 0;
    }

    header h2 {
      margin: 0;
      font-weight: 500;
      color: #202124;
    }

    .contenedor {
      max-width: 1100px;
      margin: auto;
      padding: 20px;
    }

    h3 {
      font-weight: 500;
      margin-bottom: 10px;
    }

    .tarjeta {
      background: #fff;
      border: 1px solid #ddd;
      border-radius: 8px;
      padding: 20px;
      margin-bottom: 25px;
    }

    .caja-superior {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 10px;
    }

    .lista {
      border-top: 1px solid #eee;
    }

    .elemento {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 12px 0;
      border-bottom: 1px solid #eee;
    }

    .elemento:last-child {
      border-bottom: none;
    }

    .informacion {
      flex: 1;
      display: flex;
      align-items: center;
    }

    .acciones {
      font-size: 14px;
      color: #1a73e8;
      cursor: pointer;
    }
    .acciones a {
        display: inline-block;
        margin: 5px 10px;
        padding: 8px 16px;
        background-color: #007BFF; /* Azul moderno */
        color: white;
        text-decoration: none;
        border-radius: 6px;
        font-weight: bold;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .acciones a:hover {
        background-color: #0056b3;
        transform: scale(1.05);
    }

    .acciones a:active {
        transform: scale(0.98);
    }

  </style>
</head>
<body class="body-usuarios">
    <?php
    include("Administrador.php");
    ?>
    
<section class="personas">
   
  <header>
    <h2>Personas</h2>
  </header>
    <?php
        $User=$_SESSION['CI'];
        $sql="SELECT*FROM   Informacion   WHERE CI='$User'";
        $resultado = $conexion->query($sql);
        if ($resultado->num_rows>0){
            while($fila=$resultado->fetch_assoc()){
                $CI= $fila['CI'];
                $Nombres=$fila['Nombres'];
                $Apellidos=$fila['Apellidos'];
            }
        }
     ?>
     <h1>Te damos la bienvenida <?=$Nombres?> <?=$Apellidos?></h1>
    
  <div class="contenedor">

    <div class="tarjeta">
      <div class="caja-superior">
        <h3><strong>Usuarios</strong></h3> 
      </div>
        <?php   
               $sql=" SELECT * FROM Cuenta WHERE rol=2 OR rol=1";
               $resultado=$conexion->query($sql);
               if($resultado-> num_rows >0){
                  While($fila=$resultado ->fetch_assoc()){
                     $User=$fila['User'];
                     $Contrasena=$fila['Contrasena'];
                     $rol=$fila['rol'];
                     $Bloqueado=$fila['Bloqueado'];
                     $sql2="SELECT*FROM Informacion WHERE CI='$User'";
                     $resultado2=$conexion->query ($sql2);
                     if ($resultado2->num_rows>0){
                           While($fila2=$resultado2->fetch_assoc()){
                              $Nombres=$fila2['Nombres'];
                              $Apellidos=$fila2['Apellidos'];
                              ?>
                               <div class="lista">
                                  <div class="elemento">
                                    <div class="informacion">
                                      <h3><?=$Nombres?> <?=$Apellidos?></h3>
                                    </div>
                                    <div class="acciones">

                                    <?php
                                      if($fila['rol']==2 ){
                                    ?> 
                                      <a href="HacerEstudiante.php?CI=<?=$User?>">
                                          Hacer Estudiante
                                      </a>
                                    <?php
                                      }if($fila['rol']==1 ){
                                    ?>
                                      <a href="HacerProfesor.php?CI=<?=$User?>">
                                          Hacer Profesor
                                      </a>
                                    <?php
                                      }
                                    ?>
                                    <?php
                                      if($Bloqueado=="Bloqueado" ){
                                    ?>
                                      <a href="Desbloquear.php?CI=<?=$User?>">
                                          Desbloquear
                                      </a>
                                    <?php
                                      }
                                    ?>
                                    <?php
                                      if($Bloqueado!="Bloqueado" ){
                                    ?>
                                      <a href="Bloquear.php?CI=<?=$User?>">
                                          Bloquear
                                      </a>
                                    <?php
                                      }
                                    ?>
                                    <a  href="ClasesAdmin.php?CI=<?=$User?>">Ver Usuario</a>
                                    </div>
                                  </div>
                              </div>   
                        <?php
                        }
                     }
                  }
               }
               ?>
</section>
</body>
</html>