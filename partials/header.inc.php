<?php // /partials/header.inc.php ?>
<nav class="d-flex align-items-center w-100" aria-label="Hauptnavigation">

    <!-- Left side: Nacht der Wissenschaft name -->
    <a class="brand text-decoration-none" href="/" aria-label="Startseite – Nacht der Wissenschaft">
        Nacht der Wissenschaft
    </a>

    <!-- Desktop menu: aligned to the right, items in a single row -->
    <div class="d-none d-md-block ms-auto">
        <ul class="nav flex-row gap-4 align-items-center">
            <li class="nav-item">
                <a class="nav-link p-0" href="./about-us.php" data-i18n="about.us"></a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle p-0" href="#" id="archivDropdown" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false" data-i18n="archive"></a>
                <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end" aria-labelledby="archivDropdown">
                    <li><a class="dropdown-item" href="/archiv/januar2016/" data-i18n="archive.january2016"></a></li>
                    <li><a class="dropdown-item" href="/archiv/oktober2016/" data-i18n="archive.october2016"></a></li>
                    <li><a class="dropdown-item" href="/archiv/november2017/" data-i18n="archive.november2017"></a></li>
                    <li><a class="dropdown-item" href="/archiv/november2018/" data-i18n="archive.november2018"></a></li>
                    <li><a class="dropdown-item" href="/archiv/januar2020/" data-i18n="archive.january2020"></a></li>
                    <li><a class="dropdown-item" href="/archiv/november2020/" data-i18n="archive.november2020"></a></li>
                    <li><a class="dropdown-item" href="/archiv/november2021/" data-i18n="archive.november2021"></a></li>
                    <li><a class="dropdown-item" href="/archiv/november2022/" data-i18n="archive.november2022"></a></li>
                    <li><a class="dropdown-item" href="/archiv/november2023/" data-i18n="archive.november2023"></a></li>
                    <li><a class="dropdown-item" href="/archiv/november2024/" data-i18n="archive.november2024"></a></li>
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle lang-toggle p-0 d-inline-flex align-items-center mt-1" href="#"
                    id="langDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="images/language-icon.svg" alt="Sprache" width="20" height="20">
                </a>
                <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end" aria-labelledby="langDropdown">
                    <li><button class="dropdown-item js-set-lang" data-lang="de">Deutsch</button></li>
                    <li><button class="dropdown-item js-set-lang" data-lang="en">English</button></li>
                </ul>
            </li>
        </ul>
    </div>

    <!-- Mobile: hamburger on the right, dropdown opens downward with items stacked vertically -->
    <!-- Hamburger on the right with a downward-opening dropdown -->
    <div class="dropdown d-md-none ms-auto">
        <button class="btn p-0 burger" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside"
            aria-expanded="false" aria-label="Menü öffnen">
            <svg width="28" height="28" viewBox="0 0 24 24" class="burger-icon" aria-hidden="true">
                <rect x="3" y="6" width="18" height="2" rx="1"></rect>
                <rect x="3" y="11" width="18" height="2" rx="1"></rect>
                <rect x="3" y="16" width="18" height="2" rx="1"></rect>
            </svg>
        </button>

        <div class="dropdown-menu dropdown-menu-dark dropdown-menu-end mt-2 p-0" style="min-width:14rem;">
            <!-- About us -->
            <a class="dropdown-item" href="./about-us.html" data-i18n="about.us" data-i18n="about.us"></a>

            <!-- Archive in collapse / expand section below -->
            <button class="dropdown-item d-flex justify-content-between align-items-center" type="button"
                data-bs-toggle="collapse" data-bs-target="#m-archiv" aria-expanded="false" aria-controls="m-archiv">
                <span class="label text-nowrap" data-i18n="archive">Archiv</span>
                <span class="caret ms-2" aria-hidden="true">▾</span>
            </button>
            <div id="m-archiv" class="collapse">
                <a class="dropdown-item ps-4" href="/archiv/januar2016/" data-i18n="archive.january2016"></a>
                <a class="dropdown-item ps-4" href="/archiv/oktober2016/" data-i18n="archive.october2016"></a>
                <a class="dropdown-item ps-4" href="/archiv/november2017/" data-i18n="archive.november2017"></a>
                <a class="dropdown-item ps-4" href="/archiv/november2018/" data-i18n="archive.november2018"></a>
                <a class="dropdown-item ps-4" href="/archiv/januar2020/" data-i18n="archive.january2020"></a>
                <a class="dropdown-item ps-4" href="/archiv/november2020/" data-i18n="archive.november2020"></a>
                <a class="dropdown-item ps-4" href="/archiv/november2021/" data-i18n="archive.november2021"></a>
                <a class="dropdown-item ps-4" href="/archiv/november2022/" data-i18n="archive.november2022"></a>
                <a class="dropdown-item ps-4" href="/archiv/november2023/" data-i18n="archive.november2023"></a>
                <a class="dropdown-item ps-4" href="/archiv/november2024/" data-i18n="archive.november2024"></a>
            </div>

            <!-- Language in collapse / expand section below -->
            <button class="dropdown-item d-flex justify-content-between align-items-center" type="button"
                data-bs-toggle="collapse" data-bs-target="#m-lang" aria-expanded="false" aria-controls="m-lang">
                <span class="label text-nowrap" data-i18n="nav.language">Sprache</span>
                <span class="caret ms-2" aria-hidden="true">▾</span>
            </button>
            <div id="m-lang" class="collapse">
                <button class="dropdown-item ps-4 js-set-lang" data-lang="de" type="button">Deutsch</button>
                <button class="dropdown-item ps-4 js-set-lang" data-lang="en" type="button">English</button>
            </div>
        </div>
    </div>
</nav>