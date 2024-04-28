<?php
include_once 'header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprevisible - A propos</title>
    <link rel="stylesheet" href="/Imprevisible/css/a_propos.css">
</head>

<body>
    <main>
        <h1 data-sal="slide-up" data-sal-duration="1000" data-sal-easing="ease-out-sine">Qui sommes nous</h1>
        <hr style="width: 40%; margin:auto;">
        <div data-sal="slide-up" data-sal-duration="1000" data-sal-easing="ease-out-sine" id="div_a_propos">
            <p id="h2_principal">Imprévisible est un média d'information relatant les dernières actus et nouveautés du monde des jeux vidéos</p>
            <p id="p_a_propos">
                Retrouvez-nous tous les vendredis en live afin de débriefer concernant
                les dernières nouvelles et sorties !
            </p>
        </div>
    </main>

    <section data-sal="slide-up" data-sal-duration="1000" data-sal-easing="ease-out-sine" class="section_presentation">
        <div class="text_presentation">
            <h2>Le Studio</h2>
            <hr>
            <p>
                Nous cherchons à relayer les dernières nouvelles
                et sorties concernant l'actu mondiale du monde des jeux vidéos.
                <br>
                <br>
                Depuis de nombreuses années, nos journalistes ont rédigé
                et relayé de nombreux articles afin de vous satisfaire
                au mieux et de par la suite, augmenter notre nombre d'abonnés.
            </p>
            <p>
                Toute l'équipe du studio
                vous remercie pour votre fidélité après toutes ces années.
            </p>
        </div>
        <div class="img_presentation">
        </div>
    </section>
    <section>
        <button id="btn_politique"><a href="/Imprevisible/php/politique.php">Politique de confidentialité</a></button>
    </section>
</body>

</html>
<?php
include_once 'footer.php';
?>