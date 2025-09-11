<?php
//listado de contactos
include("conexion.php");
// mostrar mensaje de éxito si existe
$mensaje = $_GET['mensaje'] ?? '';
// traer todos los contactos ordenados por id
$query = "SELECT * FROM contactos ORDER BY id";
$resultado = pg_query($conexion, $query);
// verificar si hay errores
if (!$resultado) {
    echo "Error al ejecutar la consulta: " . pg_last_error($conexion);
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contactos Registrados</title>
    <!-- estilos interno para la tabla -->
    <style>
        /* estilo general */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }

        /* mensaje de exito */
        .mensaje-exito {
            background-color: #dff0d8;
            color: #3c763d;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 15px;
        }

        /* tabla de contactos */
        table {
            border-collapse: collapse;
            width: 100%;
            background-color: #fff;
        }

        th, td {
            border: 1px solid #15e026;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #0ce943;
            color: #fff;
        }

        /* link y botones  */
        a, button {
            text-decoration: none;
            padding: 5px 10px;
            margin: 2px;
            border-radius: 4px;
            cursor: pointer;
        }

        a {
            background-color: #0df318ff;
            color: #fff;
            transition: background 0.3s;
        }

        a:hover {
            background-color: #0be91dff;
        }

        button {
            background-color: #8b4fd9;
            color: #fff;
            border: none;
            transition: background 0.3s;
        }

        button.btn-eliminar {
            background-color: #ea2afcff;
        }

       

        /* formulario en linea para botones de accion */
        form {
            display: inline;
        }
    </style>
</head>
<body>
    <h1>Contactos Registrados</h1>
    <?php if ($mensaje): ?>
    <div class="mensaje-exito">
        <?php echo htmlspecialchars($mensaje); ?>
    </div>
    <?php endif; ?>
    <!--tabla de contactos-->
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Teléfono</th>
            <th>Mensaje</th>
            <th>Acciones</th>
        </tr>
       <!--recorre el resultado y crea una fila en la tabla por cada registro-->
        <?php while($fila = pg_fetch_assoc($resultado)): ?>
        <tr>
            <td><?php echo htmlspecialchars($fila['id'] ?? ''); ?></td>
            <td><?php echo htmlspecialchars($fila['nombre'] ?? ''); ?></td>
            <td><?php echo htmlspecialchars($fila['telefono'] ?? ''); ?></td>
            <td><?php echo htmlspecialchars($fila['mensaje'] ?? ''); ?></td>
            <td>
                <!-- boton para modificar -->
                <form action="modificar.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $fila['id'] ?? ''; ?>">
                    <button type="submit">Modificar</button>
                </form>

                <!-- boton para eliminar con confirmacion -->
                <form action="procesar.php" method="POST" onsubmit="return confirm('¿Seguro que desea eliminar este contacto?');">
                    <input type="hidden" name="id" value="<?php echo $fila['id'] ?? ''; ?>">
                    <input type="hidden" name="accion" value="eliminar">
                    <button type="submit" class="btn-eliminar">Eliminar</button>
                </form>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>

    <br>
    <!-- link para agregar un nuevo contacto -->
    <a href="contactos.php">Agregar Nuevo Contacto</a>

</body>
</html>