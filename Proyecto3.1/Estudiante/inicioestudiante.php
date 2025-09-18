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
                                 "opciones clases"
                                 "opciones clases";
        margin:0px;                       
        }
        .clases{
            border-top: 5px solid black;
            grid-area: clases;  
            gap:10px;
            display:flex;
            flex-direction:column;
            justify-content:space-between;

        }
        #clase2{
            background-color: white;
            border-radius:25px;
            border: 1px solid black;
            width: 21%;
            height: 120%;
            display:flex;
            flex-direction:column;
            justify-content:space-between;
        }
        #n{
            font-size:25px;
            color:white;
            position: relative;
            left:5%;
        }
        #u{
         background: rgba(61, 66, 65, 1);
          border-top-left-radius:25px;
          border-top-right-radius:25px;
          height:33%;
          
        }
        #uu{
          background:rgba(82, 133, 123, 1);
          position:relative;
          left:215px;
          bottom:100px;
          width: 80px;
          height:83px;
          border-radius:100%;
        }
        #uuu{
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
        #uuu buttom{
            margin-top:20px;
            margin-left:20px;
        }
        #t{
          position: relative;
          left:40%;
          color:white;
        }
        a{
            text-decoration: none;
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
                        if ($resultado2->num_rows>0){
                            while($fila2=$resultado2->fetch_assoc()){
                                $nombre= $fila2['Nombre'];
        ?>
                <div id="clase2">
                    <div id="u">
                        <a href="aulaoriginal.php?ID=<?=$Clases_ID?>">
                        <h2 id="n"><?=$nombre?></h2>
                        </a>  
                    </div>
                    <div id="uu">
                      <H1 id="t">c</H1>
                    </div> 
                    <div id="uuu">
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