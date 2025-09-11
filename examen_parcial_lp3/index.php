<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Examen Parcial LP3</title>
    <!-- estilo css-->
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <!-- menu de navegacion  -->
    <nav>
        <a href="index.php">Inicio</a>
        <a href="contactos.php">Contactos</a>
    </nav>

    <!-- conexion a la base de datos -->
    <?php include("conexion.php"); ?>

    <!-- titulo prinsipal -->
    <h1>Bienvenido al examen parcial LP3</h1>

    <!-- galeria de imagenes responsive -->
    <div class="galeria">
        <img src="img/descarga.jpg" alt="descarga">
        <img src="img/descarga (1).jpg" alt="descarga 1">
        <img src="img/descarga (2).jpg" alt="descarga 2">
        <img src="img/webb-first-deep-field.sp.jpg" alt="Webb First Deep Field">
    </div>

    <!-- contenedor con efecto hover -->
    <div class="hover-div" id="hoverDiv">
        Pasa el mouse por aca para ver el efecto hover.
    </div>

    <!-- contenedor en 4 columnas-->
    <div class="columnas">
        <div class="columna">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
        <div class="columna">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
        <div class="columna">Ut enim ad minim veniam, quis nostrud exercitation ullamco.</div>
        <div class="columna">Duis aute irure dolor in reprehenderit in voluptate velit.</div>
    </div>

    <!--boton con iteraccion js-->
    <button onclick="mostrarAlerta()">Mostrar alerta</button>

    <!-- footer con los datos del desarrollador-->
    <footer>
        Desarrollador: Luis Kael | Contacto: 123456789 | 
        <a href="https://facebook.com" target="_blank">Facebook</a>
    </footer>

    <!-- script js -->
    <script src="scripts.js"></script>
    <script>
        // mensaje de bienvenida en la consola
        console.log('Mensaje desde JS: Bienvenido a mi pagina web');

        // funcion para mostrar alerta
        function mostrarAlerta() {
            alert("Hola, este es el mensaje de la alerta.");
        }
    </script>
</body>
</html>
