'use strict';

var numero = 888;
var texto1 = "Bienvenidos al curso de javascript";
var texto2 = "TEXTO EN MAYUSCULA";

// transformar número a string
var numeroconvertido = numero.toString();
console.log(numeroconvertido);
console.log(typeof(numeroconvertido));

// cambiar de minuscula a MAYUSCULA
var textMayus = texto1.toUpperCase();
console.log(textMayus);

// cambiar de MAYUSCULA a minuscula
var textMinu = texto2.toLowerCase();
console.log(textMinu);

// longitud de un string
var longitud = "Luis kael";
console.log(longitud.length);

// concatenar
console.log(texto1 + " " + texto2);

// arrays - longitud
var array = ["hola", "como", "estas"];
console.log(array.length);

// buscar por inicio
var busqueda = texto1.indexOf("curso");
console.log(busqueda);

// buscar por ultima coincidencia
var busqueda2 = texto1.lastIndexOf("curso");
console.log(busqueda2);

// buscar con search
var busqueda3 = texto1.search("javascript");
console.log(busqueda3);

// match
var busqueda4 = texto1.match("al");
console.log(busqueda4);

// extraer palabras
var extraer = texto1.substr(14, 6); 
console.log(extraer);

// quitar letra específica
var quitar = texto1.charAt(2);
console.log(quitar);

// startsWith
var busqueda5 = texto1.startsWith("Bienve");
console.log(busqueda5);

// includes
var busqueda6 = texto1.includes("javascript");
console.log(busqueda6);

// reemplazar
var reemplazar = texto1.replace("javascript", "java");
console.log(reemplazar);

// borrar desde una posicion
var borrar = texto1.slice(12);
console.log(borrar);

// split  convertir string en array
var recortar = texto1.split(" ");
console.log(recortar);

// quitar espacios con trim
var quitarEspacios = texto1.trim();
console.log(quitarEspacios);

// uso de plantillas
var nombre = prompt("Ingrese un nombre: ");
if (!nombre) {
  nombre = "Anonimo";
}

var apellido = prompt("Ingrese un apellido: ");
if (!apellido) {
  apellido = "Sin apellido";
}

var plantilla = `
<h1>Buenas</h1>
<h3>El nombre es: ${nombre}</h3>
<h3>El apellido es: ${apellido}</h3>
`; // comillas invertidas Alt + 96

document.write(plantilla);
