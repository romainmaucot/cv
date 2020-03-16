<?php include 'inc/support.php'; if (!isset($_SESSION)) session_start();?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Jeu concours Fairmont</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=no,viewport-fit=cover" />

       <meta property="og:url"                content="https://howfarfrom-fairmontmontecarlo.com/" />
       <meta property="og:type"               content="article" />
       <meta property="og:title"              content="Jeu concours Fairmont" />
       <meta property="og:description"        content="Découvrez où se trouve le Fairmont Monte Carlo pour tenter de gagner un séjour de 2 nuits en chambre vue mer pour 2 personnes" />
       <meta property="og:image"              content="https://howfarfrom-fairmontmontecarlo.com/fairmont-og-facebook.jpg" />
       <meta property="og:image:width"        content="1080" />
       <meta property="og:image:height"       content="630" />
       <meta property="og:image:alt"          content="Fairmont Monte Carlo" />

    <!-- CSS -->
    <link href="css/main.css" rel="stylesheet" type="text/css">
	<link href="css/cookieconsent.css" rel="stylesheet" type="text/css">
    <!-- JS -->
    <script src="js/cookieconsent.min.js"></script>
    <script src="https://kit.fontawesome.com/5066463401.js" crossorigin="anonymous"></script>
    <script>
        window.addEventListener("load", function(){
            window.cookieconsent.initialise({
                "palette": {
                    "popup": {
                        "background": "#ffffff",
                        "text": "#000000"
                    },
                    "button": {
                        "background": "transparent",
                        "text": "#181a4a",
                        "border": "#181a4a"
                    }
                },
                "position": "top",
                "content": {
                    "message": "Ce site utilise des cookies pour vous assurer la meilleure expérience sur notre site.",
                    "dismiss": "J'ai compris !",
                    "link": "En savoir plus"
                }
            })
        });
    </script>
</head>
<body>
    <main>
        <div id="intro" class="frow fullscreen">
            <div>

            </div>
            <div class="fcol" style="align-items: center ; justify-content: center">
                <img src="img/hff.png" alt="" style="width: 300px ; margin: 0 auto">
                <img src="img/nseo.svg" alt="" style="width: 100px ; margin: 0 auto">
                <div style="text-align: center; width: 70%;">
                    <p>
                        Replacez sur la carte les lieux iconiques de la Principauté de Monaco et découvrez où se trouve le Fairmont Monte Carlo pour tenter d’y gagner un séjour de 2 nuits en chambre vue mer pour 2 personnes.
                    </p>
                    <button class="btn" onclick="window.location.href = 'jeu.php'"><i class="fas fa-map-marker-alt" style="color : darkblue"></i>&nbsp;jouer</button>
                </div>
            </div>
        </div>
    </main>

    <footer id="footer" class="frow" style="padding-top: 5px">
        <div class="frow" style="padding-right: 10px">
            <a href="pdf/Mentions.pdf" target="_blank" style="font-size: 9px;" valign="top">mentions légales</a>
        </div>
        <div>
            <img src="img/rosas.png" alt="rose des vents" width="9px" height="auto">
        </div>
        <div class="frow" style="padding-left: 10px">
            <a href="pdf/reglement.pdf" target="_blank" style="font-size: 9px;">règlement</a>
        </div>
    </footer>

    <!-- JS -->
    <script src='https://www.google.com/recaptcha/api.js' async defer></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>
