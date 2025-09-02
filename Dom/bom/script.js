/*BOM
sIRVE PARA MANIPULAR EL NAVEGADOR
*/
console.log(window.innerHeight,"alto");
console.log(window.innerWidth,"ancho");

//crear una funcion para traer el ancho y el alto del navegador
function traerBom(ancho, alto) {
    var ancho= console.log(window.innerWidth);
    var alto= console.log(window.innerHeight);
    return "El ancho es: "+ancho+" y el alto es: "+alto;
}
traerBom();

//traer el tamaño real
console.log(screen.width,"ancho real");
console.log(screen.height,"alto real");

//traer la url  
console.log(window.location);


//redireccionar
function redireccionar(url) {
    window.location.href = url;
}
redireccionar(url);

//abrir una ventana nueva
function abrirVentana(url) {
    window.open(url);
}
abrirVentana(url,"whidth=400,height=300");