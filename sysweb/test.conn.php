<?php
$conn = @pg_connect("host=localhost port=5433 dbname=sysweb user=postgres password=1");
if (!$conn) {
    die("No se pudo conectar a PostgreSQL");
} else {
    echo "Conexión exitosa!";
}
?>
