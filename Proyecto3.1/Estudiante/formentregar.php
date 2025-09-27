<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Contenedor principal */
.formulario-entrega {
    max-width: 600px;
    margin: 50px auto;
    padding: 30px;
    background-color: #fefefe;
    border-radius: 12px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

/* Título */
.formulario-entrega h2 {
    text-align: center;
    margin-bottom: 25px;
    font-size: 24px;
    color: #2c3e50;
}

/* Etiquetas */
.formulario-entrega label {
    display: block;
    margin-bottom: 6px;
    font-weight: 500;
    color: #333;
}

/* Campos de texto y archivo */
.formulario-entrega input[type="text"],
.formulario-entrega textarea,
.formulario-entrega input[type="file"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 8px;
    font-size: 15px;
}

/* Textarea específico */
.formulario-entrega textarea {
    resize: vertical;
    min-height: 100px;
}

/* Botón */
.btn-enviar {
    background-color: #00439b;
    color: white;
    border: none;
    padding: 12px 20px;
    font-size: 16px;
    border-radius: 10px;
    cursor: pointer;
    width: 100%;
    transition: background-color 0.3s;
}

.btn-enviar:hover {
    background-color: #2c3e50;
}
@media (max-width: 600px) {
    .formulario-entrega {
        margin: 20px;
        padding: 20px;
    }

    .formulario-entrega h2 {
        font-size: 20px;
    }

    .btn-enviar {
        font-size: 15px;
        padding: 10px;
    }
}
    </style>
</head>
<body>
    <div class="formulario-entrega">
    <h2>Entregar tarea</h2>
    <form action="procesar_entrega.php" method="post" enctype="multipart/form-data">
        
        <label for="titulo">Título de la entrega</label>
        <input type="text" id="titulo" name="titulo" placeholder="Ej. Mi informe final" required>

        <label for="comentario">Comentario (opcional)</label>
        <textarea id="comentario" name="comentario" placeholder="Agrega algún comentario..."></textarea>

        <label for="archivo">Archivo a subir</label>
        <input type="file" id="archivo" name="archivo" required>

        <input type="submit" value="Enviar tarea" class="btn-enviar">
    </form>
</div>

</body>
</html>