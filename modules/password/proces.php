<?php 
session_start();
require "../../config/database.php";
if (empty($_SESSION['username']) && empty($_SESSION['id_user'])) {
    echo "<meta http-equiv='refresh' content='0; url=../../index.php?alert=1'>";
    exit;
}

if (isset($_POST['Guardar'])) {
    $id_user = $_SESSION['id_user'];
    $old_pass = trim($_POST['old_pass'] ?? '');
    $new_pass = trim($_POST['new_pass'] ?? '');
    $retype_pass = trim($_POST['retype_pass'] ?? '');
    if ($old_pass == '' || $new_pass == '' || $retype_pass == '') {
        header("Location: ../../mind.php?module=password&alert=1");
        exit;
    }
    if ($new_pass !== $retype_pass) {
        header("Location: ../../mind.php?module=password&alert=2");
        exit;
    }
    $query = "SELECT password FROM usuarios WHERE id_user = $1 LIMIT 1";
    $result = pg_query_params($conn, $query, [$id_user]);

    if ($result && ($user = pg_fetch_assoc($result))) {
        if (md5($old_pass) !== $user['password']) {
            header("Location: ../../mind.php?module=password&alert=1");
            exit;
        }
        $new_pass_md5 = md5($new_pass);
        $update_query = "UPDATE usuarios SET password = $1 WHERE id_user = $2";
        $update_result = pg_query_params($conn, $update_query, [$new_pass_md5, $id_user]);
        if ($update_result) {
            header("Location: ../../mind.php?module=password&alert=3");
            exit;
        } else {
            header("Location: ../../mind.php?module=password&alert=4");
            exit;
        }
    } else {
        header("Location: ../../mind.php?module=password&alert=1");
        exit;
    }
}
?>
