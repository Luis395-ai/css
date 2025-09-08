<h1>arrays</h1>
<?php
//array indexado
$frutas = array("manzana", "banana", "naranja");
echo $frutas[0],",",$frutas[1]; //manzana
echo "<br>";
echo"<h1>recorrer un array</h1>";
//recorrer un array con foreach
foreach($frutas as $fruta => $frutos){
    echo $fruta,"<br>";
}
echo"<h1>array bidimensional</h1>";
//array bidimensional
$alumnos = array(
    array("nombre" => "juan", "edad" => 20),
    array("nombre" => "maria", "edad" => 22),
    array("nombre" => "pedro", "edad" => 21)
);
echo $alumnos[0]["nombre"]; //juan
?>