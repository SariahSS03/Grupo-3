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
.body-crear-clase {
  margin: 0px;
  display: grid;
  grid-template-rows: auto auto auto auto;
  grid-template-columns: 16% 84%;
  grid-template-areas:
    "principal principal"
    "opciones Tareas";
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  background-color: #f5f7fa;
  align-items: center;
  height: 100%;
}

#uno {
  width: 500px;
  background: linear-gradient(to bottom right, #1e3c72, #2a5298);
  border-radius: 12px;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
  padding: 30px 40px;
  box-sizing: border-box;
  grid-area:Tareas;
}

#tres {
  background-color: rgba(0, 32, 80, 0.8);
  padding: 15px;
  border-radius: 8px;
  margin-bottom: 20px;
  text-align: center;
}

#dos {
  color: white;
  font-size: 26px;
  margin: 0;
  font-weight: 600;
}

form label {
  font-size: 16px;
  color: #ffffff;
  margin-top: 15px;
  display: block;
  font-weight: 500;
  transition: transform 0.2s;
}

form label:hover {
  transform: scale(1.05);
}

input[type="text"],
input[type="password"],
input[type="color"] {
  width: 100%;
  height: 40px;
  border-radius: 8px;
  padding: 8px 12px;
  margin-top: 5px;
  margin-bottom: 15px;
  font-size: 15px;
  border: none;
  box-sizing: border-box;
  transition: box-shadow 0.2s;
}

input[type="text"]:focus,
input[type="password"]:focus,
input[type="color"]:focus {
  outline: none;
  box-shadow: 0 0 5px #80bdff;
}

#Boton {
  background-color: #3b82f6;
  color: white;
  padding: 12px 20px;
  font-size: 15px;
  border: none;
  border-radius: 6px;
  cursor: pointer;
  transition: background-color 0.3s ease, transform 0.2s ease;
  margin-top: 15px;
  display: inline-block;
  margin-right: 10px;
}

#Boton:hover {
  background-color: #2563eb;
  transform: scale(1.05);
}

</style>
<body class="body-crear-clase">
    <?php
    include("inicio2.php");
    ?>
    <center>
    <div id="uno">
    <form action="clases.php" method="post" id="crear">
        <div id="tres"><h1 id="dos">Crear clase<h1></div>
        <label for="">Nombre de la clase: </label><br>
        <input type="text" name="Nombre" placeholder="Ingresa el nombre del aula"><br>
        <label for="">Codigo:</label><br>
        <input type="text" name="Codigo" placeholder="Crea el codigo"><br>
        <label for="">Curso:</label><br>
        <input type="text" name="Curso" placeholder="Curso EJ: 6to de secundaria"><br>
        <label for="">Elige un color:</label><br>
        <input type="color" name="color"><br>
        <label for="">Inicial:</label><br>
        <input type="text" name="Inicial" placeholder="Pon la inicial de la clase"><br>
        <input type="submit" id="Boton" value="Crear clase" >
        <button  onclick="window.location.href='../Estudiante/unirseaclase.php'" id="Boton">Unirse a Clase</button>
    </form>
    </div>
    <center>
    <script>
        $("#crear").validate({
            rules:{
              Nombre:{
                required:true,
                minlength:5,
                maxlength:45
            },
             Codigo:{
                required:true,
                minlength:5,
                maxlength:8
            },
            Curso:{
                required:true,
                minlength:5,
                maxlength:45
            },
            Inicial:{
                required:true,
                minlength:1,
                maxlength:1
            }
        },
        messages:{
            Nombre:{
                required:"este campo tiene que ser llenado",
                minlength:"El minimo es de 5 letras",
                maxlength:"El maximo es el 45 letras"
            },
              Codigo:{
                required:"este campo tiene que ser llenado ",
                minlength:"El minimo es de 5 letras",
                maxlength:"El maximo es el 8 letras"
            },
            Curso:{
                required:"este campo tiene que ser llenado",
                minlength:"El minimo es de 5 letras",
                maxlength:"El maximo es el 45 letras"
            },
            Inicial:{
                required:"este campo tiene que ser llenado solo con una letra",
                minlength:"El minimo es de 1 letras",
                maxlength:"El maximo es el 1letras"
            }
        }
});
    </script>
</body>
</html>