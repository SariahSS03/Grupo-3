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
            grid-template-rows: 40% 30%;
            grid-template-columns: 16% 84% ;
            grid-template-areas: "principal principal"
                                 "opciones clases";
                               
        }
        .clases{
            background-color: rgb(240, 243, 242);
            grid-area: clases;            
        }
        #clase2{
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
        if($_SESSION['rol']==2 ){
            header('Location: inicioprofesor.php');
        }
        ?>
    <?php
    include("inicio1.php");
    ?>
    <div class="clases">
    <?php
        $User=$_SESSION['CI'];
        $sql="SELECT*FROM clases_has_cuenta  WHERE Cuenta_User='$User'";
        $resultado = $conexion->query($sql);
        if ($resultado->num_rows>0){
            while($fila=$resultado->fetch_assoc()){
                $Clases_ID= $fila['Clases_ID'];
                $sql2= "SELECT*FROM  Clases WHERE ID='$Clases_ID'";
                $resultado2= $conexion->query($sql2);
                $Clase=$resultado2->fetch_Assoc();
                
    ?>
                <div id="clase2">
                    <a href="aulaoriginal.php?ID=<?=$Clases_ID?>">
                        <h2><?=$Clase['Nombre']?></h2>
                    </a>    
                </div>
    <?php
            }
        }
     ?>
   </div>
    <script>
    function redirigir() {
      window.location.href = "aulaoriginal.php?ID=<?=$Clases_ID?>";
    }
  </script>
    
</body>
</html>