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
        <!-- Primary navigation for the site -->
        <?php include __DIR__ . '/partials/header.inc.php'; ?>
    </header>

    <!-- Main hero area: contains page's primary heading and CTAs -->
    <main id="main-content" class="hero-wrapper text-white" tabindex="-1">
        <div class="container">

        <section class="container-fluid p-0" aria-labelledby="impressum">
            <img src="images/logo.png" class="hero-graphic img-fluid d-block mx-auto" alt="" loading="lazy">
                        <p id="hero-graphic-caption" class="visually-hidden">Logo der Nacht der Wissenschaft</p>

            <h1 id="impressum" class="hero-headline mb-4 text-center" data-i18n="impressum.title">
            </h1>

            <p>
                        <a href="mailto:&#105;&#110;&#102;&#111;&#064;&#110;&#100;&#119;&#045;&#107;&#097;&#046;&#100;&#101;"> <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>&#105;&#110;&#102;&#111;&#064;&#110;&#100;&#119;&#045;&#107;&#097;&#046;&#100;&#101;</a>
                        <br>
                        <br> Hochschulgruppe Nacht der Wissenschaft
                        <br> Adenauerring 7
                        <br> 76131 Karlsruhe
                        <br>
                        <br> Ansprechpartner Website:
                        <br> Alexander Dahms
                        
                    </p>
        </section>
    </div>

    
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