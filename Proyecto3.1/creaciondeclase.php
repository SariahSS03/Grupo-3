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
        header('Location: inicioestudiante.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
     <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

</head>
<style>
body{
    margin:0px;
}
#uno{
    width: 600px;
    height:400px;
   background-color: rgb(0, 0, 255);
    border: 1px solid black;
}
#dos{
    color:white;
}
#tres{
    background-color: rgb(0, 32, 80);
    border:1px solid black;

}
    label{
    font-size:20px;
    color:white;
    margin-top:10px;
    display: inline-block;
        }
        
 #Boton {
    background-color:rgb(26, 93, 180); 
    color: white;
    padding: 12px 24px;
    font-size: 15px;
    border: none;
    border-radius: 5px; 
    cursor: pointer;
    transition: background-color 0.3s;
    margin-top: 20px;
    padding:2px; 
    
    
    }

 #Boton:hover {
    background-color:rgba(106, 156, 223, 0.88);
    }
 label:hover{
    transform:scale(1.2);
    }
 input{
    width:400px;
    height:30px;
    border-radius: 10px;
    padding: 5px;
    font-size: 16px;
        }

</style>
<body>
    <?php
    include("inicio2.php");
    ?>
    <center>
    <div id="uno">
    <form action="clases.php" method="post" id="crear">
        <div id="tres"><h1 id="dos">Crear clase<h1></div>
        <label for="">Nombre de la clase </label><br>
        <input type="text" name="Nombre" placeholder="Ingresa el nombre del aula"><br>
        <label for="">Codigo</label><br>
        <input type="password" name="Codigo" placeholder="Crea el codigo"><br>
        <label for="">Elige un color:</label><br>
        <input type="color" name="color">
        <input type="submit" id="Boton" value="Crear clase" >
        <button  onclick="window.location.href='unirseaclase.php'" id="Boton">Unirse a Clase</button>
    </form>
    </div>
    <center>
    <script>
        $("#crear").validate({
            rules:{
              Nombre:{
                required:true,
                minlenght:5,
                maxlenght:45
            },
             Codigo:{
                required:true,
                number:true
            }
        },
        messages:{
            Nombre:{
                required:"este campo tiene que ser llenado",
                minlenght:"El minimo es de 5 letras",
                maxlenght:"El maximo es el 45 letras"
            },
              Codigo:{
                required:"este campo tiene que ser llenado solo  con numeros ",
                number:"el campo solo tiene que llenado con numeros",
            }
             }
});
    </script>
</body>
</html>