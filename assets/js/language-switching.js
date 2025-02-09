document.addEventListener("DOMContentLoaded", () => {
    const storedLang = "es";

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
});

function changeLanguage(languageSwitcher) {
    const lang = languageSwitcher.value;
    localStorage.setItem("language", lang);
    window.i18n.setLanguage(lang);
}
