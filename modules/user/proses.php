<?php
ob_start(); // Para evitar "headers already sent"
session_start();
require_once __DIR__ . "/../../config/database.php";

if (empty($_SESSION['username']) && empty($_SESSION['password'])) {
    echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
    exit;
}

if ($_GET['act'] === 'insert' && isset($_POST['Guardar'])) {
    $username        = isset($_POST['username']) ? pg_escape_string($conn, trim($_POST['username'])) : '';
    $password_post   = isset($_POST['password']) ? trim($_POST['password']) : '';
    $name_user       = isset($_POST['name_user']) ? pg_escape_string($conn, trim($_POST['name_user'])) : '';
    $permisos_acceso = isset($_POST['permisos_acceso']) ? pg_escape_string($conn, trim($_POST['permisos_acceso'])) : '';

    $password = md5($password_post);

    // Generar manualmente id_user
    $result = pg_query($conn, "SELECT COALESCE(MAX(id_user), 0) + 1 AS next_id FROM usuarios");
    $row = pg_fetch_assoc($result);
    $id_user = $row['next_id'];

    $query = pg_query($conn, "INSERT INTO usuarios(id_user, username, password, name_user, permisos_acceso)
                              VALUES('$id_user', '$username', '$password', '$name_user', '$permisos_acceso')");

    if ($query) {
        header("Location: ../../mind.php?module=user&alert=1");
        exit;
    }
}

elseif ($_GET['act'] === 'update' && isset($_POST['Guardar']) && isset($_POST['id_user'])) {
    $id_user         = isset($_POST['id_user']) ? pg_escape_string($conn, trim($_POST['id_user'])) : '';
    $username        = isset($_POST['username']) ? pg_escape_string($conn, trim($_POST['username'])) : '';
    //$password_post   = isset($_POST['password']) ? trim($_POST['password']) : '';
    $name_user       = isset($_POST['name_user']) ? pg_escape_string($conn, trim($_POST['name_user'])) : '';
    $email           = isset($_POST['email']) ? pg_escape_string($conn, trim($_POST['email'])) : '';
    $telefono        = isset($_POST['telefono']) ? pg_escape_string($conn, trim($_POST['telefono'])) : '';
    $permisos_acceso = isset($_POST['permisos_acceso']) ? pg_escape_string($conn, trim($_POST['permisos_acceso'])) : '';

    $name_file   = isset($_FILES['foto']['name']) ? $_FILES['foto']['name'] : '';
    $ukuran_file = isset($_FILES['foto']['size']) ? $_FILES['foto']['size'] : 0;
    $tmp_file    = isset($_FILES['foto']['tmp_name']) ? $_FILES['foto']['tmp_name'] : '';

    $allowed_extensions = ['jpg', 'jpeg', 'png'];
    $path_file = "../../images/user/".$name_file;

    $extension = '';
    if (!empty($name_file)) {
        $file = explode(".", $name_file);
        $extension = strtolower(array_pop($file));
    }

    $set = "username='$username', name_user='$name_user', email='$email', telefono='$telefono', permisos_acceso='$permisos_acceso'";

   

    if (!empty($name_file)) {
        if (in_array($extension, $allowed_extensions)) {
            if ($ukuran_file <= 1000000) {
                if (!move_uploaded_file($tmp_file, $path_file)) {
                    header("Location: ../../mind.php?module=user&alert=5");
                    exit;
                }
                $set .= ", foto='$name_file'";
            } else {
                header("Location: ../../mind.php?module=user&alert=6");
                exit;
            }
        } else {
            header("Location: ../../mind.php?module=user&alert=7");
            exit;
        }
    }

    $query = pg_query($conn, "UPDATE usuarios SET $set WHERE id_user='$id_user'");
    if ($query) {
        header("Location: ../../mind.php?module=user&alert=2");
        exit;
    }
}

elseif ($_GET['act'] === 'on' && isset($_GET['id'])) {
    $id_user = pg_escape_string($conn, $_GET['id']);
    $query = pg_query($conn, "UPDATE usuarios SET status='activo' WHERE id_user='$id_user'");
    if ($query) {
        header("Location: ../../mind.php?module=user&alert=3");
        exit;
    }
}

elseif ($_GET['act'] === 'off' && isset($_GET['id'])) {
    $id_user = pg_escape_string($conn, $_GET['id']);
    $query = pg_query($conn, "UPDATE usuarios SET status='bloqueado' WHERE id_user='$id_user'");
    if ($query) {
        header("Location: ../../mind.php?module=user&alert=4");
        exit;
    }
}
?>
