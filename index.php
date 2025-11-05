<!doctype html>
<html lang="de">

<head>
    <meta content="p2iJw_kklDL4_a17r87g1257yRJsluX_FYzG8fBegyw" name="google-site-verification" />
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Event",
            "name": "Nacht der Wissenschaft",
            "startDate": "2025-11-21T18:00:00+01:00",
            "endDate": "2025-11-22T04:00:00+01:00",
            "eventStatus": "https://schema.org/EventScheduled",
            "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
            "location": {
                "@type": "RealLocation",
                "location": "Ehrenhof KIT"
            },
            "image": [
                "https://www.ndw-ka.de/images/logo.png"
            ],
            "description": "In der Nacht vom 21. November findet auch dieses Semester die Nacht der Wissenschaft statt. Es wird viele spannende Vorträge aus den verschiedensten Fachbereichen geben.",
            "organizer": {
                "@type": "Organization",
                "name": "Hochschulgruppe Nacht der Wissenschaft",
                "url": "https://www.ndw-ka.de/about-us.html"
            }
        }
    </script>

    <script src="/js/i18n.js" defer></script>

    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Nacht der Wissenschaft am KIT: Programm, Highlights und Informationen zum Event am 21. November 2025.">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Own CSS -->
    <link rel="stylesheet" href="css/styles.css">


    <title>Nacht der Wissenschaft</title>

    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/favicon-192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="shortcut icon" href="/favicon.ico">

    <meta name="theme-color" content="#000000">
</head>

<body class="text-white">
    <!-- Skip link: helps keyboard/screen-reader users jump to main content -->
    <a class="visually-hidden-focusable position-absolute top-0 start-0 p-2" href="#main-content">Zum Inhalt
        springen</a>

    <header class="mb-5" id="header">
        <?php include __DIR__ . '/partials/header.inc.php'; ?>
    </header>

    <!-- Main hero area: contains page's primary heading and CTAs -->
    <main id="main-content" class="hero-wrapper text-white" tabindex="-1">
        <!--
      tabindex="-1" makes this section programmatically focusable so the skip link can move focus here
    -->
        <section id="hauptinhalt" class="flex-grow-1 d-flex" aria-labelledby="page-title">
            <div class="container-fluid p-0">
                <div class="row gx-3 gy-5 align-items-center">
                    <!-- Text block + buttons -->
                    <div class="col-12 col-lg-8">
                        <h1 id="page-title" class="hero-headline">
                            Nacht der Wissenschaft<br>
                            <span class="fw-normal" data-i18n="date.of.event"></span>
                        </h1>


                        <p id="cta-desc" class="visually-hidden">
                            Aktionen: Programm anzeigen oder Termin im Kalender speichern.
                        </p>

                        <!-- Associate the button group with an accessible description -->

                        <div class="hero-cta d-flex flex-column flex-sm-row gap-3
            justify-content-center justify-content-lg-start
            align-items-center align-items-lg-start
            text-center text-lg-start" aria-describedby="cta-desc">

                            <a class="btn btn-outline-light-custom text-center" href="#zeitplan"
                                data-i18n="cta.program">Programm ansehen</a>

                            <div class="dropdown hero-dropdown">
                                <button id="addToCalBtn" class="btn btn-light-custom text-center" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false" data-i18n="cta.calendar">
                                    Zum Kalender hinzufügen
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark mt-2" aria-labelledby="addToCalBtn">
                                    <li><a class="dropdown-item"
                                            href="https://calendar.google.com/calendar/render?action=TEMPLATE&text=Nacht%20der%20Wissenschaft&dates=20251121T170000Z/20251122T030000Z&ctz=Europe%2FBerlin&details=Mehr%20Infos%3A%20https%3A%2F%2Fwww.ndw-ka.de%2F"
                                            target="_blank" rel="noopener">Google
                                            Calendar</a></li>
                                    <li><a class="dropdown-item" href="/nacht-der-wissenschaft.ics" download>Apple</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                            href="https://outlook.live.com/calendar/0/action/compose?rru=addevent&startdt=2025-11-21T18:00:00&enddt=2025-11-22T04:00:00&subject=Nacht%20der%20Wissenschaft&body=Mehr%20Infos%3A%20https%3A%2F%2Fwww.ndw-ka.de"
                                            target="_blank" rel="noopener">Outlook</a></li>
                                    <li><a class="dropdown-item" href="/nacht-der-wissenschaft.ics" download
                                            data-i18n="ical.file">iCal Datei</a></li>
                                </ul>
                            </div>
                        </div>



                    </div>

                    <!-- Logo / hero graphic -->
                    <aside class="col-12 col-lg-4 text-lg-end text-center" aria-labelledby="hero-graphic-caption">
                        <!-- Decorative? If yes, keep empty alt. If this conveys brand, provide meaningful alt text. -->
                        <img src="images/logo.png" class="hero-graphic img-fluid" alt="" loading="lazy">
                        <p id="hero-graphic-caption" class="visually-hidden">Logo der Nacht der Wissenschaft</p>
                    </aside>
                </div>
            </div>
        </section>
    </main>

    <!-- Highlighted event of the day -->
    <section class="highlight-section" aria-labelledby="highlight-heading">
        <div class="container-fluid">
            <h2 id="highlight-heading" class="section-heading" data-i18n="highlight.heading">Heutiges Highlight</h2>

            <div class="highlight-row">
                <figure class="highlight-media">
                    <div id="event-image-wrap">
                        <img id="event-image" alt="" loading="lazy">
                    </div>
                    <figcaption id="event-figcaption" class="visually-hidden"></figcaption>
                </figure>


                <article class="highlight-content text-white" aria-live="polite" aria-busy="true"
                    aria-labelledby="event-title" aria-describedby="event-body">
                    <div class="highlight-content-inner">
                        <p class="highlight-date" id="event-date">
                            <!-- Example: <time datetime="2025-11-21T19:30">21. Nov 2025, 19:30</time> injected by JS -->
                        </p>
                        <h3 class="highlight-title h2" id="event-title"></h3>
                        <p class="highlight-body" id="event-body"></p>
                        <p id="event-speaker"></p>
                        <p id="event-language"></p>

                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Schedule / Programm -->
    <section class="schedule-section text-white" id="zeitplan" aria-labelledby="programm-heading">
        <div class="container-fluid schedule-container">
            <h2 id="programm-heading" class="section-heading" data-i18n="schedule.heading">Programm</h2>

            <div class="row gx-4 gy-5">
                <!-- Hall 1 -->
                <section class="col-12 col-lg-4" aria-labelledby="hall-1-heading">
                    <h3 class="hall-heading text-center" id="hall-1-heading" data-i18n="schedule.hall1">Hörsaal 1</h3>
                    <div class="hall-card" id="hall-1-talks" aria-live="polite">
                        <!-- Talks for Hall 1 injected via JS -->
                    </div>
                </section>

                <!-- Hall 2 -->
                <section class="col-12 col-lg-4" aria-labelledby="hall-2-heading">
                    <h3 class="hall-heading text-center" id="hall-2-heading" data-i18n="schedule.hall2">Hörsaal 2</h3>
                    <div class="hall-card" id="hall-2-talks" aria-live="polite">
                        <!-- Talks for Hall 2 injected via JS -->
                    </div>
                </section>

                <!-- Hall 3 -->
                <section class="col-12 col-lg-4" aria-labelledby="hall-3-heading">
                    <h3 class="hall-heading text-center" id="hall-3-heading" data-i18n="schedule.hall3">Hörsaal 3</h3>
                    <div class="hall-card" id="hall-3-talks" aria-live="polite">
                        <!-- Talks for Hall 3 injected via JS -->
                    </div>
                </section>
            </div>
        </div>
    </section>

    <!-- About -->
    <section class="about-section text-white" id="about" aria-labelledby="about-heading">
        <div class="container-fluid">
            <h2 id="about-heading" class="section-heading" data-i18n="about.heading">Wer wir sind</h2>

            <div class="about-row">
                <figure class="about-visual bleed-left">
                    <img src="images/moon.png" class="about-image" loading="lazy" alt="Mond vor dunklem Nachthimmel.">
                    <figcaption class="visually-hidden">Symbolbild zur Nacht der Wissenschaft</figcaption>
                </figure>

                <article class="about-content">
                    <h3 class="about-title" data-i18n="about.title">Nacht der Wissenschaft @ KIT</h3>

                    <p class="about-body" data-i18n="about.body">
                    </p>

                    <!-- <blockquote class="about-quote" cite="">
                        „Tolles Zitat hier einfügen“
                    </blockquote> -->
                </article>
            </div>


        </div>
    </section>

    <br>
    <br>

    <section class="about-supporters" aria-labelledby="supporters-heading">
        <div class="about-contact-row">
            <div class="col-lg-12">
                <h2 id="supporters-heading" class="section-heading" data-i18n="supporters.heading">Unterstützung und
                    Kooperation</h2>
                <p class="partner" data-i18n="thank.you.supporters"></p>
                <br>
                <div class="supporter-logos" role="list">
                    <a role="listitem" href="https://www.kit.edu" target="_blank">
                        <img src="images/supporter_logos/kit_dark.png" alt="KIT">
                    </a>
                    <a role="listitem" href="https://www.asta-kit.de" target="_blank">
                        <img src="images/supporter_logos/asta.png" alt="AStA KIT">
                    </a>
                    <a role="listitem" href="https://www.akk.org" target="_blank">
                        <img src="images/supporter_logos/akk.png" alt="AKK">
                    </a>
                    <a role="listitem" href="https://www.kulturinkarlsruhe.de/" target="_blank">
                        <img src="images/supporter_logos/kulturinkarlsruhe.png" alt="Kultur in Karlsruhe">
                    </a>
                    <a role="listitem" href="http://www.verein-besserwissen.de/" target="_blank">
                        <img src="images/supporter_logos/besserwissen.png" alt="BesserWissen e.V.">
                    </a>
                    <a role="listitem" href="https://www.studierendenschaft.org/start" target="_blank">
                        <img src="images/supporter_logos/Forder_Verein_logo.png" alt="Förderverein Studierendenschaft">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="contact-section" aria-labelledby="kontakt">
        <div class="about-contact-row">
            <div class="col-lg-12">
                <h2 id="kontakt" class="section-heading">Kontakt</h2>
                <address class="contact-block">
                    <a class="contact-mail"
                        href="mailto:&#105;&#110;&#102;&#111;&#064;&#110;&#100;&#119;&#045;&#107;&#097;&#046;&#100;&#101;">
                        <strong>&#105;&#110;&#102;&#111;&#064;&#110;&#100;&#119;&#045;&#107;&#097;&#046;&#100;&#101;</strong>
                    </a>
                    <div class="contact-address">
                        Adenauerring&nbsp;7<br>
                        76131&nbsp;Karlsruhe
                    </div>
                    <a class="contact-link" href="./impressum.html">Ansprechpartner</a>
                </address>
            </div>
        </div>
    </section>
    </div>
    </div> -->

    <!-- Mini-Footer / Contact Row -->
    <?php include __DIR__ . '/partials/footer.inc.php'; ?>



    <!-- Scripts -->
    <!-- TODO: Change when online so that the archive works -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-cVKIPhG81r6SC2+KYy3U5u5IK9GqGAJn5c5nCT0xEdlE7C6eJQ6pa1wWb46dktK4"
        crossorigin="anonymous"></script> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>


    <!--
    highlighted-events.js should:
    - Populate #event-image (src + alt), #event-figcaption (optional), #event-title, #event-body
    - Insert a <time> element inside #event-date with a valid datetime attribute
    - Set aria-busy on .highlight-content to false once content is injected
  -->
    <script src="js/highlighted-events.js" defer></script>

</body>

</html>