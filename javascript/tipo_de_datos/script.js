/* Tipos de datos */
var nro1 = 50;
var nro2 = 25;

var suma = nro1 + nro2;
var resta = nro1 - nro2;
var multi = nro1 * nro2;
var division = nro1 / nro2;
var porcentaje = nro1 % nro2;
var decimal = 25.5;
var verdad = true;
var falso = false;

var texto = "El resultado de la operacion es: ";
document.write(texto, suma, "<br>");
document.write(texto, resta, "<br>");
document.write(texto, multi, "<br>");
document.write(texto, division, "<br>");
document.write(texto, porcentaje, "<br>");
document.write(texto, decimal, "<br>");
document.write(texto, verdad, "<br>");
document.write(texto, falso, "<br>");


document.write("<hr>");
document.write("<h1>Funcion para convertir datos</h1>");

var numerico = "30";
document.write(numerico, "<br>");
var tiponumerricostring = typeof(numerico);
document.write("El numero es: " + tiponumerricostring + "<br>");

// Convertir string a numero
var numerico_convertido = Number(numerico);
document.write(numerico_convertido, "<br>");
var tipodato = typeof(numerico_convertido);
document.write("El numero es: " + tipodato + "<br>");

// Convertir numero a string
var numero = 40;
var convertidoString = String(numero);
var tipoString = typeof(convertidoString);
document.write(convertidoString + " (" + tipoString + ")<br>");

// parseint
var nrostring = "100";
var parseado = parseInt(nrostring);
document.write(parseado + "<br>");
console.log(typeof(parseado));
