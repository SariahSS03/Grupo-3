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
    if($_SESSION['rol']==1 ){
        header('Location: ../Estudiante/inicioestudiante.php');
    }
?>
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
             background-color: white;
            border-radius:25px;
            border: 1px solid black;
            width: 21%;
            height: 120%;
            display:flex;
            flex-direction:column;
            justify-content:space-between;
            
        }
          #b{
            font-size:25px;
            color:white;
            position: relative;
            left:5%;
        }
        #o{
          background-color: <?php echo $color; ?>;
          border-top-left-radius:25px;
          border-top-right-radius:25px;
          height:33%;
          
        }
        #oo{
          background:<?php echo $color+1; ?>;
          position:relative;
          left:215px;
          bottom:100px;
          width: 80px;
          height:83px;
          border-radius:100%;
        }
        #ooo{
      background:white;
      height:19%;

      position: relative;
      bottom:1%;
      border-bottom-left-radius:25px;
      border-bottom-right-radius:25px;
      border-top:1px solid black;
      display:flex;
      flex-direction: row-reverse;


        }
        #l{
          position: relative;
          left:40%;
          color:white;
        }

    </style>
</head>
<body>
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
                $inicial=$fila['Inicial'];
                $color=$fila['Color'];
                $curso=$fila['Curso'];
                $id=$fila['ID'];
    ?>
                <div id="clase3">
                    <div>
                    <a href="aulaoriginal.php?ID=<?=$id?>">
                        <h2><?=$nombre?></h2>
                    </a> 
            </div>     
                    <div id="o">
                        <h2 id="b"><?=$curso?></h2> 
                    </div>
                    <div id="oo">
                      <H1 id="l"><?=$inicial?></H1>
                    </div> 
                    <div id="ooo">
                        <a>
                            <img width="30px" height="25px" src="https://w7.pngwing.com/pngs/393/995/png-transparent-aspria-fitness-computer-icons-user-my-account-icon-miscellaneous-monochrome-black-thumbnail.png" >
                        </a>
                        <a>
                            <img width="35px" height="25px" src="https://cdn-icons-png.flaticon.com/512/2739/2739782.png">
                        </a>
                        <a>
                            <img width="35px" height="25px" src="https://w7.pngwing.com/pngs/183/20/png-transparent-three-dots-zondicons-icon-thumbnail.png">
                        </a>
                    </div> 
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