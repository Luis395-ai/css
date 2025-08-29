/*arrays */
'use strict';
var nombre= "Jose";
//definir un array
var nombres= ["Luis", "Kael", "Ana",53,true];

//establecer un array
var lenguajes = new Array("PHP", "JS", "HTML", "CSS");
console.log(nombres);
console.log(lenguajes);
//imprimir el elemento ingresado del nro del infdice
var seleccion= parseInt(prompt("Quq lenguaje seleccionaras?",0));
if (seleccion >= lenguajes.length){
    alert("Introduce un numero menor no existe esaa posicion " + lenguajes.length);
}
else{
    alert("El lenguaje seleccionado es: " + lenguajes[seleccion]);
}
//recorer un array
//for
document.write("<h1>Inprimir elementos con for</h1>");
document.write("<ul>");
for (var i = 0; i < lenguajes.length; i++) {
    document.write("<li>"+lenguajes[i] + "</li>");

  
}document.write("</ul>");

//foreach
document.write("<h1>Inprimir elementos con foreach</h1>");
document.write("<ul>");
lenguajes.forEach((elemento, indice, array) => {
    console.log(elemento);
    console.log(indice);
    console.log(array);
    document.write("<li>"+indice + " - " + elemento + "</li>");
    
    
});
document.write("</ul>");
//recorercon for in
document.write("<h1>Inprimir elementos con for in</h1>");
document.write("<ul>");
for (let lenguaje in lenguajes) {
    document.write("<li>"+lenguaje + " - " + lenguajes[lenguaje] + "</li>");
    
}