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
        .body-clases-admin {
            display: grid;
            grid-template-columns: 16% 84%;
            grid-template-rows: auto auto ;
            grid-template-areas:"principal principal"
                                "opciones madre";
            font-family: 'Roboto', sans-serif;
            margin:0px;
        }
        .madre{
            grid-area:madre;
            margin: 30px;
            background-color: #fff;
            color: #202124;
        }
        .perfil {
            align-items: center;
            margin-bottom: 20px;
        }
        .nombre {
            font-size: 20px;
            font-weight: 500;
        }

        hr {
            border: none;
            border-top: 1px solid #ddd;
            margin: 20px 0;
        }
        .tarea {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-top: 1px solid #e0e0e0;
            padding: 15px 0;
        }

        .tarea .titulo {
            font-weight: 500;
            margin-bottom: 5px;
        }

        .tarea .fecha {
            font-size: 14px;
            color: #5f6368;
        }

        .estado {
            font-size: 14px;
            font-weight: 500;
        }

        .estado.no-entregado {
            color: red;
        }

        .estado.entregado {
            color: #5f6368;
        }
        .avatar {
            background-color: #faf8f7ff;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            font-size: 32px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 16px;
        }

    </style>
</head>
<body class="body-clases-admin">
    <?php
    include("Administrador.php");
    ?>
<div class="madre">
    <div class="perfil">
    <?php
    $User=$_GET['CI']; 
        $sql2="SELECT*FROM Informacion WHERE CI='$User'";
        $resultado2=$conexion->query ($sql2);
        if ($resultado2->num_rows>0){
            While($fila2=$resultado2->fetch_assoc()){
                $Nombres=$fila2['Nombres'];
                $Apellidos=$fila2['Apellidos'];
            ?>
        <div class="nombre"><?=$Nombres?> <?=$Apellidos?></div>
    <?php
        }
    }
    ?>
    </div>

    <hr>

    <div class="tarea">
        <?php
        $User=$_GET['CI'];
        $sql3="SELECT * FROM Clases_has_Cuenta WHERE Cuenta_User='$User'";
        $resultado3=$conexion->query ($sql3);
        if ($resultado3->num_rows>0){
            While($fila3=$resultado3->fetch_assoc()){
                $ID_Clase=$fila3['Clases_ID'];
                $sql4="SELECT*FROM Clases WHERE ID='$ID_Clase'";
                $resultado4=$conexion->query ($sql4);
                if ($resultado4->num_rows>0){
                    While($fila4=$resultado4->fetch_assoc()){
                        $nombre= $fila4['Nombre'];
                        $inicial= $fila4['Inicial'];
                        $color= $fila4['Color'];
                        $curso= $fila4['Curso'];
                        ?>
                        <div class="info-tarea">
                        <div class="avatar" style="color: <?php echo $color; ?>"><?=$inicial?></div>
                        <div class="titulo"><?=$nombre?></div>
                        </div>
                        <div class="estado no-entregado"><?=$curso?></div>
                        <?php
                    }}
            }}
        ?>
        
    </div>
</div>
</body>
</html>