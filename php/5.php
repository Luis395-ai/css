<h1></h1>
<?php 
//funcion nombre de la duncion()
function miFuncion() {
    echo "Hola, soy una función en PHP";
    return;
}
  miFuncion();
echo "<h1>funciones con argumentos</h1>";
function nombre($nombres) {
    echo "Hola el nombre es, $nombres <br>";
}
    $nombres = "Juan";
    
    echo "<h1>funciones con varios argumentos</h1>";
    function NombreAño($nombre, $año) {
        echo "Hola, el nombre es $nombre y el año es $año <br>";
        
    }
    NombreAño("Pedro", 2024);
    NombreAño("María", 2023);
    NombreAño("Luis", 2022);
    echo"<h1>funciones de suma</h1>";
    function suma(int $a, int $b) {
        $resultado = $a + $b;
        return $resultado;
    }
    $suma1 = suma(5, 10);
?>