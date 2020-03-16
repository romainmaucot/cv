<?php

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
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no,viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <!-- CSS -->
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <?php include_once("inc/analyticstracking.php"); ?>

    <link rel="manifest" href="manifest.json">

    <!-- JS -->
    <script src="https://kit.fontawesome.com/5066463401.js" crossorigin="anonymous"></script>
</head>
<body>
    <main>
        <div id="game" class="fcol ">
            <div class="frow fullscreen cadre">
                <div class="banner"></div>
                <div style="width: 100%; display: flex; justify-content: space-between; align-items: center">
                    <div id="place-left" class="fcol" style="justify-content: center; height: 100%">
                        <div id="1" draggable="true" class="draggable movable draggable-1" style="background-image: url(img/palaisprincier.png)"></div>
                        <div id="2" draggable="true" class="draggable movable draggable-2" style="background-image: url(img/carredor.png)"></div>
                        <div id="3" draggable="true" class="draggable movable draggable-3" style="background-image: url(img/grotteexotique.png)"></div>
                    </div>
                    <div class="map-dropable frow">
                        <div id="3" class="droppable droppable-3 jardinexo"></div>
                        <div id="1" class="droppable droppable-1 palais-princier"></div>
                        <div id="4" class="droppable droppable-4 museeoceano"></div>
                        <div id="2" class="droppable droppable-2 carredor"></div>
                        <div id="6" class="droppable droppable-6 eglisecharles"></div>
                        <div id="5" class="droppable droppable-5 jardinjapo"></div>
                        <div id="99" class="droppable droppable-99 final"></div>
                    </div>
                    <div id="place-right" class="fcol" style="justify-content: center; height: 100%">
                        <div id="4" draggable="true" class="draggable movable draggable-4" style="background-image: url(img/museeoceano.png)"></div>
                        <div id="5" draggable="true" class="draggable movable draggable-5" style="background-image: url(img/jardinjaponais.png)"></div>
                        <div id="6" draggable="true" class="draggable movable draggable-6" style="background-image: url(img/eglisesaintcharles.png)"></div>
                    </div>
                    <div id="place-final" class="fcol hidden" style="justify-content: flex-end; height: 100%">
                        <div class="fcol" style="text-align:center;">
                            <div id="99" draggable="true" class="draggable movable draggable-99" style="background-image: url(img/FairmontFinal.png); "></div>
                        </div>
                    </div>
                </div>
                <div id="fairmont" class="hidden" style="position: fixed ; bottom: 150px ; width: calc(100vw - 60px) ; z-index: 9">
                    <div class="frow draggable-dom" style="justify-content: center ; width: 100%">
                        <div class="fcol" style="text-align: center ; width: 100%">
                            <div id="99" draggable="true" class="draggable draggable-99" style="background-image: url(img/carredor.png) ; background-size: cover ; width: 80px; height: 80px; border-radius: 999px; z-index: 99; margin: -79px auto 0"></div>
                            <p></p>
                            <div class="frow" style="width: 360px; height: 60px; border: 1px solid white ; margin: -70px auto 0 auto; justify-content: space-between ; align-items:center">
                                <p style="line-height: 1; text-align: right; margin: 5px; color: white; width: 40%; padding-right: 10px">
                                    TENTEZ DE <br>
                                    SITUER LE
                                </p>
                                <p style="line-height: 1; text-align: left; margin: 5px; color: white; width: 40%; padding-left: 10px">
                                    <b>
                                        FAIRMONT <br/>
                                        MONTE CARLO
                                    </b>
                                </p>
                            </div>
                        </div>
                    </div>
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

                <p>Ce jardin créé en 1994, à la demande du Prince Rainier III,  respecte les principes les plus stricts du concept de la pensée zen de l’architecte paysagiste Yasuo BEPPU. Situé à seulement 300m du Fairmonte Monte Carlo, il offre un voyage dépaysant au pays du soleil levant.</p>
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
                        <article style="height:40px;">
                            <input class="form-radio" type="radio" name="civilite" value="madame" id="madame">
                            <label for="madame" class="form-label">Mme *</label>
                            <input class="form-radio" type="radio" name="civilite" value="Monsieur" id="Monsieur">
                            <label for="madame" class="form-label">M. *</label>
                        </article>
                        <input type="text" name="nom" id="nom" class="form-input" placeholder="Nom*" value="<?php echo $_SESSION['nom']; ?>" required>
                        <input type="text" name="prenom" id="prenom" class="form-input" placeholder="Prénom*" value="<?php echo $_SESSION['prenom']; ?>" required>
                        <input type="text" name="pays" id="pays" class="form-input" placeholder="Pays*" value="<?php echo $_SESSION['pays']; ?>" required>
                        <input type="text" name="email" id="email" class="form-input" placeholder="Email*" value="<?php echo $_SESSION['email']; ?>" required>
                            <label for="accepte" class="container" style="height: 20px">
                                <input type="checkbox" name="accepte" id="accepte">
                                <span class="checkmark"></span>
                                J'accèpte le règlement du jeu*
                            </label>
                            <label for="newsletter" class="container" style="height: 20px">
                                <input type="checkbox" name="newsletter" id="newsletter">
                                <span class="checkmark"></span>
                                <b style="font-weight: bold">Je double mes chances de gagner</b> en m'abonnant à la newsletter Fairmont.
                            </label>
                    <input type="hidden" name="token" id="token" value="">
                    <p style="font-size: 10px; margin-bottom: 10px;">Plus d’informations sur la gestion de vos données personnelles <a href="https://all.accor.com/security-certificate/index.fr.shtml" target="_blank">ici</a></p>
                    <hr style="width: 100%;border-top: 1px solid #181a4a">
					<br>
						<!-- CAPTCHA -->
						<div class="g-recaptcha"
							 data-sitekey="6LfqSLwUAAAAAIWWec815EVXBAXTqaiEJSnzYm92"
							 data-callback="onSubmit" style="margin-bottom: 15px">
						</div>
						<button type="submit" class="btn btn-darkblue" style="margin: auto">valider</button>

                    	<div id="fail"></div>
                        <div class="frow" style="justify-content: flex-end">
                            <p style="font-size: 10px">* Champs obligatoirs</p>
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

        <?php include 'inc/turn.php'; ?>
    </main>
<!--    <footer id="footer" class="frow">-->
<!--        <div class="frow" style="width:48%; justify-content: flex-end; align-items: center">-->
<!--            <a href="">mentions légales</a>-->
<!--        </div>-->
<!--        <div style="width: 4%; min-width: 30px; text-align: center; margin-top: 10px">-->
<!--            <img src="img/rosas.png" alt="rose des vents" style="height:20px; margin: auto">-->
<!--        </div>-->
<!--        <div class="frow" style="width:48%; align-items: center">-->
<!--            <a href="">règlement</a>-->
<!--        </div>-->
<!--    </footer>-->
<!--    JS -->

<!--    JS -->
	<script src='https://www.google.com/recaptcha/api.js?explicit&hl=fr' async defer></script>
    <script src="https://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script src="https://code.jquery.com/ui/1.8.21/jquery-ui.min.js"></script>
    <script src="js/jquery.ui.touch-punch.min.js"></script>
    <script src="js/position.js"></script>

    <script src="js/main.js"></script>
    <script src="js/functions.js"></script>
    <script>

        let correct = 0;
        let total = 0;

        var dot = null,
            touchId = 1,
            touchA = null,
            touchB = null,
            touchBStart = null,
            mouseIsDown = false;

        var mouse2TouchMap = {
            "mouseup" : "touchend",
            "mousedown" : "touchstart",
            "mousemove" : "touchmove"
        };

        /* function fakeTouchHandler(e) {
            e.preventDefault();
            e.stopPropagation();

            if (e.type == "mousedown")
                touchId++;

            var touch = {
                identifier: touchId,
                target:        e.target,
                clientX:     e.clientX,
                clientY:      e.clientY,
                pageX:         e.clientX,
                pageY:         e.clientY,
                screenX:     e.screenX,
                screenY:      e.screenY
            }

            if (e.type == "mouseup") {
                touchA = touchB;
                mouseIsDown = false;
            }
            if (e.type == "mousedown") {
                touchBStart = touch;
                mouseIsDown = true;
            }
            touchB = touch;

            if (e.type == "mousemove" && !mouseIsDown)
                return;

            var scale = 1.0;
            var rotation = 0.0;

            var touches = [];
            if (touchA) {
                touches.push(touchA);

                if (!dot) {
                    dot = document.createElement("div");
                    document.body.appendChild(dot);
                }
                dot.setAttribute("style", "position: absolute; z-index: 10000; width: 20px; height: 20px; -webkit-border-radius: 10px; background-color: rgba(255,255,0,0); top: "+(touchA.clientY-10)+"px; left: "+(touchA.clientX-10)+"px; ");

                var x1 = touchA.clientX - touchBStart.clientX,
                    y1 = touchA.clientY - touchBStart.clientY,
                    x2 = touchA.clientX - touchB.clientX,
                    y2 = touchA.clientY - touchB.clientY;

                scale = Math.sqrt(x2 * x2 + y2 * y2) / Math.sqrt(x1 * x1 + y1 * y1);

                rotation = Math.atan(x1 / y1) - Math.atan(x2 / y2);
                if ((y1 > 0 && y2 < 0) || (y1 < 0 && y2 > 0))
                    rotation += Math.PI;
                rotation *= (180 / Math.PI);
            }
            touches.push(touchB);

            var touchEvent = document.createEvent("MouseEvents");
            touchEvent.initMouseEvent(
                mouse2TouchMap[e.type],
                true,
                true,
                e.view,
                e.detail,
                e.screenX,
                e.screenY,
                e.clientX,
                e.clientY,
                e.ctrlKey,
                e.altKey,
                e.shiftKey,
                e.metaKey,
                0,
                null
            );
            touchEvent.touches = touches;
            touchEvent.targetTouches = touches;
            touchEvent.changedTouches = touches;
            touchEvent.scale = scale;
            touchEvent.rotation = rotation;

            document.dispatchEvent(touchEvent);
        }
        document.addEventListener("DOMContentLoaded", function(e){
            // document.body.requestFullscreen();
            // window.screen.orientation = "portrait-landscape"
        });
        document.addEventListener("mousedown", fakeTouchHandler, false);
        document.addEventListener("mousemove", fakeTouchHandler, false);
        document.addEventListener("mouseup",   fakeTouchHandler, false); */

        $('.btn-localiser-fairmont').on('click', function(){
            $('.popin').addClass('hidden');
            $('#place-left').addClass('hidden');
            $('#place-right').addClass('hidden');
            $('#place-final').removeClass('hidden');
        });

        $('.draggable').draggable({ revert: "invalid" });

        $('.droppable-1').droppable({
            accept: ".draggable-1",
            deactivate: function( event, ui ) {
                total ++;
                console.log(correct+'/'+total);
            },
            drop: function(e){
                correct ++;
                console.log(correct+'/'+total);
                console.log(e);
                let pos = $('.droppable-1').position();
                let elem = e.toElement;

                console.log(pos, pos.top, e.target.style);
                console.log(e.toElement);

                if(correct >= 3 && correct < 6){
                    $('.btn-localiser-fairmont').removeClass('hidden');
                }else if(correct === 6){
                    $('.toggle-pop').addClass('hidden');
                }

                $(e.toElement).css('left', pos.left -10 );
                $(e.toElement).css('top', pos.top );
                $(e.toElement).css('position', 'fixed' );
                $(this).addClass('dragged');
                $(e.toElement).fadeOut();
                $('#game').addClass('blur');
                $('#popin-1').removeClass('hidden');

            }
        });
        $('.droppable-2').droppable({
            accept: ".draggable-2",
            deactivate: function( event, ui ) {
                total ++;
                console.log(correct+'/'+total);
            },
            drop: function(e){
                console.log(e);
                correct ++;
                console.log(correct+'/'+total);
                let pos = $('.droppable-2').position();
                let elem = e.toElement;

                console.log(pos, pos.top, e.target.style);
                console.log(e.toElement);
                if(correct >= 3 && correct < 6){
                    $('.btn-localiser-fairmont').removeClass('hidden');
                }else if(correct === 6){
                    $('.toggle-pop').addClass('hidden');
                }

                $(e.toElement).css('left', pos.left -10 );
                $(e.toElement).css('top', pos.top );
                $(e.toElement).css('position', 'fixed' );
                $(this).addClass('dragged');
                $(e.toElement).fadeOut();
                $('#game').addClass('blur');
                $('#popin-2').removeClass('hidden');
            }
        });
        $('.droppable-3').droppable({
            accept: ".draggable-3",
            deactivate: function( event, ui ) {
                total ++;
                console.log(correct+'/'+total);
            },
            drop: function(e){
                console.log(e);
                correct ++;
                console.log(correct+'/'+total);
                let pos = $('.droppable-3').position();
                let elem = e.toElement;

                console.log(pos, pos.top, e.target.style);
                console.log(e.toElement);

                if(correct >= 3 && correct < 6){
                    $('.btn-localiser-fairmont').removeClass('hidden');
                }else if(correct === 6){
                    $('.toggle-pop').addClass('hidden');
                }

                $(e.toElement).css('left', pos.left -10 );
                $(e.toElement).css('top', pos.top );
                $(e.toElement).css('position', 'fixed' );
                $(this).addClass('dragged');
                $(e.toElement).fadeOut();
                $('#game').addClass('blur');
                $('#popin-3').removeClass('hidden');
            }
        });

        $('.droppable-4').droppable({
            accept: ".draggable-4",
            deactivate: function( event, ui ) {
                total ++;
                console.log(correct+'/'+total);
            },
            drop: function(e){
                console.log(e);
                correct ++;
                console.log(correct+'/'+total);
                let pos = $('.droppable-4').position();
                let elem = e.toElement;

                console.log(pos, pos.top, e.target.style);
                console.log(e.toElement);

                if(correct >= 3 && correct < 6){
                    $('.btn-localiser-fairmont').removeClass('hidden');
                }else if(correct === 6){
                    $('.toggle-pop').addClass('hidden');
                }

                $(e.toElement).css('left', pos.left -10 );
                $(e.toElement).css('top', pos.top );
                $(e.toElement).css('position', 'fixed' );
                $(this).addClass('dragged');
                $(e.toElement).fadeOut();
                $('#game').addClass('blur');
                $('#popin-4').removeClass('hidden');
            }
        });
        $('.droppable-5').droppable({
            accept: ".draggable-5",
            deactivate: function( event, ui ) {
                total ++;
                console.log(correct+'/'+total);
            },
            drop: function(e){
                console.log(e);
                correct ++;
                console.log(correct+'/'+total);
                let pos = $('.droppable-5').position();
                let elem = e.toElement;

                console.log(pos, pos.top, e.target.style);
                console.log(e.toElement);

                if(correct >= 3 && correct < 6){
                    $('.btn-localiser-fairmont').removeClass('hidden');
                }else if(correct === 6){
                    $('.toggle-pop').addClass('hidden');
                }

                $(e.toElement).css('left', pos.left -10 );
                $(e.toElement).css('top', pos.top );
                $(e.toElement).css('position', 'fixed' );
                $(this).addClass('dragged');
                $(e.toElement).fadeOut();
                $('#game').addClass('blur');
                $('#popin-5').removeClass('hidden');
            }
        });
        $('.droppable-6').droppable({
            accept: ".draggable-6",
            deactivate: function( event, ui ) {
                total ++;
                console.log(correct+'/'+total);
            },
            drop: function(e){
                console.log(e);
                correct ++;
                console.log(correct+'/'+total);
                let pos = $('.droppable-6').position();
                let elem = e.toElement;

                console.log(pos, pos.top, e.target.style);
                console.log(e.toElement);

                if(correct >= 3 && correct < 6){
                    $('.btn-localiser-fairmont').removeClass('hidden');
                }else if(correct === 6){
                    $('.toggle-pop').addClass('hidden');
                }

                $(e.toElement).css('left', pos.left -10 );
                $(e.toElement).css('top', pos.top );
                $(e.toElement).css('position', 'fixed' );
                $(this).addClass('dragged');
                $(e.toElement).fadeOut();
                $('#game').addClass('blur');
                $('#popin-6').removeClass('hidden');
            }
        });

        $('.droppable-99').droppable({
            accept: ".draggable-99",
            deactivate: function( event, ui ) {
                total ++;
                console.log(correct+'/'+total);
            },
            drop: function(e){
                console.log(e);
                correct ++;
                console.log(correct+'/'+total);
                let pos = $('.droppable-6').position();
                let elem = e.toElement;

                console.log(pos, pos.top, e.target.style);
                console.log(e.toElement);

                if(correct >= 3 && correct < 6){
                    $('.btn-localiser-fairmont').removeClass('hidden');
                }else if(correct === 6){
                    $('.toggle-pop').addClass('hidden');
                }

                $(e.toElement).css('left', pos.left -10 );
                $(e.toElement).css('top', pos.top );
                $(e.toElement).css('position', 'fixed' );
                $(this).addClass('dragged');
                $(e.toElement).fadeOut();
                $('#game').addClass('blur');

                //replace popin by form final
                $('#final-form').removeClass('hidden');
            }
        });

    </script>

    <?php include 'inc/turn.php'; ?>

</body>
</html>
