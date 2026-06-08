const montoInput = document.getElementById("monto");

montoInput.addEventListener("input", function () {

    // Elimina todo lo que no sea número
    this.value = this.value.replace(/[^0-9]/g, '');

});