<h1>procesar formulario dentro de un mismo archivo</h1>
<html>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre">
            <input type="submit" value="Enviar">
        </form>
        <?php
        if($_SERVER["REQUEST_METHOD"] == "GET"){
            $nombre = $_GET["nombre"];
            echo "Hola, " . htmlspecialchars($nombre) . "!";
            if (empty($nombre)) {
                echo "El campo nombre está vacío.";
            }   else {
                echo "El campo nombre tiene el valor: " . htmlspecialchars($nombre);
            }
        }
        ?>
    </body>
    </html> 