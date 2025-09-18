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
            background-color:	#c9c9c9;
            font-family: "Open Sans", sans-serif;
            color:white;
        }
        form{
            background-color:	#F5D547;
            padding: 20px;
            border-radius:50px 50px 50px 50px;
            margin-right:350px;
            margin-bottom:50px;
            margin-top: 10px; 
            height: 850px;
            width: 500px;
            margin-left: 550px;
        }
        img{
            width: 200px;
            height:115px;
            transition: transform 0.3s;
            
        }
        img:hover{
            transform: scale(1.2) rotate(360deg);
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
      background-color: #00439b; 
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
      background-color:rgba(66, 0, 141, 0.88);
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

.regi{
    padding: 20px;
    border-radius: 20px;
    color: #2C3E50;
    width: 450px;
    height: 745px;
    margin-bottom: 900px;

}


 
    </style>
</head>
<body>
    
    <form action="basededatos.php" method="post" id="registro"> <!--Direccionara a la carpeta "base de datos", la cual recuperar los datos del formulario-->
     <center> 
     <div class="regi">   
        <img src="Imagenes/logo.png">
        <h2>REGISTRATE</h2>
        
        <label for="" >Nombres</label><br>
        <input type="text" name="Nombres" id=""    placeholder="Ingresa tus nombres" ><br> 
         
        <label for="" >Apellidos</label><br>
        <input type="text" name="Apellidos" id="" placeholder="Ingresa tus apellidos"><br>   
          
        <label for="" >Telefono</label><br>
        <input type="text" name="Telefono" id="" placeholder="Ingresa tu telefono "><br>    
        
        <label for="" >Curso</label><br>
       <input type="text" name="Curso" id="" placeholder="curso 'pararelo mayuscula' EJ: 1ro B "><br>
     
       <label for="" >Fecha de nacimiento</label><br>
       <input type="date" name="Fechadenacimiento" id=""><br>
       
       <label for="">Dirección</label><br>
       <input type="text" name="Direccion" id="" placeholder="Ingresa tu domicilio"><br>
       
       <label for="" >Rude </label><br>
       <input type="number" name="Rude" id="" placeholder="Ingresa tu RUDE correctamente"><br>
     
       <label for="" >C.I</label><br>
       <input type="text" name="CI" id="" placeholder="Ingresa tu celula de identidad"><br>
     
       <input type="submit" id="Boton" value="Iniciar Sesion" >
   </div>
    </center> 
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
                required:true
            },
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
            Fechadenacimiento:{
                required:"este campo tiene que ser llenado solo numeros "
            },
            Telefono:{
                required:"este campo tiene que ser llenado solo numeros ",
                number:"el campo solo tiene que llenado con numeros",
            }
        }
    });
</script>

</body>
</html>