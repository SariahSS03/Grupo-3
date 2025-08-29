<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
   body{
            margin:none;
            display: grid;
            grid-template-rows: 40% 30%;
            grid-template-columns: 16% 84% ;
            grid-template-areas: "principal principal"
                                 "opciones dos";
                               
        }

    .dos{
        grid-area:dos;
    }
 #infobasica{
    
    background-color:transparent;
    border: 2px solid black;
    border-radius: 15px;
    width: 900px;
    margin-top:50px;
   
 }
 #infocontacto{
    background-color:transparent;
    border: 2px solid black;
    border-radius: 15px;
    width: 900px;
    margin-top:50px;
 }
 #infoestudiante{
    background-color:transparent;
    border: 2px solid black;
    border-radius: 15px;
    width:900px;
    margin-top:50px;
 }
 #Nombres{
    border: 1px solid grey;
    border-radius: 15px;
    background-color:white;
    font:"Google Sans Text","Google Sans",Roboto,Arial,sans-serif ;
    font-size: 20px;
    
 }
 #Nombres:hover{
   background-color: rgba(200, 200, 200, 0.5);
 }
 #nom{
    margin-right: 500px;
    font-family:"Google Sans Text","Google Sans",Roboto,Arial,sans-serif ;
    font-size: 20px;
 }

</style>
<body>
     <?php
        $direccion="localhost";
        $usuario="root";
        $contrasena="";
        $dbname="proyecto3"; 
        
        $conexion= new mysqli($direccion,$usuario,$contrasena,$dbname);
        if($conexion->error){
            echo "Hubo un error al conectar a la base de datos";
        }
        session_start();
        $User=$_SESSION['CI'];
        $sql="SELECT*FROM   Informacion   WHERE CI='$User'";
        $resultado = $conexion->query($sql);
        if ($resultado->num_rows>0){
            while($fila=$resultado->fetch_assoc()){
                $CI= $fila['CI'];
                $Nombres=$fila['Nombres'];
                $Apellidos=$fila['Apellidos'];
                $Direccion=$fila['Direccion'];
                $Fecha=$fila['Fechadenacimiento'];
                $Celular=$fila['Telefono'];
                $Curso=$fila['Curso'];
                $Rude=$fila['Rude'];
            }
        }
     ?>
     <?php
     if($_SESSION['rol']==2 ){
           include("inicio2.php");  
        }else{
            if($_SESSION['rol']==1 ){
            include("inicio1.php");
        }
        }
   
    ?>
    <center>

    <div class="dos">
    <div class="ola2">
    <h1>Te damos la bienvenida <?=$Nombres?> <?=$Apellidos?></h1>
    <h3>Gestion tu Informacion,la privacidad y la seguridad para mejorar tu expericiencia</h3>
    </div>
     <div id="infobasica">
     <h1>Informacion basica</h1>
     <div id="Nombres"><h2 id="nom">Nombres: <?=$Nombres?></h2></div>
     <div id="Nombres"><h2 id="nom">Apellidos: <?=$Apellidos?></h2></div>
     <div id="Nombres"><h2 id="nom">Carnet de Identidad: <?=$CI?></h2></div>
     <div id="Nombres"><h2 id="nom">Fecha de nacimiento: <?=$Fecha?></h2></div>
     </div>

     <div id="infocontacto">
     <h1>Informacion de contacto</h1>
     <div id="Nombres"><h2  id="nom">Direccion: <?=$Direccion?></h2></div>
     <div id="Nombres"><h2 id="nom">Telefono: <?=$Celular?></h2></div>
    </div>

     <div id="infoestudiante">
     <h1>Informacion de estudiante</h1>
     <div id="Nombres"><h2 id="nom">Curso: <?=$Curso?></h2></div>
     <div id="Nombres"><h2 id="nom">Rude: <?=$Rude?></h2></div>
    </div>
    </div>
      </center>

</body>
</html>