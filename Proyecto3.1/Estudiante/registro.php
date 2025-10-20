<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<style>
    .body-registro {
    display: grid;
    grid-template-rows: 1fr;
    grid-template-columns: 30% 70%;
    grid-template-areas:"z registro";
    background-color: #bfc3c3;
    font-family: "Open Sans", sans-serif;
    color: white;
    margin: 0px;
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
    margin-top:10%;
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
    text-align: center;
}

#boton {
    background-color: #059a4b;
    color: white;
    text-align: center;
    width:50%;
}

/* Hover para botón principal */
#Boton:hover {
    background-color: #2C3E50;
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
    top: 30px;
    left: 30px;
    text-align: center;
    margin-top: 15%;
    grid-area:z;
    display: flex;
    flex-direction: column; /* Esto apila los elementos verticalmente */
    align-items: center;     /* Centra horizontalmente dentro del flex */
    gap: 10px;               /* Espacio entre elementos (opcional) */
}

/* Estilos individuales, sin usar position si no es necesario */

#x {
    width: 200px; /* Ajusta según el tamaño deseado */
    height: auto;
}

#y {
    color: #00439b;
    margin: 0;
}

#k {
    color: #2C3E50;
    margin: 0;
}

/* Responsive */
@media (max-width: 700px) {
    .campo {
        width: 100%;
    }

    form {
        width: 90%;
    }
    .body-registro {
    display: grid;
    grid-template-rows: 30% 70%;
    grid-template-columns: 1fr;
    grid-template-areas:"z"
                        "registro";
  }
}



</style>
<body class="body-registro">
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
          <input type="number" name="CI" placeholder="Ingresa tu cédula de identidad">
        </div>
      </div>

      <!-- Botones -->
      <input type="submit" id="boton" value="Crear cuenta">
      <input onclick="window.location.href='/grupo-3/Proyecto3.1/Estudiante/iniciarsesion.php'" id="Boton" value="Iniciar Sesión">
    </div>
  </center>
</form>
<div id="z">
    <img src="/grupo-3/Proyecto3.1/Imagenes/logo.png" id="x">

    <h2 id="y">FEDERICO AGUILO</h2>

    <p id="k">unidad educativa</p>
</div>
<script>
    $("#registro").validate({
        rules:{
            Nombres:{
                required:true,
                minlength:5,
                maxlength:45
            },
            Apellidos:{
                required:true,
                minlength:5,
                maxlength:45
            },
            Curso:{
                required:true,
                minlength:5,
                maxlength:10
            },
            Direccion:{
                required:true,
                minlength:5,
                maxlength:45
            },
            CI:{
                required:true,
                number:true,
                minlength:5
            },
            Telefono:{ 
                required:true,
                number:true,
                minlength:8,
                maxlength:8

            },
            Rude:{ 
                required:true,
                number:true,
                minlength:5
            },
            Fechadenacimiento:{
                required:true
            }
        },
        messages:{
            Nombres:{
                required:"este campo tiene que ser llenado",
                minlength:"El minimo es de 5 letras",
                maxlength:"El maximo es el 45 letras"
            },
            Apellidos:{
                required:"este campo tiene que ser llenado",
                minlength:"El minimo es de 5 letras",
                maxlength:"El maximo es el 45 letras"
            },
            Curso:{
                required:"este campo tiene que ser llenado",
                minlength:"El minimo es de 5 letras",
                maxlength:"El maximo es el  letras"
            },
            Direccion:{
                required:"este campo tiene que ser llenado",
                minlength:"El minimo es de 5 letras",
                maxlength:"El maximo es el 45 letras"
            },
            CI:{
                required:"este campo tiene que ser llenado solo numeros ",
                number:"el campo solo tiene que llenado con numeros",
                minlength:"El minimo es de 5 letras"
            },
            Rude:{
                required:"este campo tiene que ser llenado",
                number:"el campo solo tiene que llenado con numeros",
                minlength:"El minimo es de 5 letras"
            },
            Fechadenacimiento:{
                required:"este campo tiene que ser llenado solo numeros "
            },
            Telefono:{
                required:"este campo tiene que ser llenado solo numeros ",
                number:"el campo solo tiene que llenado con numeros",
                minlength:"El minimo es de 8 numeros",
                maxlength:"El maximo es el 8 numeros"
            }
        }
    });
</script>
<script>
    document.getElementById('registro').addEventListener('submit', function(e) {
    e.preventDefault(); // Evita que el formulario se envíe automáticamente

    if ($("#registro").valid()) {
            Swal.fire({
                title: '¿Estás seguro?',
                text: "Deseas crear tu cuenta",
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
        }
    
});
</script>

</body>
</html>