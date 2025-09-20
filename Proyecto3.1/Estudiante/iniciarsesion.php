<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <style>
         body{
            background-color:#c9c9c9;
            font-family: "Open Sans", sans-serif;
            color:white;
        }
        form{
            background-color:#F5D547;
            padding: 20px;
            border-radius:50px 50px 50px 50px;
            margin-right:50px;
            margin-bottom:50px;
            margin-left:50px;
            margin-top: 100px;
            width:300px ;
            height:100 px;
            box-shadow: #003375;
        }
        input{
            width:200px;
            height:30px;
            border-radius: 10px;
            padding: 5px;
            font-size: 16px;
        }
        label{
            color: #3872bd;
            font-size: 25px;
        }
    #titu{
        color: #003375;
    }
        #Boton {
    
    background-color:#024fb4; 
    color: white;
    width:200px;
    height:35px;
    padding: 5px ;
    font-size: 16px;
    border: none;
    border-radius: 10px; 
    display: flex;
   justify-content: center;
   gap: 25px;
   margin-top: 20px;
   flex-direction: column;
   transition: background-color 0.3s;
    }

    #Boton:hover {
      background-color:#3872bd;
    }


@media (max-width: 800px) {
  #Boton {
    flex-direction: column;
    align-items: center;
    padding-top: 20px;
    padding-bottom: 25px;
    flex-direction: row;
  }

}

input {
        width:100%;
    }


    </style>
</head>
<body>
<center> <div class="inicio">
<form action="mostrardatos.php" method="post" id="form">
    <h1 id="titu">Inicio de Sesion</h1>
<label>CI:</label>
<input type="text" name="CI" id="" placeholder="Cedula de identidad" ><br><br>
<label>Contraseña:</label>
<input type="password" name="Rude" id="" placeholder="RUDE"><br><br>

<input type="submit" value="Inicio de sesion" id="Boton">
<button  onclick="window.location.href='registro.php'" id="Boton">Crear Cuenta</button></center>
</div></form>

<script>
    $("#form").validate({
        rules:{
            Rude:{
                required:true,
                minlenght:15,
                maxlenght:45
            },
            CI:{
                required:true,
                number:true
            }
        },
        messages:{
            Rude:{
                required:"este campo tiene que ser llenado",
                minlenght:"El minimo es de 5 letras",
                maxlenght:"El maximo es el 45 letras"
            }
            CI:{
                required:"este campo tiene que ser llenado solo numeros ",
                number:"el campo solo tiene que llenado con numeros"
            }
        }
    })
</script>
</body>
</html>