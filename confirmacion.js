function confirmacion(e) {
    if  (confirm("¿Deseas eliminar este registro?")) {
        return true;
    } else {
        e.preventDefault();
    }
}
let linkDelete = document.querySelectorAll(".table--item--link");

for (var i = 0 ; i < linkDelete; i++){
    linkDelete[i].addEventListener('click', confirmacion);
}