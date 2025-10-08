

<div id="publicacion1">
  <!-- Encabezado: nombre y fechas -->
  <div class="cabecera-publicacion">
    <h3 class="nombre-usuario"><?=$Nom?> <?=$Ape?></h3>
    <?php if(!empty($FechaCreacion) && $FechaCreacion != '0000-00-00 00:00:00'): ?>
      <p class="fecha">Publicado: <?=$FechaCreacion?></p>
    <?php endif; ?>
    <?php if(!empty($FechaEdicion) && $FechaEdicion != '0000-00-00 00:00:00'): ?>
      <p class="fecha">Editado: <?=$FechaEdicion?></p>
    <?php endif; ?>
  </div>

  <!-- Texto de la publicación -->
  <div class="contenido-publicacion">
    <p><?=nl2br($Texto)?></p>
  </div>

  <!-- Archivo adjunto (imagen, pdf o descarga) -->
  <?php if ($archivoEncontrado): ?>
    <div class="archivo-publicacion">
      <?php
        $extension = strtolower(pathinfo($archivoEncontrado, PATHINFO_EXTENSION));
        if (in_array($extension, ["jpg", "jpeg", "png", "gif", "webp"])) {
          echo "<img src='$archivoEncontrado' alt='Archivo adjunto'>";
        } elseif ($extension === "pdf") {
          echo "<embed src='$archivoEncontrado' type='application/pdf' width='100%' height='300'>";
        } else {
          echo "<a href='$archivoEncontrado' download>Descargar archivo</a>";
        }
      ?>
    </div>
  <?php endif; ?>

  <!-- Botones de edición/eliminación -->
  <?php if($fila3['Informacion_CI'] == $User): ?>
    <div class="enlaces">
      <a href="editarpublicacion.php?ID_publicacion=<?= $ID_publicacion?>" class="editar">Editar</a>
      <a href="eliminarpublicacion.php?ID_publicacion=<?= $ID_publicacion?>" class="eliminar">Eliminar publicación</a>
    </div>
  <?php endif; ?>
</div>
/* Contenedor general de todas las publicaciones */
.Publicaciones {
  max-width: 800px;
  margin: 0 auto;
  padding: 20px;
}

/* Tarjeta de cada publicación */
#publicacion1 {
  background: #fff;
  border-radius: 12px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
  margin-bottom: 30px;
  padding: 20px;
  transition: box-shadow 0.3s ease;
}

#publicacion1:hover {
  box-shadow: 0 6px 20px rgba(0, 0, 0, 0.12);
}

/* Nombre del usuario */
.nombre-usuario {
  font-size: 18px;
  font-weight: 700;
  color: #1a1a1a;
  margin-bottom: 5px;
}

/* Fechas */
#publicacion1 .fecha {
  color: #999;
  font-size: 13px;
  margin-bottom: 5px;
}

/* Texto de la publicación */
.contenido-publicacion p {
  font-size: 16px;
  color: #333;
  margin-top: 15px;
  white-space: pre-wrap; /* Soporta saltos de línea */
}

/* Estilo para imagen y archivo */
.archivo-publicacion {
  margin-top: 20px;
}

.archivo-publicacion img,
.archivo-publicacion embed {
  border-radius: 8px;
  max-width: 100%;
  height: auto;
  box-shadow: 0 2px 6px rgba(0,0,0,0.1);
}

/* Botones */
.enlaces {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  gap: 10px;
  margin-top: 20px;
}

#publicacion1 a.editar,
#publicacion1 a.eliminar {
  background-color: #f1f3f4;
  border-radius: 6px;
  color: #1a73e8;
  padding: 10px 16px;
  text-decoration: none;
  font-size: 14px;
  transition: background-color 0.2s ease, transform 0.2s ease;
}

#publicacion1 a.editar:hover,
#publicacion1 a.eliminar:hover {
  background-color: #e0e0e0;
  transform: scale(1.03);
}

/* Descargar archivo */
#publicacion1 a[download] {
  display: inline-block;
  background-color: #f1f3f4;
  color: #333;
  border-radius: 6px;
  padding: 10px 15px;
  text-decoration: none;
  margin-top: 10px;
  transition: background-color 0.3s ease;
}

#publicacion1 a[download]:hover {
  background-color: #e0e0e0;
}
