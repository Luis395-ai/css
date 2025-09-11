<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contacto - Examen Parcial LP3</title>
    <link rel="stylesheet" href="estilo_contactos.css">
    <script>
        /**
         * valida el formulario antes de enviarlo.
         * nombre: solo letras y espacios.
         * telefono: solo numeros.
         */
        function validarFormulario() {
            const nombreInput = document.getElementById('nombre').value.trim();
            const telefonoInput = document.getElementById('telefono').value.trim();

            // Expresion para validar
            const regexSoloLetras = /^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+$/;
            const regexSoloNumeros = /^[0-9]+$/;

            // Validacion del nombre
            if (!regexSoloLetras.test(nombreInput)) {
                alert('El nombre solo debe contener letras.');
                return false; // Previene el envio del formulario
            }

            // Validacion del telefono
            if (!regexSoloNumeros.test(telefonoInput)) {
                alert('El telefono solo debe contener numeros.');
                return false; 
            }

            // tpdo esta correcto, se puede enviar
            return true;
        }
    </script>
</head>
<body>
    <!-- Menu de navegacion -->
    <nav>
        <a href="index.php">Inicio</a>
        <a href="contactos.php">Contactos</a>
    </nav>

    <main>
        <h1>Formulario de Contacto</h1>

        <!-- formulario con validacion js y html5 -->
        <form action="procesar.php" method="POST" onsubmit="return validarFormulario();">
            
            <label for="nombre">Nombre y Apellido:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Ingresa tu nombre completo" required>
            
            <label for="telefono">Telefono:</label>
            <input type="text" id="telefono" name="telefono" placeholder="Ingresa tu numero" required>
            
            <label for="mensaje">Mensaje:</label>
    <!--text area para comentarios-->
            <textarea id="mensaje" name="mensaje" placeholder="Escribi tu mensaje aca" required></textarea>
            
            <button type="submit">Enviar</button>
        </form>
    </main>
</body>
</html>
