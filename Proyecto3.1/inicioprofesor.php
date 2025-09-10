<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin:none;
            display: grid;
            grid-template-rows: auto auto auto auto auto;
            grid-template-columns: 16% 84% ;
            grid-template-areas: "principal principal"
                                " opciones clases";
            margin:0px;
        }
        .clases2{
            background-color: rgb(240, 243, 242);
            grid-area: clases;            
        }
        #clase3{
            background-color: red;
            border-radius:25px;
            border: 5px solid black;
        }

    </style>
</head>
<body>
      <?php
        $direccion="localhost";
        $usuario="root";
        $contrasena="";
        $dbname="proyecto3"; 
        
        $conexion= new mysqli($direccion,$usuario,$contrasena,$dbname);
        if($conexion->error){
            echo"Hubo un error al conectar a la base de datos";
        }
        session_start();
        if($_SESSION['rol']==1 ){
            header('Location: inicioestudiante.php');
        }
        ?>
    <?php
    include("inicio2.php");
    ?>
    <div class="clases2">
  <?php
        $User=$_SESSION['CI'];
        $sql="SELECT*FROM clases   WHERE Profesor='$User'";
        $resultado = $conexion->query($sql);
        if ($resultado->num_rows>0){
            while($fila=$resultado->fetch_assoc()){
                $CI= $fila['Profesor'];
                $nombre=$fila['Nombre'];
                $codigo=$fila['Codigo'];
                $id=$fila['ID'];
    ?>
                <div id="clase3">
                    <a href="aulaoriginal.php?ID=<?=$id?>">
                        <h2><?=$nombre?></h2>
                    </a>    
                </div>
<?php
            }
        }
     ?>
   </div>
    <script>
    function redirigir() {
      window.location.href = "aulaoriginal.php";
    }
  </script>
    
</body>
</html>