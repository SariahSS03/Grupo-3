<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Oswald:wght@200..700&family=Story+Script&display=swap" rel="stylesheet">
  <style>
    .body-establecimiento {
      margin: 0;
      font-family: Arial, sans-serif;
      background: linear-gradient(90deg, #589ddd, #6600ff);
      text-align: center;
    }

    h1 {
      margin: 20px 0;
      font-size: 50px;
      color: #414141;
      margin-top: 100px;
      transition: transform 0.3s ease;
      transition: color 0.3s ease;
    }
    h1:hover{
    transform: scale(1.1);
    color: rgb(2, 1, 105);
    }
    .galeria {
      display: grid;
      grid-template-columns: repeat(2, 1fr); 
      grid-auto-rows: auto; 
      gap: 15px;
      width: fit-content; 
      margin: 100px auto 0 auto; 
      justify-items: center; 
    }

    .galeria img {
      width: 500px; 
      height: auto;
      border-radius: 8px;
      opacity: 0;
      box-shadow: 0 2px 6px rgba(10, 10, 10, 0.2);
      transition: transform 0.3s ease;
    }
    .galeria img:hover{
        transform: scale(1.1);

    }
    .desde-izquierda {
      animation: entrarIzquierda 1s ease forwards;
       
    }
   
    .desde-derecha {
      animation: entrarDerecha 1s ease forwards;
    }

    @keyframes entrarIzquierda {
      from { transform: translateX(-100%); opacity: 0; }
      to { transform: translateX(0); opacity: 1; }
    }

    @keyframes entrarDerecha {
      from { transform: translateX(100%); opacity: 0; }
      to { transform: translateX(0); opacity: 1; }
    }


    
    @media (max-width: 768px) {
  .galeria {
    grid-template-columns: 1fr;
    margin-top: 50px;
    gap: 10px;
  }

  .galeria img {
    width: 90%; 
  }

  h1 {
    font-size: 1.5rem; 
  }
}

  </style>
</head>
<body class="body-establecimiento">
    <header>
      <?php
      include('menu.php');
      ?>
    </header>
  <h1 class="titulo">Conoce Nuestro Colegio</h1>
  <div class="galeria">
    <img src="../Imagenes/ima1.jpeg" class="desde-izquierda" alt="img1">
    <img src="../Imagenes/ima2.jpeg" class="desde-derecha" alt="img2">
    <img src="../Imagenes/ima3.jpeg" class="desde-izquierda" alt="img3">
    <img src="../Imagenes/ima4.jpeg" class="desde-derecha" alt="img4">
    <img src="../Imagenes/ima5.jpeg" class="desde-izquierda" alt="img5">
    <img src="../Imagenes/ima6.jpeg" class="desde-derecha" alt="img6">
    <img src="../Imagenes/ima7.jpeg" class="desde-izquierda" alt="img7">
    <img src="../Imagenes/ima8.jpeg" class="desde-derecha" alt="img8">
    <img src="../Imagenes/ima9.jpeg" class="desde-izquierda" alt="img9">
    <img src="../Imagenes/ima10.jpeg" class="desde-derecha" alt="img10">
    <img src="../Imagenes/ima11.jpeg" class="desde-izquierda" alt="img11">
    <img src="../Imagenes/ima12.jpeg" class="desde-derecha" alt="img12">
    <img src="../Imagenes/ima13.jpeg" class="desde-izquierda" alt="img13">
    <img src="../Imagenes/ima14.jpeg" class="desde-derecha" alt="img14">
    <img src="../Imagenes/ima15.jpeg" class="desde-izquierda" alt="img15">
    <img src="../Imagenes/ima16.jpeg" class="desde-derecha" alt="img16">
    <img src="../Imagenes/ima17.jpeg" class="desde-izquierda" alt="img17">
    <img src="../Imagenes/ima18.jpeg" class="desde-derecha" alt="img18">
    <img src="../Imagenes/ima19.jpeg" class="desde-izquierda" alt="img19">
    <img src="../Imagenes/ima20.jpeg" class="desde-derecha" alt="img20">
  </div>
  <header>
      <?php
      include('menu2.php');
      ?>
  </header>

</body>
</html>


