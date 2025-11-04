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
<link rel="stylesheet" href="css/leaflet.css" />

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
<nav class="navbar navbar-default stickyElement">
    <div class="container-fluid main-navbar">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> &nbsp; Nacht der Wissenschaft</a></div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="defaultNavbar1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="hs1.php">Online HS1 </a></li>
                <li><a href="hs2.php">Online HS2 </a><li>
                <li><a href="index.php#programm">Programm </a></li>
                <li><a href="index.php#kd2lab">KD&sup2;Lab </a></li>
                <li><a href="index.php#Bilder"> Bilder </a></li>
                <li><a href="index.php#ueberuns"> Über uns </a></li>
        <li><a href="./impressum.html">Impressum </a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" href="#">Archiv <span class="caret"></span></a>
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
                <p style="text-align:center"><iframe width="560" height="315" src="https://www.youtube.com/embed/MwbiKY-XKbc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p>
        </div>
    </div>
    <div class="container">
    <div class="row">
            <div class="col-lg-8  col-lg-offset-2">
                <div class="panel-group" id="accordion11">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion11"
                                                       href="#collapseOne11">
                                <div class="hoersaal color1"></div>
                                <span class="question-header">Stelle eine Frage zum aktuellen Vortrag</span></a></h4>
                        </div>
                        <div id="collapseOne11" class="panel-collapse collapse question">
                            <div class="panel-body">
                                <textarea></textarea>
                                <div style="width: 100; text-align: right"><span class="alert alert-success"
                                                                                  style="visibility: hidden; margin-right: 5em"
                                                                                  role="alert">
                                    Nachricht versendet
                                </span>
                          <button class="btn btn-success"
                                  onclick="send('collapseOne11', 'https://uqudy.serpens.uberspace.de/helpers/ndw1/write.php')">Absenden</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>
<script src="js/jquery.min.js"></script>
        <script type="text/javascript">
            $('.closeall').click(function () {
                $('.panel-collapse.in')
                    .collapse('hide');
            });
            $('.openall').click(function () {
                $('.panel-collapse:not(".in")')
                    .collapse('show');
            });
            $('#defaultNavbar1').on("click", "a", null, function () {
                if (!$(this).hasClass("dropdown-toggle")) {
                    $('#defaultNavbar1').collapse('hide');
                }
            });
			
            function send(element, url) {
                var content = $("#" + element + " textarea").val()
                $.post(url,
                    {
                        "content": content
                    });
                $("#" + element + " .alert").css({"visibility": "visible"});
                setTimeout(function () {
                    $("#" + element + " .alert").css({"visibility": "hidden"});
                }, 3000);
                $("#" + element + " textarea").val("");
            }
        </script>

        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/leaflet.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                var map = L.map('anfahrtsplan').setView([49.01244, 8.41359], 18);

                var ndwMarker = L.icon({
                    iconUrl: './images/ndw-marker.png',
                    iconRetinaUrl: './images/ndw-marker-2x.png',
                    iconSize: [38, 50],
                    iconAnchor: [18, 50]
                });

                var osmUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
      var osmAttrib = 'Map data &copy; <a href="https://openstreetmap.org">OpenStreetMap</a> contributors'; var osm = new L.TileLayer(osmUrl, { minZoom: 15, maxZoom: 19, attribution: osmAttrib }); map.setView(new L.LatLng(49.009749, 8.4124518), 17); map.addLayer(osm); map.scrollWheelZoom.disable(); var marker = L.marker([49.009749, 8.4124518], {icon: ndwMarker}).addTo(map); });
        </script>
</body>
</html>
