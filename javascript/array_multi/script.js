/*arreglos multidimencionales */
'use strict'
var categorias = ["Accion", "Terror", "Comedia"];
var peliculas = ["La verdad duele", "La vida es bella", "Gran torino"];
var cine = [categorias, peliculas];
console.log(cine);
console.log(cine[0][1]);    
console.log(cine[1][2]);
//operaciones con array 
//añadir elemrntos push
var elemento = prompt("Introduce tu pelicula");
peliculas.push("batman");
console.log(peliculas);
//eliminar ultimo elemento pop
peliculas.pop();
peliculas.pop();
console.log(peliculas);

//añadir elementos con el prompt
var elemento = "";
do{
    elemento = prompt("Introduce tu pelicula");
    peliculas.push(elemento);
    
}while(elemento != "ACABAR");
//for ich para recorer el array Y MOSTRAR VALORES EN PANTALLA   
peliculas.forEach((elemento, indice, array) => {
    document.write("<li>"+indice + " - " + elemento + "</li>");
});
//ocnvertir array en texto
var peliculas_string = peliculas.join();
console.log(typeof peliculas_string);

//convertir texto a array
var cadena = "texto1, texto2, texto3";
var cadena_array = cadena.split(", ");
console.log(cadena_array);
//ordenar array albafeticamente
peliculas.sort();
console.log(peliculas);
//invertir orden del array
peliculas.reverse();
console.log(peliculas);