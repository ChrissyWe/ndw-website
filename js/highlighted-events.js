(function () {
  // === 1) Date / day-of-year (for deterministic highlight pick) ===
  const today = new Date();
  const formattedDate = today.toLocaleDateString("de-DE", {
    day: "2-digit",
    month: "2-digit",
    year: "numeric",
  });
  function getDayOfYear(date) {
    const start = new Date(date.getFullYear(), 0, 0);
    return Math.floor((date - start) / 86400000);
  }
  const dayOfYear = getDayOfYear(today);

  // === 2) DOM refs for the highlight block (hero) ===
  const elDate = document.getElementById("event-date");
  const elTitle = document.getElementById("event-title");
  const elBody = document.getElementById("event-body");
  const elImg = document.getElementById("event-image");
  const elImgWrap = document.getElementById("event-image-wrap");
  const elSpeaker = document.getElementById("event-speaker");
  const elLanguage = document.getElementById("event-language");
  const elInstitute = document.getElementById("event-institute");

  if (elDate) elDate.textContent = formattedDate;

  // === 3) DOM refs for halls and talk lists ===
  const hallHeadingEls = {
    "1": document.getElementById("hall-1-heading"),
    "2": document.getElementById("hall-2-heading"),
    "3": document.getElementById("hall-3-heading"),
  };
  const hallTalksEls = {
    "1": document.getElementById("hall-1-talks"),
    "2": document.getElementById("hall-2-talks"),
    "3": document.getElementById("hall-3-talks"),
  };

  // === 4) Load schedule JSON ===
  fetch("text/schedule.json", { cache: "no-cache" })
    .then((resp) => {
      if (!resp.ok) throw new Error("could not load schedule.json");
      return resp.json();
    })
    .then((data) => {
      const halls = data.halls || [];
      const talks = data.talks || [];

      // 4a) Set hall headings
      halls.forEach((hall) => {
        if (hallHeadingEls[hall.id]) {
          hallHeadingEls[hall.id].textContent =
            decodeUnicode(hall.label || ("Hörsaal " + hall.id));
        }
      });

      // 4b) Group talks by hall id
      const groupedByHall = {};
      talks.forEach((talk) => {
        if (!groupedByHall[talk.hall]) groupedByHall[talk.hall] = [];
        groupedByHall[talk.hall].push(talk);
      });

      // 4c) Desktop: gemeinsame Zeitliste + Platzhalter, Mobile: wie bisher
      const timesOrder = uniqueTimesInOrder(talks); // in Reihenfolge aus JSON

      Object.keys(hallTalksEls).forEach((hallId) => {
        const container = hallTalksEls[hallId];
        if (!container) return;

        const hallTalks = groupedByHall[hallId] || [];

        // Index nach Zeit für schnellen Zugriff
        const byTime = new Map(hallTalks.map(t => [String(t.time || "").trim(), t]));

        // Desktop nebeneinander -> gleiche Zeilen je Zeit; sonst originale Liste
        const desktop = window.matchMedia("(min-width: 992px)").matches;
        let rows = [];

        if (desktop) {
          rows = timesOrder.map((time, i) => {
            const talk = byTime.get(time) || null;
            return renderTalkRow(talk, hallId, i, time);
          });
        } else {
          rows = hallTalks.map((t, i) => renderTalkRow(t, hallId, i, t.time || ""));
        }

        container.innerHTML = rows.join("");
        wireImageLoadReflow(container);
      });

      // 4d) Enable toggle animation
      wireTalkToggles();

      // 4e) Zeilenhöhen anpassen (nur Desktop)
      equalizeRowHeightsOnce();


      // 4e) Fill the highlight block deterministically
      // Only talks that have BOTH a non-empty description and a real image
      const highlightCandidates = (talks || []).filter((t) => {
        const hasDesc = (t.desc || "").trim().length > 0;
        const hasImg = isImageUrl((t.image || "").trim());
        return hasDesc && hasImg;
      });

      if (highlightCandidates.length > 0) {
        const idx = dayOfYear % highlightCandidates.length;
        const chosen = highlightCandidates[idx];

        const highlightTitle = decodeUnicode(chosen.title || "Untitled");
        const highlightBody = chosen.desc || highlightTitle;
        const highlightImage = chosen.image || "";
        const highlightAlt =
          decodeUnicode(chosen.imageAlt || highlightTitle || "Image");

        if (elTitle) elTitle.textContent = highlightTitle;
        if (elBody) elBody.innerHTML = formatHtmlWithBreaks(highlightBody);

        if (elImg) {
          elImg.alt = highlightAlt;

          if (isImageUrl(highlightImage)) {
            elImg.src = highlightImage;
            elImg.style.display = "";

          } else {
            elImg.removeAttribute("src");
            elImg.style.display = "none";
          }
        }


        if (elSpeaker) {
          const profTitle = chosen.profTitle || "";
          const lecturer = chosen.lecturer || "";
          const instLabel = chosen.instituteLabel || "";
          const instUrl = chosen.instituteUrl || "";

          const name =
            (profTitle ? profTitle.trim() + " " : "") + (lecturer || "");
          const inst = instUrl
            ? `<a class="talk-institute" href="${escapeAttr(
              instUrl
            )}" target="_blank" rel="noopener">${escapeText(
              instLabel || instUrl
            )}</a>`
            : instLabel
              ? `<span class="talk-institute">${escapeText(instLabel)}</span>`
              : "";

          const sep = name && inst ? ", " : "";
          elSpeaker.innerHTML = `<span data-i18n="speaker">Referent:</span> ${escapeText(
            name.trim()
          )}${sep}${inst}`;
        }

        if (elLanguage && (chosen.language || "")) {
          elLanguage.innerHTML = `<span data-i18n="language">Sprache:</span> ${escapeText(
            chosen.language
          )}`;
        }

        if (elInstitute) {
          const instLabel = chosen.instituteLabel || "";
          const instUrl = chosen.instituteUrl || "";
          if (elInstitute.tagName === "A" && instUrl) {
            elInstitute.textContent = decodeUnicode(instLabel || instUrl);
            elInstitute.setAttribute("href", instUrl);
          } else {
            elInstitute.textContent = decodeUnicode(instLabel || "");
          }
        }
      } else {
        // No suitable highlight -> clear/hide gracefully
        if (elTitle) elTitle.textContent = " ";
        if (elBody) elBody.textContent = " ";
        if (elImg) {
          elImg.removeAttribute("src");
          elImg.alt = "";
          elImg.style.display = "none";
        }
        if (elSpeaker) elSpeaker.textContent = "";
        if (elLanguage) elLanguage.textContent = "";
        if (elInstitute) elInstitute.textContent = "";
      }
    })
    .catch((err) => {
      console.error("schedule load error:", err);
      if (elTitle) elTitle.textContent = "Highlight could not be loaded";
      if (elBody) elBody.textContent = "Please try again later.";
      if (elImg) {
        elImg.alt = "No image available";
        elImg.style.display = "none";
      }

      Object.values(hallTalksEls).forEach((container) => {
        if (container) {
          container.innerHTML = `
            <div class="talk-block">
              <p class="time-slot">--:--</p>
              <button class="talk-toggle" type="button" disabled>
                <span class="talk-title-text" style="opacity:.6">Error loading program.</span>
              </button>
            </div>
          `;
        }
      });
    });

  // === Helpers ===

  // Escape for text node contexts
  function escapeText(str) {
    return String(str)
      .replace(/&/g, "&amp;")
      .replace(/</g, "&lt;")
      .replace(/>/g, "&gt;")
      .replace(/"/g, "&quot;");
  }

  // Escape for attribute values
  function escapeAttr(str) {
    return escapeText(str).replace(/'/g, "&#39;");
  }

  // Decode literals like "U+00AE" or "u+1F4A9" to real Unicode
  function decodeUnicode(str) {
    if (!str) return "";
    return String(str).replace(/U\+([0-9A-F]{4,6})/gi, (_, hex) =>
      String.fromCodePoint(parseInt(hex, 16))
    );
  }

  // Produce HTML: decode "U+XXXX", escape HTML, then turn newlines into <br>
  function formatHtmlWithBreaks(str) {
    const decoded = decodeUnicode(str).replace(/\r\n?/g, "\n");
    const escaped = escapeText(decoded);
    return escaped.replace(/\n/g, "<br>");
  }

  // Accept only real image files; PDFs etc. are rejected for highlight/images
  function isImageUrl(url) {
    if (!url) return false;
    return /\.(png|jpe?g|webp|gif|avif|svg)$/i.test(url);
  }

  // Build an i18n-ready "Speaker" line.
  function buildLecturerLine({
    profTitle = "",
    lecturer = "",
    instLabel = "",
    instUrl = "",
  }) {
    if (!profTitle && !lecturer && !instLabel) return "";
    const name =
      (profTitle ? escapeText(decodeUnicode(profTitle.trim())) + " " : "") +
      escapeText(decodeUnicode(lecturer || "").trim());
    const inst = instUrl
      ? `<a class="talk-institute" href="${escapeAttr(
        instUrl
      )}" target="_blank" rel="noopener">${escapeText(
        decodeUnicode(instLabel || instUrl)
      )}</a>`
      : instLabel
        ? `<span class="talk-institute">${escapeText(decodeUnicode(instLabel))}</span>`
        : "";
    const sep = name && inst ? ", " : "";
    return `<p class="talk-lecturer"><span data-i18n="speaker">Referent:</span> ${name}${sep}${inst}</p>`;
  }

  // Build an i18n-ready "Language" line.
  function buildLanguageLine(langValue = "") {
    if (!langValue) return "";
    return `<p class="talk-language"><span data-i18n="language">Sprache:</span> ${escapeText(
      decodeUnicode(langValue)
    )}</p>`;
  }

  // Toggle animation and a11y attributes for each talk block
  function wireTalkToggles() {
    const toggles = document.querySelectorAll(".talk-toggle");
    toggles.forEach((btn) => {
      btn.addEventListener("click", () => {
        const panelId = btn.getAttribute("aria-controls");
        const panel = document.getElementById(panelId);
        if (!panel) return;

        const expanded = btn.getAttribute("aria-expanded") === "true";
        const nowExpanded = !expanded;

        // a11y attributes
        btn.setAttribute("aria-expanded", String(nowExpanded));
        panel.setAttribute("aria-hidden", String(!nowExpanded));

        // animate max-height + opacity
        if (nowExpanded) {
          // open just this panel
          panel.classList.add("is-open");
          panel.style.maxHeight = panel.scrollHeight + "px";
          panel.style.opacity = "1";
        } else {
          // close just this panel
          panel.style.maxHeight = panel.scrollHeight + "px"; // start from current height
          panel.getBoundingClientRect(); // force reflow
          panel.classList.remove("is-open");
          panel.style.maxHeight = "0";
          panel.style.opacity = "0";
        }
        // IMPORTANT:
        // Do NOT re-equalize heights here. We want other columns to stay unchanged.
      });
    });
  }


  // Liefert die Zeitpunkte in der Reihenfolge ihres ersten Auftretens im JSON
  function uniqueTimesInOrder(talks) {
    const seen = new Set();
    const out = [];
    talks.forEach(t => {
      const tt = String(t.time || "").trim();
      if (tt && !seen.has(tt)) { seen.add(tt); out.push(tt); }
    });
    return out;
  }

  // Eine Zeile (Talk oder leerer Platzhalter für eine Zeit)
  function renderTalkRow(talk, hallId, i, timeLabel) {
    const safeTime = timeLabel || (talk ? talk.time || "" : "");
    if (!talk) {
      // leerer Platzhalter – sorgt für fluchtende Zeiten und gleiche Spaltenhöhe
      return `
        <div class="talk-block is-placeholder">
          <p class="time-slot">${escapeText(safeTime)}</p>
          <button class="talk-toggle" type="button" disabled aria-disabled="true">
            <span class="talk-title-text" style="opacity:.55">—</span>
          </button>
        </div>
      `;
    }

    const safeTitle = decodeUnicode(talk.title || "");
    const rawDesc = talk.desc || "";
    const safeDesc = rawDesc.trim() !== "" ? rawDesc : "";
    const imgUrl = (talk.image || "").trim();
    const safeImg = isImageUrl(imgUrl) ? imgUrl : "";
    const safeAlt = talk.imageAlt || safeTitle || "Talk image";

    const profTitle = talk.profTitle || "";
    const lecturer = talk.lecturer || "";
    const instLabel = talk.instituteLabel || "";
    const instUrl = talk.instituteUrl || "";
    const language = talk.language || "";

    const panelId = `talk-details-${hallId}-${i}`;
    const lecturerLine = buildLecturerLine({ profTitle, lecturer, instLabel, instUrl });
    const languageLine = buildLanguageLine(language);

    const detailsInner = `
      <div class="talk-details-inner">
        ${safeDesc ? `<p class="talk-desc">${formatHtmlWithBreaks(safeDesc)}</p>` : ""}
        ${lecturerLine}
        ${languageLine}
        ${safeImg ? `<img class="talk-image" src="${escapeAttr(safeImg)}" alt="${escapeAttr(decodeUnicode(safeAlt))}">` : ""}
      </div>
    `;

    return `
      <div class="talk-block">
        <p class="time-slot">${escapeText(safeTime)}</p>
        <button class="talk-toggle" type="button" aria-expanded="false" aria-controls="${panelId}">
          <span class="talk-title-text">${escapeText(safeTitle)}</span>
        </button>
        <div class="talk-details" id="${panelId}" aria-hidden="true" style="max-height:0; opacity:0;">
          ${detailsInner}
        </div>
      </div>
    `;
  }

  /**
 * Equalize row heights ONCE, right after initial render while all panels are collapsed.
 * We set min-height so that opening one panel later will not change the other columns.
 */
  function equalizeRowHeightsOnce() {
    const desktop = window.matchMedia("(min-width: 992px)").matches;
    const columns = ["1", "2", "3"]
      .map((id) => document.getElementById(`hall-${id}-talks`))
      .filter(Boolean);

    // Reset any previous min-heights (needed if you re-render programmatically)
    columns.forEach((col) => {
      col.querySelectorAll(".talk-block").forEach((b) => (b.style.minHeight = ""));
    });

    if (!desktop || columns.length === 0) return;

    const colRows = columns.map((col) =>
      Array.from(col.querySelectorAll(".talk-block"))
    );
    const maxRows = Math.max(...colRows.map((r) => r.length));

    // For each logical time-row, measure the tallest collapsed block and apply as min-height
    for (let i = 0; i < maxRows; i++) {
      const rowElems = colRows.map((r) => r[i]).filter(Boolean);
      const maxH = Math.max(...rowElems.map((el) => el.offsetHeight));
      rowElems.forEach((el) => (el.style.minHeight = maxH + "px"));
    }
  }


  // kleines Debounce
  function debounce(fn, ms) {
    let t; return (...args) => { clearTimeout(t); t = setTimeout(() => fn.apply(this, args), ms); };
  }

  // Nach dem Auf-/Zuklappen neu ausrichten
  const _origWire = wireTalkToggles;
  wireTalkToggles = function () {
    const toggles = document.querySelectorAll(".talk-toggle");
    toggles.forEach((btn) => {
      btn.addEventListener("click", () => {
        const panelId = btn.getAttribute("aria-controls");
        const panel = document.getElementById(panelId);
        if (!panel) return;

        const expanded = btn.getAttribute("aria-expanded") === "true";
        const nowExpanded = !expanded;

        btn.setAttribute("aria-expanded", String(nowExpanded));
        panel.setAttribute("aria-hidden", String(!nowExpanded));

        if (nowExpanded) {
          panel.classList.add("is-open");
          panel.style.maxHeight = panel.scrollHeight + "px";
          panel.style.opacity = "1";
        } else {
          panel.style.maxHeight = panel.scrollHeight + "px";
          panel.getBoundingClientRect();
          panel.classList.remove("is-open");
          panel.style.maxHeight = "0";
          panel.style.opacity = "0";
        }
        // nach Ende der Transition neu messen
        setTimeout(equalizeRowHeights, 250);
      });
    });
  };

  // Run once after you injected the HTML
  function wireImageLoadReflow(root) {
    const scope = root || document;
    scope.querySelectorAll(".talk-image").forEach((img) => {
      if (img.dataset._reflowBound) return; // avoid double-binding
      img.dataset._reflowBound = "1";

      img.addEventListener("load", () => {
        const panel = img.closest(".talk-details");
        if (panel && panel.classList.contains("is-open")) {
          // Recompute max-height to fit the now-loaded image
          panel.style.maxHeight = panel.scrollHeight + "px";
        }
      }, { passive: true });
    });
  }

})();