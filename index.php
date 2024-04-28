<?php
include_once 'Imprevisible/php/header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprevisible - Accueil</title>
    <link rel="stylesheet" href="Imprevisible/css/style.css">
</head>

<body>
    <main>
        <div id="div_video">
            <video alt="video playstation introductive - Imprevisible studios" id="video_accueil" autoplay muted loop src="Imprevisible/videos/PlayStation_opening_video_accueil.mp4"></video>
        </div>
        <section>
            <div data-sal="slide-up" data-sal-duration="1000" data-sal-easing="ease-out-sine" id="" class="titre">
                <img id="logo_accueil" src="/Imprevisible/img/logo favicon arrondi.png" alt="logo">
                <h1>Imprevisible</h1>
            </div>
        </section>
        <p data-sal="fade" data-sal-easing="ease-out-sine" data-sal-duration="2500" id="intro">
            Imprévisible est un média d'information relatant les dernières
            actus et nouveautés du monde des jeux vidéos <BR></BR>
            Retrouvez-nous tous les vendredis en live afin de débriefer concernant
            les dernières nouvelles et sorties !
        </p>
        <a data-sal="fade" data-sal-duration="2900" data-sal-easing="ease-out-sine" href="Imprevisible/php/nouveautes.php"><button id="btn_nouveautes">Nos nouveautés</button></a>
    </main>
    <section data-sal="slide-up" data-sal-duration="1000" data-sal-easing="ease-out-sine">
        <h2 id="nos_dernieres_actus">Découvrez Horizon Forbidden West</h2>
        <div id="divsection">
            <p id="p_1"> Horizon Forbidden West
                débarque enfin sur vos consoles le 18 février !
                Horizon Forbidden West est un jeu vidéo
                d'action-RPG développé par Guerrilla Games
                et publié par Sony Interactive Entertainment.
            </p>
            <p id="p_2">
                Il s'agit de la suite d’Horizon
                Zero Dawn et relate des événements se déroulant six mois après.
            </p>
            <button data-sal="fade" data-sal-easing="ease-out-sine" id="btn_trailer"><a target="_blank" href="https://www.youtube.com/watch?v=jBseSL10e5M">Visionner la bande annonce</a></button>
        </div>
    </section>
    <!-- caroussel -->
    <div class='caroussel_diapo'>
        <input checked id="carou_un" name="rotation" type="radio">
        <label for="carou_un"></label>
        <input id="carou_deux" name="rotation" type="radio">
        <label for="carou_deux"></label>
        <input id="carou_trois" name="rotation" type="radio">
        <label for="carou_trois"></label>
        <input id="carou_quatre" name="rotation" type="radio">
        <label for="carou_quatre"></label>
        <input id="carou_cinq" name="rotation" type="radio">
        <label for="carou_cinq"></label>
        <input id="carou_six" name="rotation" type="radio">
        <label for="carou_six"></label>
        <input id="carou_sept" name="rotation" type="radio">
        <label for="carou_sept"></label>
        <input id="carou_huit" name="rotation" type="radio">
        <label for="carou_huit"></label>
        <div class="contenu_carou">
            <div class="caroussel">
                <img id="" src="Imprevisible/img/horizon_screen1.webp" alt>
                <img src="Imprevisible/img/horizon_screen3.webp" alt="images capturées du jeu horizon Forbidden west - Imprevisible studios">
                <img src="Imprevisible/img/horizon_screen7.webp" alt="images capturées du jeu horizon Forbidden west - Imprevisible studios">
                <img src="Imprevisible/img/horizon_screen8.webp" alt="images capturées du jeu horizon Forbidden west - Imprevisible studios">
                <img src="Imprevisible/img/horizon_screen2.webp" alt="images capturées du jeu horizon Forbidden west - Imprevisible studios">
                <img src="Imprevisible/img/horizon_screen4.webp" alt="images capturées du jeu horizon Forbidden west - Imprevisible studios">
                <img src="Imprevisible/img/horizon_screen6.webp" alt="images capturées du jeu horizon Forbidden west - Imprevisible studios">
                <img src="Imprevisible/img/horizon_screen5.webp" alt="images capturées du jeu horizon Forbidden west - Imprevisible studios">
            </div>
        </div>
    </div>
    <section data-sal="fade" data-sal-duration="1000" data-sal-easing="ease-out-sine" class="section_uncharted">
        <div class="text_uncharted">
            <h2>Uncharted Legacy of Thieves Collection</h2>
            <hr>
            <p>
                Recherchez votre héritage et laissez votre empreinte sur le monde avec la collection UNCHARTED : Legacy of Thieves.
            </p>
            <p> Découvrez des morceaux d'histoire perdus avec Nathan Drake et Chloe Frazer,
                des voleurs charismatiques
                à la personnalité complexe, tandis qu'ils voyagent pleins d'émerveillement autour du monde,
                en quête d'aventures extraordinaires et de mythes oubliés.
            </p>
            <button id="button_uncharted"><a target="_blank" href="https://www.playstation.com/fr-fr/games/uncharted-legacy-of-thieves-collection/">Voir la collection</a></button>
        </div>
        <div class="img_uncharted">
        </div>
    </section>
</body>

</html>
<?php
include_once 'Imprevisible/php/footer.php';
?>