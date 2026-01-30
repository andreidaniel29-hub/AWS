document.addEventListener("DOMContentLoaded", () => {

    const form = document.querySelector("form");
    const errores = document.getElementById("errores");

    if (!form) return;

    form.addEventListener("submit", (e) => {
        errores.innerHTML = "";

        if (form.nombre.value.length < 3) {
            e.preventDefault();
            errores.innerHTML = "❌ El nombre es demasiado corto";
        }

        if (!form.email.value.includes("@")) {
            e.preventDefault();
            errores.innerHTML = "❌ Email no válido";
        }

        if (form.edad.value <= 0) {
            e.preventDefault();
            errores.innerHTML = "❌ Edad incorrecta";
        }
    });

});