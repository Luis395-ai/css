<?php
// modificar.php - pagina de edicion de contactos
include("conexion.php");
// verifica que se haya enviado el id del contacto
if (!isset($_POST['id'])) {
    echo "Error: No se recibió el ID del contacto.";
    echo "<br><a href='mostrar_contacto.php'>Volver al listado</a>";
    exit;
}
// convierte el id a entero para mayor seguridad
$id = intval($_POST['id']);
// consulta el contacto en la base de datos
$query = "SELECT * FROM contactos WHERE id=$id";
$resultado = pg_query($conexion, $query);
// verifica si se encontro el contacto
if (!$resultado || pg_num_rows($resultado) == 0) {
    echo "Error: No se encontro el contacto.";
    echo "<br><a href='mostrar_contacto.php'>Volver al listado</a>";
    exit;
}
// obtiene los datos del contacto
$fila = pg_fetch_assoc($resultado);
// funcion para mostrar valores de forma segura
function mostrarValor($valor) {
    return htmlspecialchars($valor ?? '');
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Modificar Contacto</title>
    <link rel="stylesheet" href="estilo_contactos.css">
    <script>
        function validarFormulario() {
            // valida el formulario antes de enviarlo, const sirve para declarar variables que no cambian
            const nombreInput = document.getElementById('nombre').value.trim();
            const telefonoInput = document.getElementById('telefono').value.trim();
            // expresion para validar
            const regexSoloLetras = /^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+$/;
            const regexSoloNumeros = /^[0-9]+$/;
            // validacion del nombre
            if (!regexSoloLetras.test(nombreInput)) {
                alert('El nombre solo debe contener letras.');
                return false;
            }
            // validacion del telefono
            if (!regexSoloNumeros.test(telefonoInput)) {
                alert('El telefono solo debe contener numeros.');
                return false;
            }

            return true;
        }
    </script>
</head>
<body>
    <!-- menu de navegacion -->
    <nav>
        <a href="index.php">Inicio</a>
        <a href="mostrar_contacto.php">Contactos</a>
    </nav>
    <main>
        <h1>Modificar Contacto</h1>
        <!-- formulario para modificar, permite editar contacto que ya existe -->
        <form action="procesar.php" method="POST" onsubmit="return validarFormulario();">
            <!-- campos ocultos para la accion y el id, para identificar la accion a realizar en el servidor-->
            <input type="hidden" name="accion" value="modificar">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <label for="nombre">Nombre y Apellido:</label>
            <input type="text" id="nombre" name="nombre" 
                   value="<?php echo mostrarValor($fila['nombre']); ?>" 
                   placeholder="Ingresa tu nombre completo" required>
            
            <label for="telefono">Telefono:</label>
            <input type="text" id="telefono" name="telefono" 
                   value="<?php echo mostrarValor($fila['telefono']); ?>" 
                   placeholder="Ingresa tu número" required>
            
            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" 
                      placeholder="Escribe tu mensaje aquí" required><?php echo mostrarValor($fila['mensaje']); ?></textarea>
            
            <button type="submit">Guardar Cambios</button>
        </form>
        
        <br>
        <a href="mostrar_contacto.php">Volver al listado de contactos</a>
    </main>
</body>
</html>