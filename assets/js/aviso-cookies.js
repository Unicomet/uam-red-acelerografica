const botonAceptarCookies = document.getElementById("btn-aceptar-cookies");
const avisoCookies = document.getElementById("aviso-cookies");
const fondoAvisoCookies = document.getElementById("fondo-aviso-cookies");

let currentDownloadLink = "";

// Handle download button clicks
document.querySelectorAll(".download-button").forEach((button) => {
    button.addEventListener("click", function (e) {
        e.preventDefault();
        currentDownloadLink = this.getAttribute("href");
        avisoCookies.classList.add("activo");
        fondoAvisoCookies.classList.add("activo");
    });
});

botonAceptarCookies.addEventListener("click", () => {
    avisoCookies.classList.remove("activo");
    fondoAvisoCookies.classList.remove("activo");

    // Proceed with download after accepting terms
    if (currentDownloadLink) {
        window.open(currentDownloadLink, "_blank");
        currentDownloadLink = "";
    }
});
