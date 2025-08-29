<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Área tipo Classroom</title>
  <style>
    .contenedor {
      width: 400px;
      margin: 50px auto;
      border: 1px solid #ccc;
      border-radius: 6px;
      padding: 10px;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
      background-color: #fff;
    }

    textarea {
      width: 100%;
      height: 50px;
      resize: vertical;
      padding: 8px;
      font-size: 14px;
    }

    .botones {
      margin-top: 10px;
      display: none;
    }

    .botones button {
      margin-right: 10px;
    }

    .activo .botones {
      display: block;
    }
  </style>
</head>
<body>

<div class="contenedor" id="areaPublicacion">
  <textarea placeholder="Escribe algo..."></textarea>
  <div class="botones">
    <button>Publicar</button>
    <button type="button" onclick="cancelar()">Cancelar</button>
  </div>
</div>

<script>
  const contenedor = document.getElementById('areaPublicacion');
  const textarea = contenedor.querySelector('textarea');

  // Mostrar los botones cuando haces clic en el textarea
  textarea.addEventListener('focus', () => {
    contenedor.classList.add('activo');
  });

  // Ocultar los botones si haces clic fuera del contenedor
  document.addEventListener('click', (e) => {
    if (!contenedor.contains(e.target)) {
      contenedor.classList.remove('activo');
    }
  });

  // Función para cancelar
  function cancelar() {
    textarea.value = '';
    contenedor.classList.remove('activo');
  }
</script>

</body>
</html>