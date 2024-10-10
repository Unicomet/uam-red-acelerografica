class I18n {
    constructor() {
        this.currentLang = "es";
        this.translations = {};
    }

    async setLanguage(lang) {
        this.currentLang = lang;
        await this.loadTranslations();
        this.updateTexts();
    }

    async loadTranslations() {
        try {
            const response = await fetch(`locales/${this.currentLang}.json`);
            this.translations = await response.json();
        } catch (error) {
            console.error("Error loading translations:", error);
        }
    }

    updateTexts() {
        document.querySelectorAll("[data-i18n]").forEach((element) => {
            const key = element.getAttribute("data-i18n");
            if (this.translations[key]) {
                element.innerHTML = this.translations[key];
            }
        });
    }
}

// Export a singleton instance
const i18n = new I18n();
window.i18n = i18n;
