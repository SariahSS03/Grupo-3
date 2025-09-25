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
            margin:none;
            display: grid;
            grid-template-rows:10%;
            grid-template-columns: 16% 84% ;
            grid-template-areas: "principal principal"
                                 "opciones dos"
                                  "opciones dos";
         margin:0px;  
        font-family: "Open Sans", sans-serif;
        color:white;                    
        }
        form{
            background-color:#F5D547;
            padding: 20px;
            border-radius:50px 50px 50px 50px;
            margin-right:350px;
            margin-bottom:50px;
            margin-left:500px;
            margin-top: 60px; 
            width: 500px;
            height: 700px;
            grid-area:dos;
        }
        #img2{
            width: 200px;
            height:110px;
            transition: transform 0.3s;

        }
        img:hover{
            transition: scale(1.2);
            cursor: pointer;
        }
        input{
            width:400px;
            height:30px;
            border-radius: 10px;
            padding: 5px;
            font-size: 16px;
        }
        label{
            font-size:20px;
        }
        #Boton {
      background-color: #467ec7; 
      color: white;
      padding: 12px 24px;
      font-size: 16px;
      border: none;
      border-radius: 10px; 
      cursor: pointer;
      transition: background-color 0.3s;
      margin-top: 20px;
      padding:2px;
    }

    #Boton:hover {
      background-color:rgba(3, 57, 128, 0.88);
    }
    @media  (max-width: 700px) {
  #registro {
    width: 90%;        
    max-width: 410px;  
    margin: 20px auto; 
    padding: 10px;
  }
}
.regi{
      width: 10%;        
    max-width: 300px;  
    margin: 20px auto; 
    padding: 10px;
   
}
input {
        width: 100%;
    }
    .trate{
        padding: 20px;
    border-radius: 20px;
    color: #502c2c;
    width: 450px;
    height: 745px;
    margin-bottom: 900px;
}
    </style>
</head>
<body>
    <?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="proyecto3";

    $conexion = new mysqli($servername, $username, $password, $dbname);
            session_start();
            $CI=$_SESSION['CI'];
            $sql=" SELECT * FROM Cuenta WHERE User='$CI' ";
            $sql2=" SELECT * FROM Informacion WHERE CI='$CI' ";
            $resultado=mysqli_query($conexion,$sql2);
            if(!empty($resultado)&& mysqli_num_rows($resultado)>0){
                $fila= mysqli_fetch_assoc($resultado);
                $nombres=$fila['Nombres'];
                $apellidos =$fila['Apellidos'];
                $telefono=$fila['Telefono'];
                $curso=$fila['Curso'];
                $fechadenacimiento =$fila['Fechadenacimiento'];
                $direccion=$fila['Direccion'];
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
    <form action="editardatos.php" method="post" id="registro">

        
        <center>
            <div class="trate">
            <img src="Imagenes/logo.png" id="img2">
        <h1>REGISTRATE</h1>
        
        <label for="" >Nombres</label><br>
        <input type="text" name="Nombres" placeholder="Ingresa tus nombres" value='<?= $nombres ?>' ><br> 
         
        <label for="" >Apellidos</label><br>
        <input type="text" name="Apellidos" id="" placeholder="Ingresa tus apellidos" value='<?= $apellidos ?>'><br>   
           
        <label for="" >Telefono</label><br>
        <input type="text" name="Telefono" id="" placeholder="Ingresa tu telefono " value='<?= $telefono ?>'><br>    
        
        <label for="" >Curso</label><br>
       <input type="text" name="Curso" id="" placeholder="curso 'pararelo mayuscula'" value='<?= $curso ?>'><br>
       
       <label for="" >Fecha de nacimiento</label><br>
       <input type="date" name="FechadeNacimiento" id="" value='<?= $fechadenacimiento ?>'><br>
      
       <label for="">Dirección</label><br>
       <input type="text" name="Direccion" id="" placeholder="Ingresa tu domicilio" value='<?= $direccion ?>'><br>

    <input type="submit" id="Boton" value="Guardar" ><br>
    </center> 
    </div>
</form>
<script>
    $("#registro").validate({
        rules:{
            Nombres:{
                required:true,
                minlenght:5,
                maxlenght:45
            },
            Apellidos:{
                required:true,
                minlenght:5,
                maxlenght:45
            },
            Curso:{
                required:true,
                minlenght:5,
                maxlenght:10
            },
            Direccion:{
                required:true,
                minlenght:15,
                maxlenght:45
            },
            CI:{
                required:true,
                number:true
            },
            Telefono:{ 
                required:true,
                number:true
            },
             Rude:{ 
                required:true,
                number:true
            },
            Fechadenacimiento:{
                required:true,
            }
        },
        messages:{
            Nombres:{
                required:"este campo tiene que ser llenado",
                minlenght:"El minimo es de 5 letras",
                maxlenght:"El maximo es el 45 letras"
            },
            Apellidos:{
                required:"este campo tiene que ser llenado",
                minlenght:"El minimo es de 5 letras",
                maxlenght:"El maximo es el 45 letras"
            },
            Curso:{
                required:"este campo tiene que ser llenado",
                minlenght:"El minimo es de 5 letras",
                maxlenght:"El maximo es el 45 letras"
            },
            Direccion:{
                required:"este campo tiene que ser llenado",
                minlenght:"El minimo es de 5 letras",
                maxlenght:"El maximo es el 45 letras"
            },
            CI:{
                required:"este campo tiene que ser llenado solo numeros ",
                number:"el campo solo tiene que llenado con numeros",
            },
            Rude:{
                required:"este campo tiene que ser llenado",
                number:"el campo solo tiene que llenado con numeros",
            },
            Telefono:{
                required:"este campo tiene que ser llenado solo numeros ",
                number:"el campo solo tiene que llenado con numeros",
            },
            Fechadenacimiento:{
                required:"este campo tiene que ser llenado",
            }
        }
    });
</script>

</body>
</html>