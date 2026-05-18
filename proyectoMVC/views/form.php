<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario MVC</title>

    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>

    <div class="contenedor">

        <h1>Formulario de Contacto</h1>

        <?php
        if(isset($error)){
            echo "<p class='error'>$error</p>";
        }
        ?>

        <form method="POST">

            <input type="text" name="nombre" placeholder="Nombre completo" required>

            <input type="email" name="correo" placeholder="Correo electrónico" required>

            <input type="text" name="telefono" placeholder="Teléfono" required>

            <textarea name="mensaje" placeholder="Escribe tu mensaje" required></textarea>

            <button type="submit">Enviar</button>

        </form>

    </div>

</body>
</html>