let currentLang = "ja";

function loadLanguage(lang) {
  const basePath = `${window.location.origin}/wp-content/themes/konsei-newtheme/`;
  fetch(`${basePath}lang-${lang}.json`)
    .then(response => response.json())
    .then(data => {
      document.querySelectorAll("[data-i18n]").forEach(el => {
        const key = el.getAttribute("data-i18n");
        if (data[key]) {
          el.textContent = data[key];
        }
      });

      currentLang = lang;

      const btn = document.getElementById("langSwitcher");
      btn.textContent = lang === "ja" ? "JP / EN" : "JP / EN";
    })
    .catch(error => {
      console.error(`エラー: ${error}`);
    });
}

loadLanguage(currentLang);

document.getElementById("langSwitcher").addEventListener("click", () => {
  const nextLang = currentLang === "ja" ? "en" : "ja";
  loadLanguage(nextLang);
});


document.getElementById("pageTopBtn").addEventListener("click", function() {
  window.scrollTo({
    top: 0,
    behavior: "smooth"
  });
});