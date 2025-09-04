
 <!DOCTYPE html>
<html>
<head>
    <title>PHP Test</title>
</head>
<body>
<?php
echo "Hello World!<br>";
$variable = 5;
echo $variable . "<br>";
$cadena = "Hola";
echo $cadena . "<br>";
echo "<h1>$cadena</h1>";
echo "Esto es " . "string" . ", se puede escribir separados con puntos.<br>";
$variablebuleana = true;
var_dump($variablebuleana);
echo "<br>";
$variabledecimal = 3.4;
var_dump($variabledecimal);
echo "<br>";
$variableentera = 3;
var_dump($variableentera);
echo "<br>";
?>
<h1>Tipo de objeto</h1>
<?php
class Coche {
    public $ruedas;
    public $color;
    public $motor;
    function __construct() {
        $this->ruedas = 4;
        $this->color = "";
        $this->motor = 1600;
    }
}

$automovil = new Coche();
echo "Ruedas: " . $automovil->ruedas . "<br>";
echo "Color: " . $automovil->color . "<br>";
echo "Motor: " . $automovil->motor . "<br>";

echo "<h1>variables null </h1>";
$x = null;
var_dump($x);
echo "<br>";
?>
</body>
</html>