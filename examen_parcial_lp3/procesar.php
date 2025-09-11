<?php
include("conexion.php");
// determinar la accion a realizar
$accion = $_POST['accion'] ?? 'crear';
if ($accion === 'crear') {
    // crear nuevo contacto
    $nombre = isset($_POST['nombre']) ? trim($_POST['nombre']) : '';
    $telefono = isset($_POST['telefono']) ? trim($_POST['telefono']) : '';
    $mensaje = isset($_POST['mensaje']) ? trim($_POST['mensaje']) : '';
    // validar campos
    if ($nombre === '' || $telefono === '' || $mensaje === '') {
        echo "Todos los campos son obligatorios. Por favor completa todos los campos.";
        echo "<br><a href='contactos.php'>Volver al formulario</a>";
        exit;
    }
    // escapar valores para evitar inyeccion SQL
    $nombre_safe = pg_escape_string($conexion, $nombre);
    $telefono_safe = pg_escape_string($conexion, $telefono);
    $mensaje_safe = pg_escape_string($conexion, $mensaje);
    // insertar en la base de datos
    $query = "INSERT INTO contactos (nombre, telefono, mensaje) VALUES ('$nombre_safe', '$telefono_safe', '$mensaje_safe')";
    $resultado = pg_query($conexion, $query);
    if (!$resultado) {
        echo "Error al guardar los datos: " . pg_last_error($conexion);
        exit;
    }
    // mostrar mensaje de confirmación
    ?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Contacto Guardado</title>
      
    </head>
    <body>
        <div class="mensaje">
            <h1>Bienvenido, <?php echo htmlspecialchars($nombre); ?></h1>
            <p>Tu mensaje fue: <?php echo htmlspecialchars($mensaje); ?></p>
            <a href="contactos.php">Volver al formulario</a>
        </div>
    </body>
    </html>
    <?php
} elseif ($accion === 'modificar') {
    // modificar contacto existente, limpiaa datos que vienen de un formulario html cuando queres modificar un contacto.
    $id = isset($_POST['id']) ? intval($_POST['id']) : 0;
    $nombre = isset($_POST['nombre']) ? trim($_POST['nombre']) : '';
    $telefono = isset($_POST['telefono']) ? trim($_POST['telefono']) : '';
    $mensaje = isset($_POST['mensaje']) ? trim($_POST['mensaje']) : '';
    if ($id === 0 || $nombre === '' || $telefono === '' || $mensaje === '') {
        echo "Datos incompletos. No se puede modificar el contacto.";
        echo "<br><a href='mostrar_contacto.php'>Volver al listado</a>";
        exit;
    }
    // escapar valores,limpia los datos antes de usar en la bd
    $nombre_safe = pg_escape_string($conexion, $nombre);
    $telefono_safe = pg_escape_string($conexion, $telefono);
    $mensaje_safe = pg_escape_string($conexion, $mensaje);
    // actualizar en la base de datos
    $query = "UPDATE contactos SET nombre='$nombre_safe', telefono='$telefono_safe', mensaje='$mensaje_safe' WHERE id=$id";
    $resultado = pg_query($conexion, $query);
    if (!$resultado) {
        echo "Error al actualizar los datos: " . pg_last_error($conexion);
        exit;
    }
    // redirigir al listado de contactos
    header("Location: mostrar_contacto.php?mensaje=Contacto actualizado correctamente");
    exit;
} elseif ($accion === 'eliminar') {
    // eliminar contacto, verificar si existe el id en el formulario
    $id = isset($_POST['id']) ? intval($_POST['id']) : 0;
    if ($id === 0) {
        echo "ID de contacto no válido.";
        echo "<br><a href='mostrar_contacto.php'>Volver al listado</a>";
        exit;
    }
    // eliminar de la base de datos
    $query = "DELETE FROM contactos WHERE id=$id";
    $resultado = pg_query($conexion, $query);
    if (!$resultado) {
        echo "Error al eliminar el contacto: " . pg_last_error($conexion);
        exit;
    }
    // redirigir al listado de contactos
    header("Location: mostrar_contacto.php?mensaje=Contacto eliminado correctamente");
    exit;
}
?>