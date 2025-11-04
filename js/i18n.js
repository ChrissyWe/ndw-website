(() => {
  const STORAGE_KEY = "lang";
  const DEFAULT_LANG = (document.documentElement.getAttribute("lang") || "de").slice(0,2);
  let currentDict = {};

  const $$ = (sel, root=document) => Array.from(root.querySelectorAll(sel));
  const $  = (sel, root=document) => root.querySelector(sel);

  async function loadDict(lang) {
    const url = `/i18n/${lang}.json?v=1`;
    const res = await fetch(url, { cache: "force-cache" });
    if (!res.ok) throw new Error(`i18n: failed ${url}`);
    return res.json();
  }

  function applyI18n(dict, lang) {
    currentDict = dict;

    $$("[data-i18n]").forEach(el => {
      const key = el.getAttribute("data-i18n");
      if (dict[key] != null) el.textContent = dict[key];
    });

    $$("[data-i18n-attrs]").forEach(el => {
      const pairs = el.getAttribute("data-i18n-attrs").split(";").map(s => s.trim()).filter(Boolean);
      for (const p of pairs) {
        const [attr, key] = p.split(":").map(s => s.trim());
        if (attr && key && dict[key] != null) el.setAttribute(attr, dict[key]);
      }
    });

    const titleEl = document.querySelector("title[data-i18n]");
    if (titleEl) document.title = dict[titleEl.getAttribute("data-i18n")] || document.title;

    const metaDesc = $('meta[name="description"]');
    if (metaDesc && dict["seo.description"]) metaDesc.setAttribute("content", dict["seo.description"]);

    document.documentElement.setAttribute("lang", lang);
  }

  async function setLang(lang) {
    try {
      const dict = await loadDict(lang);
      localStorage.setItem(STORAGE_KEY, lang);
      applyI18n(dict, lang);
    } catch (e) {
      console.error(e);
      if (lang !== DEFAULT_LANG) setLang(DEFAULT_LANG);
    }
  }

  // Bind Dropdown
  document.addEventListener("click", (e) => {
    const btn = e.target.closest(".js-set-lang");
    if (btn) {
      e.preventDefault();
      setLang(btn.dataset.lang);
    }
  });

  // Init
  window.addEventListener("DOMContentLoaded", async () => {
    const urlLang = new URLSearchParams(location.search).get("lang");
    const stored  = localStorage.getItem(STORAGE_KEY);
    const lang = (urlLang || stored || DEFAULT_LANG).slice(0,2);
    setLang(lang);
  });
})();
