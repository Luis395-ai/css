/*fujnciones
conjuntod eintruccione squ es e ejecutan cuando se las llaman */
//definir la funcion 
'use strict';
function calculadora() {
  alert("Hola, soy una función. Me tenes que llamar para que funcione.");
}
calculadora();
function calcular(n1, n2, mostrar = false) {
  if (mostrar == false) {
    return "Tenes que activarme como true";
  } else {
    var suma = n1 + n2;
    return "La suma es: " + suma;
  }
}
var nr1 = parseInt(prompt("Ingrese el valor 1: "));
var nr2 = parseInt(prompt("Ingrese el valor 2: "));
var mostrar = prompt("¿Queres mostrar el resultado? (si/no): ");
if (mostrar.toLowerCase() === "si") {
  mostrar = true;
} else {
  mostrar = false;
}
alert(calcular(nr1, nr2, mostrar));
