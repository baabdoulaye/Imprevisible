<?php
include_once 'header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprevisible - Nos Tests</title>
    <link rel="stylesheet" href="/Imprevisible/css/tests.css">
</head>

<body>
    <main>
        <h1 data-sal="slide-up" data-sal-duration="1000" data-sal-easing="ease-out-sine" id="">Nos Tests</h1>
        <hr style=" width: 30%; margin:auto; margin-bottom: 30px">
        <section data-sal="slide-up" data-sal-duration="1000" data-sal-easing="ease-out-sine" class="section_tests">
            <div class="video_tests">
                <video alt="video playstation introductive - Imprevisible studios" id="video_accueil" autoplay muted loop src="/Imprevisible/videos/video_tests720p.mp4"></video>
            </div>
            <div class="text_tests">
                <h2>Les Tests réalisés par nos équipes</h2>
                <hr>
                <p>
                    Chaque semaine, vous pouvez retrouver nos équipes tester en live ou bien en rediffusion,
                    les jeux de la semaine, les dernières sorties,
                    les exclus et les jeux produits par des studios indépendants.
                </p>
            </div>
        </section>
    </main>
    <section data-sal="slide-up" data-sal-duration="1000" data-sal-easing="ease-out-sine" class="section_gallerie">
        <div data-sal="fade" class="text_gallerie">
            <h2>Nos derniers tests</h2>
            <hr>
            <p>
                Les tests sont portés sur le gameplay, la bande-son,
                le scénario, les visuels,
                les interractions environnementales...
            </p>
            <small style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color: white; "> Cliquez sur les images pour accéder aux tests vidéos</small>
            <p>
                Retrouvez l'intégralité de nos tests sur notre chaîne youtube !
            </p>
            <div id="logo_ytb">
                <a href="https://www.youtube.com/"><img src="/Imprevisible/img/Youtube_logo.png" alt=""></a>
            </div>
        </div>
        <div class="grid_container">
            <div class="grid_item">
                <a target="_blank" href="https://youtu.be/Vhdv-gY3vgI?si=zJNrNSv1-zKS-sdl"><img src="/Imprevisible/img/avatar.webp" alt="Image 1"></a>
                <p>Avatar</p>
            </div>
            <div class="grid_item">
                <a target="_blank" href="https://youtu.be/L3QeVED-SDA?si=Uyex-Y40ZTrtacqd"><img src="/Imprevisible/img/horizon_screen7.webp" alt="Image 2"></a>
                <p>Horizon Forbidden West</p>
            </div>
            <div class="grid_item">
                <a target="_blank" href="https://youtu.be/vmU-GrKvk4A?si=KWfLpP2Coxg04thk"><img src="/Imprevisible/img/rdr2.webp" alt="Image 2"></a>
                <p>Red Dead Redemption 2</p>
            </div>
            <div class="grid_item">
                <a target="_blank" href="https://youtu.be/0I6JzCghs8w?si=BKcFT_-Vb6tzrr36"><img src="/Imprevisible/img/tlou1.webp" alt="Image 2"></a>
                <p>The Last of Us Part II</p>
            </div>
            <div class="grid_item">
                <a target="_blank" href="https://youtu.be/JwSf7grVUXU?si=3PPCP3CyEVG2zrlH"><img src="/Imprevisible/img/unchartedd_legacyofthieves.webp" alt="Image 2"></a>
                <p>Uncharted Legacy of Thieves</p>
            </div>
            <div class="grid_item">
                <a target="_blank" href="https://youtu.be/RUAf3MXSdm4?si=acE1UshFa2Y72Cer"><img src="/Imprevisible/img/unknown9.webp" alt="Image 2"></a>
                <p>Unknown 9</p>
            </div>
            <!-- Ajoutez les autres éléments de votre grille de la même manière -->
        </div>
    </section>
</body>

</html>
<?php
include_once 'footer.php';
?>