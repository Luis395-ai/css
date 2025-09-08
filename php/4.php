<h1>Estructura for</h1>
<?php
for ($i = 0; $i <= 10; $i++) {
    echo "El valor de i es: $i <br>";
}
echo "<h1>estructura foreach</h1>";
$colores = array("rojo", "verde", "azul", "amarillo
");
foreach ($colores as $color) {
    echo "El color es: $color <br>";
}   
echo "<h1>para reccorrer matrices</h1>";
$edades = array("Juan" => 25, "María" => 30, "Pedro" => 35);
foreach ($edades as $nombre => $edad) {
    echo "$nombre tiene $edad años <br>";
}
echo "<h1> breack para parar un ciclo</h1>";
for ($i = 0; $i <= 10; $i++) {
    if ($i == 5) {
        break;
    }
    echo "El valor de i es: $i <br>";
}
?>