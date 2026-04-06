// Función para agregar números y operadores al display
function agregar(valor) {
    const display = document.getElementById("display");
    display.value += valor;
}

// Función para borrar el contenido del display
function borrar() {
    const display = document.getElementById("display");
    display.value = "";
}

// Función para limpiar al cargar la página
window.addEventListener('load', function() {
    const display = document.getElementById("display");
    display.value = "";
});