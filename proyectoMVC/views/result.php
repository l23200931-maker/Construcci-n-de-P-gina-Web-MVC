<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>

    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>

    <div class="contenedor">

        <h1>Mensaje Enviado Correctamente</h1>

        <p><strong>Nombre:</strong> <?php echo $nombre; ?></p>

        <p><strong>Correo:</strong> <?php echo $correo; ?></p>

        <p><strong>Teléfono:</strong> <?php echo $telefono; ?></p>

        <p><strong>Mensaje:</strong> <?php echo $mensaje; ?></p>

        <p><strong>Fecha:</strong> <?php echo $fecha; ?></p>

        <p><strong>Hora:</strong> <?php echo $hora; ?></p>

        <a href="index.php" class="btn-regresar">Regresar al formulario</a>

    </div>

</body>
</html>