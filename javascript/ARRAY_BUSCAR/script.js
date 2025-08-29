/*busquedas */
'use strict'
var lenguajes= ["PHP", "JS", "HTML", "CSS", "JAVA", "C++"];

//find
var buscafind= lenguajes.find(lenguaje => lenguaje == "PHP");
console.log(buscafind);
//findindex
var buscafindindex= lenguajes.findIndex(lenguaje => lenguaje == "PHP");
console.log(buscafindindex);

//busque da de valores numericos con some 
var numeros= [10,20,30,40,50,60];
var busquedasome= numeros.some(numero => numero >= 40);
console.log(busquedasome);