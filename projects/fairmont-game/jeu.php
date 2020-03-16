<?php
//include 'inc/init.php';
include 'inc/support.php';

if (empty($_SESSION['nom'])) $_SESSION['nom']           ='';
if (empty($_SESSION['prenom'])) $_SESSION['prenom']     ='';
if (empty($_SESSION['email'])) $_SESSION['email']       ='';
if (empty($_SESSION['pays'])) $_SESSION['pays']         ='';
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Jeu concours Fairmont Monte Carlo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=no,viewport-fit=cover" />

    <!-- CSS -->
    <link href="css/main.css" rel="stylesheet" type="text/css">

</head>
<body>
<main style="min-width: 1000px">
    <!--        <div id="loader" class="loader"></div>-->
    <div id="game" class="fcol fullscreen">
        <div class="map-dropable frow">
            <div id="3" class="droppable jardinexo"></div>
            <div id="1" class="droppable palais-princier"></div>
            <div id="4" class="droppable museeoceano"></div>
            <div id="2" class="droppable carredor"></div>
            <div id="6" class="droppable eglisecharles"></div>
            <div id="5" class="droppable jardinjapo"></div>
            <div id="99" class="droppable final"></div>
        </div>
        <div class="frow fullscreen cadre">
            <div class="banner"></div>

            <div id="places" class="map-dragable frow" style="justify-content: space-between">
                <img src="img/hff.png" alt="" style="height: 50px; margin: auto">
                <div id="hr" class="fcol" style="width: 80%;">
                    <div class="frow draggable-dom" style="justify-content: space-around">
                        <div class="fcol" style="text-align:center; width: 180px">
                            <div id="1" draggable="true" class="draggable" style="background-image: url(img/palaisprincier.png)"></div>
                            <p class="dscbull" >palais princier</p>
                        </div>
                        <div class="fcol" style="text-align:center; width: 180px">
                            <div id="2" draggable="true" class="draggable" style="background-image: url(img/carredor.png)"></div>
                            <p class="dscbull" >carré d'or</p>
                        </div>
                        <div class="fcol" style="text-align:center; width: 180px">
                            <div id="3" draggable="true" class="draggable" style="background-image: url(img/grotteexotique.png)"></div>
                            <p class="dscbull" >grottes du jardin exotique</p>
                        </div>
                        <div class="fcol" style="text-align:center; width: 180px">
                            <div id="4" draggable="true" class="draggable" style="background-image: url(img/museeoceano.png)"></div>
                            <p class="dscbull" >musée océanographique</p>
                        </div>
                        <div class="fcol" style="text-align:center; width: 180px">
                            <div id="5" draggable="true" class="draggable" style="background-image: url(img/jardinjaponais.png)"></div>
                            <p class="dscbull" >jardin japonais</p>
                        </div>
                        <div class="fcol" style="text-align:center; width: 180px">
                            <div id="6" draggable="true" class="draggable" style="background-image: url(img/eglisesaintcharles.png)"></div>
                            <p class="dscbull" >église saint-charles</p>
                        </div>
                    </div>
                    <div style="height: 5px;width: 80%; border: 1px solid rgb(255,255, 255, 0.4); bottom: 90px; position: absolute"></div>
                </div>
                <img src="img/nseo.svg" alt="" style="margin: auto; height: 160px">
            </div>
            <div id="fairmont" class="hidden" style="position: fixed ; bottom: 13% ; width: calc(100vw - 60px) ; z-index: 9">
                <div class="frow draggable-dom" style="justify-content: center ; width: 100%">
                    <div class="fcol" style="text-align: center ; width: 100%">
                        <div id="99" draggable="true" class="draggable" style="background-image: url(img/FairmontFinal.png) ; background-size: cover ; width: 80px; height: 80px; border-radius: 999px; z-index: 99; margin: -79px auto 0"></div>
                        <p></p>
                        <div class="frow" style="width: 450px; height: 60px; border: 1px solid white ; margin: -70px auto 0 auto; justify-content: space-between ; align-items:center">
                            <p style="line-height: 1.3; text-align: right; margin: 5px; color: white; width: 40%; padding-right: 20px">
                                TENTEZ DE <br>
                                SITUER LE
                            </p>
                            <p style="line-height: 1.3; text-align: left; margin: 5px; color: white; width: 40%; padding-left: 20px">
                                <b>
                                    FAIRMONT <br/>
                                    MONTE CARLO
                                </b>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="arrow-up"></div>
            <div>
                <img width="74px" height="auto" style="bottom:10px;left: 48.5%;position: absolute;" src="img/dragdropJeux.png">
            </div>
        </div>
    </div>
    <div id="tuto" class="frow fullscreen popin intro">
        <img src="img/tuto.png" alt="" style="height: auto;width: 50%; position: absolute; bottom: 6vw; left: calc(30vw - calc(20% / 3))">
            <div class="tutobox">
                    <img class="flex1" src="img/hand.png" width="30px" height="auto">
                    <p class="flex2">Glissez-déposez les lieux emblématiques au bon endroit sur la carte</p>
                    <button class="btn btn-darkblue toggle-pop flex3" style="margin: 0.5em; padding: 8px 10px; width:70%">J'AI COMPRIS</button>
            </div>
        </div>
    <div id="popin-1" class="frow fullscreen popin col-2 hidden">
        <div style="background-image: url(img/popin/response1.png); background-size: contain; background-repeat: no-repeat">
        </div>
        <div class="fcol" style="max-width: 640px">
            <div class="titre">Félicitations&nbsp;!</div>
            <h2 style="text-align: left"><i class="fas fa-map-marker-alt" style="color : #181a4a"></i>&nbsp;le palais princier</h2>
            <hr style="background-color: #fff">
            <br>
            <p>Situé à 2km du Fairmont Monte Carlo, le Palais Princier (ou Palais de Monaco) est la résidence officielle de la Famille Princière de Monaco depuis 1297. Il est situé en haut du Rocher de Monaco, quartier le plus ancien de la Principauté, surplombant de soixante mètres la mer Méditerranée.</p>
            <div class="frow">
                <button class="btn btn-darkblue toggle-pop">continuer</button>
                <button class="btn btn-localiser-fairmont hidden">situer l'hôtel</button>
            </div>
        </div>
    </div>
    <div id="popin-2" class="frow fullscreen popin col-2 hidden">
        <div style="background-image: url(img/popin/response2.png); background-size: contain; background-repeat: no-repeat"></div>
        <div class="fcol" style="max-width: 640px">
            <div class="titre">Félicitations&nbsp;!</div>
            <h2 style="text-align: left"><i class="fas fa-map-marker-alt" style="color : #181a4a"></i>&nbsp;carré d'or</h2>
            <hr style="background-color: #fff" >
            <br>
            <p>Le quartier du Carré d’Or est l’un des quartiers les plus prestigieux de Monaco. Il est situé à 500m du Fairmont Monte Carlo, en face des jardins du Casino. Ce quartier est connu notamment pour les différents films qui y ont été tournés, comme « 007 Golden eye » ou encore « Iron man ».</p>
            <div class="frow">
                <button class="btn btn-darkblue toggle-pop">continuer</button>
                <button class="btn btn-localiser-fairmont hidden">situer l'hôtel</button>
            </div>
        </div>
    </div>
    <div id="popin-3" class="frow fullscreen popin col-2 hidden">
        <div style="background-image: url(img/popin/response3.png); background-size: contain; background-repeat: no-repeat"></div>
        <div class="fcol" style="max-width: 640px">
            <div class="titre">Félicitations&nbsp;!</div>
            <h2 style="text-align: left"><i class="fas fa-map-marker-alt" style="color : #181a4a"></i>&nbsp;grottes du jardin éxotique</h2>
            <hr style="background-color: #fff" >
            <br>
            <p>A la base de la falaise du Jardin Exotique, à 100m d'altitude, s'ouvre une cavité naturelle souterraine dans laquelle la roche calcaire, creusée par l'eau il y a des millénaires, est parsemée de multiples cavernes. Située à 2,5km du Fairmont Monte Carlo, la cavité s'enfonce pratiquement jusqu'au niveau de la mer.</p>
            <div class="frow">
                <button class="btn btn-darkblue toggle-pop">continuer</button>
                <button class="btn btn-localiser-fairmont hidden">situer l'hôtel</button>
            </div>
        </div>
    </div>
    <div id="popin-4" class="frow fullscreen popin col-2 hidden">
        <div style="background-image: url(img/popin/response4.png); background-size: contain; background-repeat: no-repeat"></div>
        <div class="fcol" style="max-width: 640px">
            <div class="titre">Félicitations&nbsp;!</div>
            <h2 style="text-align: left"><i class="fas fa-map-marker-alt" style="color : #181a4a"></i>&nbsp;musée océanographique</h2>
            <hr style="background-color: #fff" >
            <br>
            <p>Il s'agit d'un musée-aquarium unique, au coeur d'un palais de plus de 2.400m². Il regroupe plus de 2.000 spécimens de différentes espèces méditerranéennes et tropicales. Ce musée situé à 3,5 km du Fairmont Monte Carlo, retrace entre autres les expéditions scientifiques du Prince Albert 1er et propose un tout nouvel aménagement à ciel ouvert avec des tortues marines.</p>
            <div class="frow">
                <button class="btn btn-darkblue toggle-pop">continuer</button>
                <button class="btn btn-localiser-fairmont hidden">situer l'hôtel</button>
            </div>
        </div>
    </div>
    <div id="popin-5" class="frow fullscreen popin col-2 hidden">
        <div style="background-image: url(img/popin/response5.png); background-size: contain; background-repeat: no-repeat"></div>
        <div class="fcol" style="max-width: 640px">
            <div class="titre">Félicitations&nbsp;!</div>
            <h2 style="text-align: left"><i class="fas fa-map-marker-alt" style="color : #181a4a"></i>&nbsp;jardin japonais</h2>
            <hr style="background-color: #fff" >
            <br>
            <p>Ce jardin créé en 1994, à la demande du Prince Rainier III,  respecte les principes les plus stricts du concept de la pensée zen de l’architecte paysagiste Yasuo BEPPU. Situé à seulement 300m du Fairmont Monte Carlo, il offre un voyage dépaysant au pays du soleil levant.</p>
            <div class="frow">
                <button class="btn btn-darkblue toggle-pop">continuer</button>
                <button class="btn btn-localiser-fairmont hidden">situer l'hôtel</button>
            </div>
        </div>
    </div>
    <div id="popin-6" class="frow fullscreen popin col-2 hidden">
        <div style="background-image: url(img/popin/response6.png); background-size: contain; background-repeat: no-repeat"></div>
        <div class="fcol" style="max-width: 640px">
            <div class="titre">Félicitations&nbsp;!</div>
            <h2 style="text-align: left"><i class="fas fa-map-marker-alt" style="color : #181a4a"></i>&nbsp;église saint-charles</h2>
            <hr style="background-color: #fff" >
            <br>
            <p>L’église Saint-Charles est située en plein centre de Monte-Carlo, à 550m du Fairmont Monte Carlo. C'est le Prince Charles III qui l'a faite construire à l’emplacement de l’ancienne chapelle Saint-Laurent. De style Renaissance, cet édifice dont le clocher s'élève à 30m de haut, fut inauguré en 1883.</p>
            <div class="frow">
                <button class="btn btn-darkblue toggle-pop">continuer</button>
                <button class="btn btn-localiser-fairmont hidden">situer l'hôtel</button>
            </div>
        </div>
    </div>
    <div id="final-form" class="fcol fullscreen popin hidden">
        <div id="form-paper" class="fcol" style="align-items: center">
            <div class="bravo">Bravo&nbsp;!</div>
            <div class="message-felicitation">
                <p>
                    Vous avez correctement situé le Fairmont Hôtel Monte Carlo, <br>
                    et les principales attractions de Monaco.
                </p>
                <br>
                <hr style="width: 80%;border-top: 1px solid #181a4a">
                <br>
                <p>
                    Pour valider votre inscription, veuillez remplir le formulaire
                </p>
                <br>
            </div>
            <section class="content-formulaire fcol" style="width: 80% ; text-align: left">
                <form class="fcol formMembre" method="POST" enctype="multipart/form-data">
                    <article>
                        <input class="form-radio" type="radio" name="civilite" value="madame" id="madame">
                        <label for="madame" class="form-label">Mme *</label>
                        <input class="form-radio" type="radio" name="civilite" value="Monsieur" id="Monsieur">
                        <label for="madame" class="form-label">M. *</label>
                    </article>
                    <br>
                    <input type="text" name="nom" id="nom" class="form-input" placeholder="Nom*" value="<?php echo $_SESSION['nom']; ?>" required>
                    <input type="text" name="prenom" id="prenom" class="form-input" placeholder="Prénom*" value="<?php echo $_SESSION['prenom']; ?>" required>
                    <input type="text" name="pays" id="pays" class="form-input" placeholder="Pays*" value="<?php echo $_SESSION['pays']; ?>" required>
                    <input type="text" name="email" id="email" class="form-input" placeholder="Email*" value="<?php echo $_SESSION['email']; ?>" required>

                        <label for="newsletter" class="container">
                            <input type="checkbox" name="newsletter" id="newsletter">
                            <span class="checkmark"></span>
                            <b style="font-weight: bold">Je double mes chances de gagner</b> en m'abonnant à la newsletter Fairmont
                        </label>
                        <label for="accepte" class="container">
                            <input type="checkbox" name="accepte" id="accepte">
                            <span class="checkmark"></span>
                            J’ai lu et j’accepte le règlement du jeu*
                        </label>

                    <input type="hidden" name="token" id="token" value="">
                    <p style="font-size: 10px; margin-bottom: 10px;">Plus d’informations sur la gestion de vos données personnelles <a href="https://all.accor.com/security-certificate/index.fr.shtml" target="_blank">ici</a></p>
                    <hr style="width: 100%;border-top: 1px solid #181a4a">
                    <br>
                    <div class="wrap-btn">
                        <!-- CAPTCHA -->
                        <div class="g-recaptcha"
                             data-sitekey="6LfqSLwUAAAAAIWWec815EVXBAXTqaiEJSnzYm92"
                             data-callback="onSubmit" style="margin-bottom: 15px">
                        </div>

                        <input type="submit" value="valider" class="btn btn-darkblue" style="margin: auto">


                    </div>
                    <div id="fail"></div>
                    <div class="frow" style="justify-content: flex-end">
                        <p style="font-size: 10px">* Champs obligatoires</p>
                        <br>
                    </div>
                    <br>
                    <p style="font-size: 10px">
                        Accor, en tant que responsable de traitement, traite les données personnelles que vous fournissez dans ce formulaire aux fins de votre participation au Jeu, pour les nécessités de l'attribution du gain. Les données sont communiquées à Accor, à l’Agence Surf en sa qualité de sous-traitant et à l’Hôtel Fairmont Monte Carlo, dans le respect des règles de sécurité en vigueur. Sauf dispositions législatives ou réglementaires contraires, vos données sont conservées pendant la durée de l’évènement.
                        Accor, en tant que responsable de traitement, traite les données personnelles que vous fournissez dans ce formulaire et les transmet à l’Hôtel Fairmont Monte Carlo aux fins de l’envoi de la newsletter de l’Hôtel Fairmont Monte Carlo. Les données sont communiquées à Accor, à l’Agence Surf en sa qualité de sous-traitant et à l’Hôtel Fairmont Monte Carlo. Sauf dispositions législatives ou réglementaires contraires, vos données sont conservées tant que vous ne vous désabonnez pas via le lien de désinscription figurant au sein de la newsletter.
                        Les champs marqués d’un astérisque (*) sont obligatoires. Le défaut de réponse dans un champ obligatoire ne nous permettra pas de valider votre participation au Jeu et de prendre contact avec vous.
                        Vous disposez à l’égard d’Accor, en tant que responsable de traitement de ces données, ainsi qu’à l’égard de l’Hôtel Fairmont Monte Carlo des droits d'accès, de rectification, de portabilité et d’effacement de vos données personnelles, ainsi que des droits à la restriction du traitement et d’opposition au traitement définition de directives pour le traitement de vos données après votre mort, en écrivant à Marylene.BARBERA@accor.com ou à Monica.Pellegrino@Fairmont.com. Vous avez également le droit de déposer une réclamation auprès d'une autorité de contrôle.
                        Pour plus d'informations sur la protection des données personnelles au sein du Groupe Accor, vous pouvez consulter la Charte de Protection des Données Personnelles disponible sur le site
                        <a href="https://all.accor.com/france/index.fr.shtml" target="_blank">https://all.accor.com/france/index.fr.shtml</a>
                    </p>
                </form>
            </section>
            <section class="fcol remerciement">
                <h4>Votre inscription a bien été prise en compte.</h4>
            </section>
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
<!--    JS -->
<script src='https://www.google.com/recaptcha/api.js' async defer></script>
<!--    <script type="text/javascript" src="js/jquery.min.js"></script>-->
<!--    <script type="text/javascript" src="js/script.js"></script>-->

</body>
</html>
<script src="js/jquery-3.4.1.min.js"></script>

<script src="js/position.js"></script>
<script src="https://kit.fontawesome.com/5066463401.js" crossorigin="anonymous"></script>
<script src="js/main.js"></script>
<script src="js/functions.js"></script>
