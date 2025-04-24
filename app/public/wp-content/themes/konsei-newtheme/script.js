let currentLang = 'ja';

function loadLanguage(lang) {
  const basePath = `${window.location.origin}/wp-content/themes/konsei-newtheme/`;
  fetch(`${basePath}lang-${lang}.json`)
    .then(response => response.json())
    .then(data => {
      document.querySelectorAll('[data-i18n]').forEach(el => {
        const key = el.getAttribute('data-i18n');
        if (data[key]) {
          el.textContent = data[key];
        }
      });

      currentLang = lang;

      document.body.classList.remove('lang-ja', 'lang-en');
      document.body.classList.add(`lang-${lang}`);
    })
    .catch(error => {
      console.error(`言語ファイルの読み込みに失敗しました: ${error}`);
    });
}

document.addEventListener("DOMContentLoaded", () => {
  const buttons = document.querySelectorAll(".tab-btn");
  const contents = document.querySelectorAll(".tab-content");

  buttons.forEach(button => {
    button.addEventListener("click", () => {
      // ボタンの active を切り替え
      buttons.forEach(btn => btn.classList.remove("active"));
      button.classList.add("active");

      // コンテンツの表示切り替え
      const target = button.getAttribute("data-tab");
      contents.forEach(content => {
        content.classList.toggle("active", content.id === target);
      });
    });
  });

  document.getElementById("jpButton").addEventListener("click", () => {
    loadLanguage("ja");
  });

  document.getElementById("enButton").addEventListener("click", () => {
    loadLanguage("en");
  });

  loadLanguage(currentLang);
});

const pageTopBtn = document.getElementById("pageTopBtn");

window.addEventListener("scroll", () => {
  if (window.scrollY > 300) {
    pageTopBtn.classList.add("show");
  } else {
    pageTopBtn.classList.remove("show");
  }
});

document.getElementById("pageTopBtn").addEventListener("click", function() {
  window.scrollTo({
    top: 0,
    behavior: "smooth"
  });
});

const headerMenu = document.getElementById("headerMenu");

document.getElementById("headerMenuButton").addEventListener("click", () => {
  headerMenu.style.display = "block";
})

document.getElementById("headerMenuButtonClose").addEventListener("click", () => {
  headerMenu.style.display = "none";
})

const langSwitcher = document.getElementById("langSwitcher");
const langDropdown = document.getElementById("langDropdown");

langSwitcher.addEventListener("click", (e) => {
  langDropdown.style.display = "block";
  langDropdown.classList.add("active");
  langDropdown.classList.remove("hidden");

  e.stopPropagation();
});

langDropdown.addEventListener("click", (e) => {
  e.stopPropagation();
});

document.addEventListener("click", () => {
  langDropdown.classList.add("active");
  langDropdown.classList.remove("active");
  langDropdown.classList.add("hidden");
})