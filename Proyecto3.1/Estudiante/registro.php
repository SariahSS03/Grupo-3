<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .body {
    background-color: #bfc3c3;
    font-family: "Open Sans", sans-serif;
    color: white;
}

form {
    background-color: white;
    padding: 20px;
    border-radius: 40px;
    margin: 10px auto 50px auto;
    width: 780px;
    display: flex;
    flex-direction: column;
    color: #2C3E50;
}

/* Contenedor de todos los campos */
.campos-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 20px;
    grid-area:registro;
}

/* Cada campo ocupa el 48% */
.campo {
    width: 48%;
}

/* Inputs ocupan todo el ancho del campo */
.campo input {
    width: 100%;
    height: 30px;
    border-radius: 10px;
    padding: 5px;
    font-size: 16px;
}

label {
    font-size: 18px;
    display: block;
    margin-bottom: 5px;
}

/* Botones */
#Boton, #boton {
    width: auto;
    margin-top: 20px;
    padding: 10px 20px;
    font-size: 16px;
    border-radius: 10px;
    border: none;
    cursor: pointer;
}

#Boton {
    background-color: #00439b;
    color: white;
}

#boton {
    background-color: #059a4b;
    color: white;
}

/* Hover para botón principal */
#Boton:hover {
    background-color: #2C3E50;
}

/* Responsive */
@media (max-width: 700px) {
    .campo {
        width: 100%;
    }

    form {
        width: 90%;
    }
    body {
    grid-template-rows: auto auto auto auto;
    grid-template-columns: 1fr;
    grid-template-areas:
      "z "
      "registro";
  }
}

img {
    width: 200px;
    height: 115px;
    transition: transform 0.3s;
}

img:hover {
    transform: scale(1.2) rotate(360deg);
    cursor: pointer;
}

#z {
    position: absolute;
    top: 30px;
    left: 30px;
    text-align: center;
    grid-area:z;
}

#x {
    position: relative;
    top: 10%;
}

#y {
    position: relative;
    left: 21%;
    bottom: 97px;
    color: #00439b;
}

#k {
    position: relative;
    bottom: 117px;
    left: 15%;
    color: #2C3E50;
}


</style>
<body>
    <form action="basededatos.php" method="post" id="registro">
  <center>
    <div class="regi">
      <h2>REGÍSTRATE</h2>

      <div class="campos-container">
        <div class="campo">
          <label for="">Nombres</label>
          <input type="text" name="Nombres" placeholder="Ingresa tus nombres">
        </div>

        <div class="campo">
          <label for="">Apellidos</label>
          <input type="text" name="Apellidos" placeholder="Ingresa tus apellidos">
        </div>

        <div class="campo">
          <label for="">Teléfono</label>
          <input type="text" name="Telefono" placeholder="Ingresa tu teléfono">
        </div>

        <div class="campo">
          <label for="">Curso</label>
          <input type="text" name="Curso" placeholder="Ej: 1ro B">
        </div>

        <div class="campo">
          <label for="">Fecha de nacimiento</label>
          <input type="date" name="Fechadenacimiento">
        </div>

        <div class="campo">
          <label for="">Dirección</label>
          <input type="text" name="Direccion" placeholder="Ingresa tu domicilio">
        </div>

        <div class="campo">
          <label for="">Rude</label>
          <input type="number" name="Rude" placeholder="Ingresa tu RUDE correctamente">
        </div>

        <div class="campo">
          <label for="">C.I</label>
          <input type="text" name="CI" placeholder="Ingresa tu cédula de identidad">
        </div>
      </div>

      <!-- Botones -->
      <input onclick="window.location.href='iniciarsesion.php'" id="Boton" value="Iniciar Sesión">
      <input type="submit" id="boton" value="Crear cuenta">
    </div>
  </center>
</form>
<div id="z">
    <img src="../Imagenes/logo.png" id="x">

    <h2 id="y">FEDERICO AGUILO</h2>

    <p id="k">unidad educativa</p>
</div>
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