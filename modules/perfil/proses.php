<?php
session_start();
require_once __DIR__ . "/../../config/database.php";

if (empty($_SESSION['username']) && empty($_SESSION['password'])) {
    echo "<meta http-equiv='refresh' content='0; url=index.php?alert=3'>";
    exit;
} else {
    if (isset($_GET['act']) && $_GET['act'] == 'update') {
        if (isset($_POST['Guardar'])) {
            if (isset($_POST['id_user'])) {
                $id_user   = trim($_POST['id_user']);
                $username  = pg_escape_string($conn, trim($_POST['username']));
                $name_user = pg_escape_string($conn, trim($_POST['name_user']));
                $email     = pg_escape_string($conn, trim($_POST['email']));
                $telefono  = pg_escape_string($conn, trim($_POST['telefono']));

                $name_file   = $_FILES['foto']['name'];
                $tamano_file = $_FILES['foto']['size'];
                $tmp_file    = $_FILES['foto']['tmp_name'];

                $allowed_extensions = ['jpg', 'jpeg', 'png'];
                $path_file = "../../images/user/" . $name_file;

                $file = explode(".", $name_file);
                $extension = strtolower(array_pop($file));

                if (empty($name_file)) {
                    $query = "UPDATE usuarios SET username = '$username',
                                                 name_user = '$name_user',
                                                 email = '$email',
                                                 telefono = '$telefono'
                              WHERE id_user = '$id_user'";

                    $result = pg_query($conn, $query);

                    if ($result) {
                        header("Location: ../../mind.php?module=perfil&alert=1");
                        exit;
                    } else {
                        die('Error: ' . pg_last_error($conn));
                    }
                } else {
                    if (in_array($extension, $allowed_extensions)) {
                        if ($tamano_file < 1000000) {
                            if (move_uploaded_file($tmp_file, $path_file)) {
                                $query = "UPDATE usuarios SET username = '$username',
                                                             name_user = '$name_user',
                                                             email = '$email',
                                                             telefono = '$telefono',
                                                             foto = '$name_file'
                                          WHERE id_user = '$id_user'";

                                $result = pg_query($conn, $query);

                                if ($result) {
                                    header("Location: ../../mind.php?module=perfil&alert=1");
                                    exit;
                                } else {
                                    die('Error: ' . pg_last_error($conn));
                                }
                            } else {
                                die('Error uploading file.');
                            }
                        } else {
                            header("Location: ../../mind.php?module=perfil&alert=2");
                            exit;
                        }
                    } elseif (!in_array($extension, $allowed_extensions)) {
                        header("Location: ../../mind.php?module=perfil&alert=3");
                        exit;
                    } else {
                        header("Location: ../../mind.php?module=perfil&alert=4");
                        exit;
                    }
                }
            }
        }
    }
}
?>
