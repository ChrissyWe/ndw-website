<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nacht der Wissenschaft - Karlsruhe</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">

    <!-- Own style -->
    <link href="css/style.css" rel="stylesheet" type="text/css">

    <!-- Leaflet -->
    <link rel="stylesheet" href="css/leaflet.css"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Favicons -->
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/png" href="/favicon.png" sizes="96x96">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <meta name="msapplication-TileColor" content="#00000">
    <meta name="msapplication-TileImage" content="/mstile-144x144.png">

</head>
<body>
<style>
    .ndw_chat input, .ndw_chat button {
        width: inherit !important;
    }
</style>
<nav class="navbar navbar-default stickyElement">
    <div class="container-fluid main-navbar">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1">
                <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span
                    class="icon-bar"></span><span class="icon-bar"></span></button>
            <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                &nbsp; Nacht der Wissenschaft</a></div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="defaultNavbar1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="hs1.php">Online HS1 </a></li>
                <li><a href="hs2.php">Online HS2 </a>
                <li>
                <li><a href="index.php#programm">Programm </a></li>
                <li><a href="index.php#Bilder"> Bilder </a></li>
                <li><a href="index.php#ueberuns"> Über uns </a></li>
                <li><a href="./impressum.html">Impressum </a></li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" href="#">Archiv
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="./archiv/januar2016/">Januar 2016</a>
                        </li>
                        <li><a href="./archiv/oktober2016/">Oktober 2016</a>
                        </li>
                        <li><a href="./archiv/november2017/">November 2017</a>
                        </li>
                        <li><a href="./archiv/november2018/">November 2018</a>
                        </li>
                        <li><a href="./archiv/januar2020/">Januar 2020</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="parralax">
    <div class="container-fluid">
        <div class="row text-center">
            <hr class="largeinvisibleSpacer">
            <h1 class="largeHeadline">Nacht der Wissenschaft<br>
                Online Hörsaal 1 </h1>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/oOe_DxnJ40k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
        <div style="margin-bottom: 5em;"></div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="ndw_chat" track="hs1">
                    <div class="quiz" style="display: none">
                        <h3><span>Quiz: <span class="question"></span></span></h3>
                        <div class="row"><div class="answer col-md-12">
                        </div></div>

                        <div class="btn-group">
                            <button class="btn open_register_button">Registrieren</button><button class="btn submit_answer" disabled="disabled">Absenden</button>
                        </div>
                        <div class="register" style="display: none">
                            Du musst dich registrieren, bevor du beim Quiz mitmachen kannst:<br/>
                            <label>Pseudonym:</label><input class="pseudonym" minlength="1" maxlength="100"
                                                            required pattern=".{10,100}"><br/>
                            <label>E-Mail-Adresse:</label><input class="email" type="email" required
                                                                 pattern=".+@.+"/><br/>
                            <small>
                            Die Daten werden für höchstens zwei Tage gespeichert (und wir nutzen ein Cookie,
                            damit du deine Kontaktdaten nicht mehrfach eingeben musst). Die Daten werden nur für
                            das Quiz verwendet und dienen dazu den Gewinnern des Quizzes Preise zukommen
                            zulassen.</small><br/>
                            <button class="register_button btn">Registrieren</button>
                        </div>

                    <hr/>
                    </div>
                    <h4><span>Stelle eine Frage zum aktuellen Vortrag</span></h4>
                    <textarea maxlength="200"></textarea>
                    <span style="display: none; margin-right: 5em"
                          class="ndw_chat_successful alert ">Deine Frage wurde versendet</span>
                    <button class="submit_question btn" style="width: 100%">Absenden</button><br/>
                    <small>Alle Fragen werden 2 Tagen gespeichert, zum alleinigen Zwecke der Weitergabe an die
                        Dozierenden.</small>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <div style="padding: 5em;"></div>
</div>
<script src="js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script>
    const NDW_CHAT_SERVER_URL = "https://mostlynerdless.de/ndw_backend";
</script>
<script src="client.js"></script>
</body>
</html>
