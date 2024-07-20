const botonAceptarCookies = document.getElementById("btn-aceptar-cookies");
const avisoCookies = document.getElementById("aviso-cookies");
const fondoAvisoCookies = document.getElementById("fondo-aviso-cookies");

dataLayer = [];

if (!localStorage.getItem("condiciones-descarga-aceptadas")) {
    avisoCookies.classList.add("activo");
    fondoAvisoCookies.classList.add("activo");
} else {
    dataLayer.push({ event: "condiciones-descarga-aceptadas" });
}

botonAceptarCookies.addEventListener("click", () => {
    avisoCookies.classList.remove("activo");
    fondoAvisoCookies.classList.remove("activo");

    localStorage.setItem("condiciones-descarga-aceptadas", true);

    dataLayer.push({ event: "condiciones-descarga-aceptadas" });
});
