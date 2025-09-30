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
        .body-clases-admin {
            font-family: 'Roboto', sans-serif;
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
<body class="body-clases-admin">
    
    <div class="perfil">
    <?php
    $User=$_GET['CI']  
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
        $User=$_GET['CI']  
                     $sql3="SELECT*FROM clases_has_cuenta WHERE Cuenta_User='$User'";
                     $resultado3=$conexion->query ($sql3);
                     if ($resultado3->num_rows>0){
                           While($fila3=$resultado3->fetch_assoc()){
                              $ID_Clase=$fila3['Clases_ID'];
                              $sql4="SELECT*FROM Clases WHERE ID='$ID_Clase'";
                              $resultado3=$conexion->query ($sql3);
                                if ($resultado3->num_rows>0){
                                    While($fila3=$resultado3->fetch_assoc()){
                                        $nombre= $fila2['Nombre'];
                                        $inicial= $fila2['Inicial'];
                                        $color= $fila2['Color'];
                                        $curso= $fila2['Curso'];
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
</html>