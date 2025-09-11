<?php 
// Conexion con la base de datos postgresql
$servidor = "localhost";
$usuario = "postgres";
$password = "1";
$dbname = "introduccion";
$puerto = "5433";


$conexion = pg_connect("host=$servidor port=$puerto dbname=$dbname user=$usuario password=$password");

if (!$conexion) {
    echo "Error en la conexion";
} else {
    echo "Conexion exitosa a postgresql";
}
?>