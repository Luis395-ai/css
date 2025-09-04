<h1>Funciones con cadena</h1>
<?php
$cadena = " Hola, soy una cadena de texto" ;
echo strlen($cadena); // Longitud de la cadena
echo "<br>";
$cadena = " Hola, soy una cadena de texto " ;
echo trim($cadena); // Elimina espacios al inicio y al final
echo "<br>";    
echo str_word_count(" Hola mundo desde php"); // Cuenta las palabras en la cadena
echo "<br>";
echo strrev($cadena); // Invierte la cadena
echo "<br>";
echo strpos("Hola desde php", "php"); // Posición de la palabra en la cadena
echo str_replace("php", "java", "Hola desde php"); // Reemplaza una palabra por otra
echo "<br>"; 
echo (pi()); // Valor de pi
echo "<br>";
echo (min(3, 5, 1, 6, -2)); // Valor mínimo
echo "<br>";
echo (max(3, 5, 1, 6, -2)); // Valor máximo
echo "<br>";
echo "<h1>variables constantes</h1>";
define("NOMBRE", "Juan");
echo NOMBRE;
echo "<br>";
define("autos", ["BMW", "Audi", "Renault"]);
echo autos[1];


?>
