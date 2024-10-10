document.addEventListener("DOMContentLoaded", () => {
    let storedLang = "es";
    const langSwitcher = document.getElementById("lang-switcher");

    if (localStorage.getItem("language")) {
        storedLang = localStorage.getItem("language");
        if (storedLang == "es") {
            langSwitcher.children[0].setAttribute("selected", "");
            langSwitcher.children[1].removeAttribute("selected");
        } else {
            langSwitcher.children[1].setAttribute("selected", "");
            langSwitcher.children[0].removeAttribute("selected");
        }

        window.i18n.setLanguage(storedLang);
    }

    langSwitcher.addEventListener("change", () => {
        const newLang = langSwitcher.value;
        localStorage.setItem("language", newLang);

        window.i18n.setLanguage(newLang);
    });
});
