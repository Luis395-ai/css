<?php
$servername = "localhost";
$username   = "postgres";
$password   = "1";
$dbname     = "sysweb";
$port       = "5433";

$conn_string = "host=$servername port=$port dbname=$dbname user=$username password=$password";
$conn = pg_connect($conn_string);

if (!$conn) {
    die("Error: No se pudo conectar a la base de datos en $servername:$port. Verifica que PostgreSQL esté corriendo y las credenciales sean correctas.");
}
?>