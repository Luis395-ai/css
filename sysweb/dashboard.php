<?php
session_start();

// Verificar si el usuario inició sesión
if (!isset($_SESSION['id_user'])) {
    // Si no hay sesión, redirigir al login
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Sysweb</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container" style="margin-top:50px;">
        <h1>¡Bienvenido, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
        <p>Este es tu panel de usuario.</p>

        <a href="logout.php" class="btn btn-danger">Cerrar sesión</a>
    </div>
</body>
</html>
