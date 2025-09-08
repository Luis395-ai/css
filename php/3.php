<h1> estructura while </h1>
<?php
$contador = 1;
while ($contador <= 10) {
    echo "El contador es: $contador <br>";
    $contador++;
} 

$variable= 0;
while ($variable <=100) {
    echo "El valor de la variable es: $variable <hr>";
    $variable=10;
}

/*do while */
echo "<h1> do while</h1>";
$z = 1;
do {
    echo "El contador es: $z <br>";
    $z++;
} while ($z <= 10);