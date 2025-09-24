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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
</head>
<style>
    body{
        margin:0px;
    }
    #Cero{
        background-color: rgb(3, 3, 117);
        width: 800px;
        height: 400px;
        margin-top: 100px;
       
    }
    #Uno{
        background-color: rgb(0, 0, 75);
        width: 799px;
        border:1px solid black;
        color: white;
        
        
    }
    #unouno{
    margin-right: 500px;
    }
    #Dos{
        border: 1px rgb(246, 246, 252);
        border-radius: 5px;
        font-size: 15px;
    }
    #Dos:hover{
        background-color: rgba(0, 123, 255, 0.5);
       
}
#Dosdos{
    color: white;
    margin-left: 5px;
}
#Tres{
     border: 1px blue;
     font-size: 15px;
     margin-left: 5px;
     border: 2px  solid #333 ;

}
  #Tres:hover{
  border-color: #aaa;

}
#Cuatro{
      background-color: rgb(0, 0, 75);
      width: 799px;
      border:1px solid black;
      height: 50px;
}
#boton1{
    background-color: rgb(9, 83, 194);
    border: 1px solid black;
    border-radius: 5px;
    font-size:15px;
    color:white;
    margin-left: 600px;
    margin-top:20px;
}
#boton1:hover{
    background-color: rgb(11, 60, 221);
    color: black;
    transform: scale(1.1);

}
#boton2{
    background-color: rgb(9, 83, 194);
    border: 1px solid black;
    border-radius: 5px;
    font-size: 15px;
    color:white;
}
#boton2:hover{
    background-color:rgb(11, 60, 221); 
    color: black;
    transform: scale(1.1);


}
#ola{
    color: white;
}
#ola1{
    color: white;
    font-weight: bold;
}
@media (max-width: 600px) {
      #Cero {
        width: 90%;
        padding: 15px;
      }

      #boton1, #boton2 {
        width: 100%;
        margin: 10px 0;
      }

      #Tres {
        width: 100%;
      }

      h3, li {
        font-size: 16px;
        text-align: left;
      }

      #unouno {
        text-align: left;
        margin-right: 0;
      }
    }
 

</style>
<body>
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
    <form action="ingresoaula.php" method="post" id="form">
        <div id="Cero">
        <div id="Uno">
        <h3 id="unouno">Unirse a Clase</h3>    
        </div>
        <fieldset>
            <legend>
                <h3 id="Dosdos">Has iniciado sesion como</h3>
                <button id="Dos">Cambiar Cuenta</button>
            </legend>
        </fieldset>
        <fieldset>
            <legend>
                <h3 id="Dosdos">Codigo de Clase</h3>
                <input type="text" placeholder="Codigo de clase" id="Tres" name="Codigo">
            </legend>
        </fieldset>
        <ul id="ola1">Para Iniciar Sesion Con Un Codigo En Una Clase</ul>
        <li id="ola">Usa una cuenta autorizada</li>
        <li id="ola">Utiliza un codigo de clase con 5-8 letras o numeros sin espacios ni simbolos</li>
        <div id="Cuatro">
            <button id="boton1">Cancelar</button>
            <input type="submit" value="Unirme" id="boton2">
            
        </div>
    </form>
    </div>
    </center>

<script>
    $("#form").validate({
        rules:{
            Nombre:{
                required:true,
                minlenght:5,
                maxlenght:7
            }
        },
        messages:{
            Nombre:{
            required:"Este campo requiere ser llenado",
            minlenght:"El  minimo de letras es de 5 digitos",
            maxlenght:"El maximo de letras es 7 digitos"
        }
        }
    })
</script>
</body>
</html>