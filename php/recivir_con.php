<html>
    <body>
        <?php
        if (isset($_POST['nombre']) && isset($_GET['email'])) {
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
        } else {
            echo "No se han recibido datos.";
        }
?>
hola: <?php echo $nombre; ?><br>
tu email es: <?php echo $email ; ?>
</body> 
</html>