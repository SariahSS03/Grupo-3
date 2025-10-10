<?php
session_start();
?>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <style>
         .body-registro-editar{
            margin:none;
            display: grid;
            grid-template-rows:10%;
            grid-template-columns: 16% 84% ;
            grid-template-areas: "principal principal"
                                 "opciones dos";
        margin:0px;  
        font-family: "Open Sans", sans-serif;
        color:white;                   
        }
        #registro {
            background-color: #bfc3c3;
            padding: 20px;
            border-radius: 50px;
            width: 500px;
            height: auto;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }
        form {
            background-color: #bfc3c3;
            padding: 20px;
            border-radius: 50px;
            margin: 40px 80px 50px 80px;
            width: 500px;
            height: auto;
            grid-area: dos;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        .trate {
            padding: 20px;
            border-radius: 20px;
            color: #502c2c;
            width: 100%;
            box-sizing: border-box;
        }

        .titulo-formulario {
            text-align: center;
            font-size: 28px;
            margin-bottom: 30px;
            color: #2c3e50;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        label {
            font-size: 18px;
            font-weight: bold;
        }

        input {
            width: 100%;
            height: 35px;
            border-radius: 10px;
            padding: 5px 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            margin-top: 5px;
        }

        #Boton {
            background-color: #467ec7;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
            width: 100%;
            padding: 12px;
            margin-top: 20px;
        }

        #Boton:hover {
            background-color: rgba(3, 57, 128, 0.88);
            transform: scale(1.02);
        }

        /* Responsive Design */
        @media (max-width: 700px) {
            #registro {
                width: 90%;
                max-width: 410px;
                margin: 20px auto;
                padding: 10px;
            }

            .trate {
                width: 100%;
                padding: 10px;
            }

            input {
                width: 100%;
            }
        }

    </style>
</head>
<body class="body-registro-editar">
    <?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="proyecto3";

    $conexion = new mysqli($servername, $username, $password, $dbname);

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
                $fechadenacimiento =$fila['FechadeNacimiento'];
                $direccion=$fila['Direccion'];
        }
    ?>
    <?php
     if($_SESSION['rol']==2 ){
           include('../Profesor/inicio2.php');  
        }else{
            if($_SESSION['rol']==1 ){
            include('../Estudiante/inicio1.php');
        }
        }
    ?>   
    <form action="editardatos.php" method="post" id="registro">
    <div class="trate">
        <h1 class="titulo-formulario">TUS DATOS</h1>

        <label for="nombres">Nombres</label><br>
        <input type="text" name="Nombres" placeholder="Ingresa tus nombres" value='<?= $nombres ?>'><br><br>

        <label for="apellidos">Apellidos</label><br>
        <input type="text" name="Apellidos"  placeholder="Ingresa tus apellidos" value='<?= $apellidos ?>'><br><br>

        <label for="telefono">Teléfono</label><br>
        <input type="text" name="Telefono"  placeholder="Ingresa tu teléfono" value='<?= $telefono ?>'><br><br>

        <label for="curso">Curso</label><br>
        <input type="text" name="Curso"  placeholder="Ej: 3ro 'A' secundaria" value='<?= $curso ?>'><br><br>

        <label for="fechanac">Fecha de nacimiento</label><br>
        <input type="date" name="FechadeNacimiento"  value='<?= $fechadenacimiento ?>'><br><br>

        <label for="direccion">Dirección</label><br>
        <input type="text" name="Direccion"  placeholder="Ingresa tu domicilio" value='<?= $direccion ?>'><br><br>

        <input type="submit" id="Boton" value="Guardar">
    </div>
    </form>
<script>
    document.getElementById('Boton').addEventListener('click', function(e) {
    e.preventDefault(); // Evita que el formulario se envíe automáticamente

    Swal.fire({
        title: '¿Estás seguro?',
        text: "¿Deseas guardar los cambios?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sí, guardar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            // Si confirma, se envía el formulario
            document.getElementById('registro').submit();
        }
    });
});
</script>
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
                number:"el campo solo tiene que llenado con numeros"
            },
            Rude:{
                required:"este campo tiene que ser llenado",
                number:"el campo solo tiene que llenado con numeros"
            },
            Telefono:{
                required:"este campo tiene que ser llenado solo numeros ",
                number:"el campo solo tiene que llenado con numeros"
            },
            Fechadenacimiento:{
                required:"este campo tiene que ser llenado"
            }
        }
    });
</script>

</body>
</html>