<h1>Condicionales en php</h1>
<h2>condicional if</h2>
<?php
//if (true) {
   // echo "La condición es verdadera<br>";
//}
$hora = date("H");
if ($hora < 20) {
    echo "Buen día";
} else {
    echo "Buenas noches";
}
//else if
if ($hora < 10) {
    echo "Buen día";
} elseif ($hora < 20) {
    echo "Buenas tardes";
} else {
    echo "Buenas noches";
}   
//estructura switch
$color = "rojo";
switch ($color) {
    case "rojo":
        echo "El color es rojo";
        break;
    case "azul":
        echo "El color es azul";
        break;
    case "verde":
        echo "El color es verde";
        break;
    default:
        echo "No es rojo, ni azul, ni verde";
}
?>