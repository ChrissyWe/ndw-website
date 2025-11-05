<!doctype html>
<html lang="de">

<head>
    <meta content="p2iJw_kklDL4_a17r87g1257yRJsluX_FYzG8fBegyw" name="google-site-verification" />
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Event",
            "name": "Nacht der Wissenschaft",
            "startDate": "2022-11-18T18:00:00+01:00",
            "endDate": "2021-11-19T01:00:00+01:00",
            "eventStatus": "https://schema.org/EventScheduled",
            "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
            "location": {
                "@type": "RealLocation",
                "location": "Ehrenhof KIT"
            },
            "image": [
                "https://www.ndw-ka.de/images/logo.png"
            ],
            "description": "In der Nacht vom 18. November findet auch dieses Semester die Nacht der Wissenschaft statt. Es wird viele spannende Vorträge aus den verschiedensten Fachbereichen geben.",
            "organizer": {
                "@type": "Organization",
                "name": "Hochschulgruppe Nacht der Wissenschaft",
                "url": "https://www.ndw-ka.de/about-us.html"
            }
        }
    </script>

    <script src="/js/i18n.js" defer></script>

    <!-- New accessible About page using existing site styles -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Über die Nacht der Wissenschaft: Team, Mission, Geschichte und Kontakt.">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Site CSS (keeps your current background and components) -->
    <link rel="stylesheet" href="css/styles.css?v=7">


    <title>Über uns – Nacht der Wissenschaft</title>
</head>

<body class="text-white">
    <!-- Skip link for keyboard users -->
    <a class="visually-hidden-focusable position-absolute top-0 start-0 p-2" href="#main">Zum Inhalt springen</a>

    <!-- Header (match homepage nav)-->
    <header class="mb-5">
        <!-- Primary navigation for the site -->
        <header class="mb-5" id="header">
            <?php include __DIR__ . '/partials/header.inc.php'; ?>
        </header>
    </header>

    <main id="main" class="hero-wrapper">
        <!-- Hero: About headline + short intro; keep single logical h1 -->
        <section class="container-fluid p-0" aria-labelledby="about-title">
            <!-- Überschrift bleibt volle Breite -->
            <h1 id="about-title" class="hero-headline mb-4 text-center" data-i18n="about.us">
            </h1>

            <!-- Danach das 2-Spalten-Layout -->
            <div class="row align-items-center gx-5">
                <!-- LINKS: Atom -->
                <div class="col-12 col-lg-4 text-lg-start text-center">
                    <img src="images/logo.png" class="img-fluid" alt="Symbolbild: Atomstruktur" loading="lazy">
                </div>

                <!-- RECHTS: Text -->
                <div class="col-12 col-lg-8">
                    <p class="lead" style="max-width:70ch; color: rgba(255,255,255,.9)" data-i18n="about.us.first.paragraph">
                    </p>
                    <p style="max-width:70ch; color: rgba(255,255,255,.9)" data-i18n="about.us.second.paragraph">
                    </p>
                </div>
            </div>
        </section>

        <!-- TODO: Full-width group photo with descriptive alt -->
        <!-- <figure class="mt-4" aria-labelledby="group-caption">
                <img src="images/team/orga2.jpg" class="img-fluid"
                    alt="Gruppenfoto: rund 20 Studierende der Nacht der Wissenschaft" loading="lazy">
                <figcaption id="group-caption" class="visually-hidden">Team der Nacht der Wissenschaft</figcaption>
            </figure>
 -->
        <!-- Team (accessible people grid) -->
        <section id="team" class="schedule-section" aria-labelledby="team-heading">
            <div class="container-fluid">
                <h2 id="team-heading" class="section-heading-about">Team</h2>

                <ul class="row list-unstyled g-4 team-grid" role="list">
                <!-- Card 1 -->
                <li class="col-6 col-md-3 col-lg-2">
                        <figure class="team-card" aria-labelledby="t1-name">
                            <div class="team-photo">
                                <img src="images/team/person.png" alt="Johannes B." loading="lazy"
                                    decoding="async">
                            </div>
                            <figcaption class="visually-hidden">Portrait von Johannes B.</figcaption>
                        </figure>
                        <h3 id="t1-name" class="team-name">Johannes B.</h3>
                    </li>

                    <!-- Card 2 -->
                    <li class="col-6 col-md-3 col-lg-2">
                        <figure class="team-card" aria-labelledby="t2-name">
                            <div class="team-photo">
                                <img src="images/team/vincent.png" alt="Vincent B." loading="lazy"
                                    decoding="async">
                            </div>
                            <figcaption class="visually-hidden">Portrait von Vincent B.</figcaption>
                        </figure>
                        <h3 id="t2-name" class="team-name">Vincent B.</h3>
                        <!-- <p class="team-role">Text</p> -->
                    </li>

                    <!-- Card 3 -->
                    <li class="col-6 col-md-3 col-lg-2">
                        <figure class="team-card" aria-labelledby="t3-name">
                            <div class="team-photo">
                                <img src="images/team/person.png" alt="Alexander D." loading="lazy"
                                    decoding="async">
                            </div>
                            <figcaption class="visually-hidden">Portrait von Alexander D.</figcaption>
                        </figure>
                        <h3 id="t3-name" class="team-name">Alexander D.</h3>
                    </li>

                    <!-- Card 3 -->
                    <li class="col-6 col-md-3 col-lg-2">
                        <figure class="team-card" aria-labelledby="t4-name">
                            <div class="team-photo">
                                <img src="images/team/kassandra.jpg" alt="Kassandra D." loading="lazy"
                                    decoding="async">
                            </div>
                            <figcaption class="visually-hidden">Portrait von Kassandra D.</figcaption>
                        </figure>
                        <h3 id="t4-name" class="team-name">Kassandra D.</h3>
                    </li>

                    <!-- Card 5 -->
                    <li class="col-6 col-md-3 col-lg-2">
                        <figure class="team-card" aria-labelledby="t5-name">
                            <div class="team-photo">
                                <img src="images/team/person.png" alt="Tim H." loading="lazy"
                                    decoding="async">
                            </div>
                            <figcaption class="visually-hidden">Portrait von Tim H.</figcaption>
                        </figure>
                        <h3 id="t5-name" class="team-name">Tim H.</h3>
                    </li>

                    <!-- Card 6 -->
                    <li class="col-6 col-md-3 col-lg-2">
                        <figure class="team-card" aria-labelledby="t6-name">
                            <div class="team-photo">
                                <img src="images/team/person.png" alt="Silvia R." loading="lazy"
                                    decoding="async">
                            </div>
                            <figcaption class="visually-hidden">Portrait von Silvia R.</figcaption>
                        </figure>
                        <h3 id="t6-name" class="team-name">Silvia R.</h3>
                    </li>

                    <!-- Card 7 -->
                    <li class="col-6 col-md-3 col-lg-2">
                        <figure class="team-card" aria-labelledby="t7-name">
                            <div class="team-photo">
                                <img src="images/team/person.png" alt="Benedikt S." loading="lazy"
                                    decoding="async">
                            </div>
                            <figcaption class="visually-hidden">Portrait von Benedikt S.</figcaption>
                        </figure>
                        <h3 id="t7-name" class="team-name">Benedikt S.</h3>
                    </li>

                    <!-- Card 8 -->
                    <li class="col-6 col-md-3 col-lg-2">
                        <figure class="team-card" aria-labelledby="t8-name">
                            <div class="team-photo">
                                <img src="images/team/christina.jpg" alt="Christina W." loading="lazy"
                                    decoding="async">
                            </div>
                            <figcaption class="visually-hidden">Portrait von Christina W.</figcaption>
                        </figure>
                        <h3 id="t8-name" class="team-name">Christina W.</h3>
                    </li>
                </ul>
            </div>
        </section>


        <!-- Mini-Footer / Contact Row -->
        <?php include __DIR__ . '/partials/footer.inc.php'; ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>