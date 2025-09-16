<?php
require_once 'config/database.php'; 
session_start();
$username = trim($_POST['username'] ?? '');
$password = trim($_POST['password'] ?? '');
if ($username === '' || $password === '') {
    header('Location: index.php?alert=1'); 
    exit;
}
$query = "SELECT id_user, username, password FROM usuarios WHERE username = $1 LIMIT 1";
$result = pg_query_params($conn, $query, [$username]);
if ($result && ($user = pg_fetch_assoc($result))) {
    if (md5($password) === $user['password']) {
        $_SESSION['id_user'] = $user['id_user'];
        $_SESSION['username'] = $user['username'];
        header('Location: mind.php'); 
        exit;
    } else {
        header('Location: index.php?alert=2'); 
        exit;
    }
} else {
    header('Location: index.php?alert=3'); 
    exit;
}
?>
