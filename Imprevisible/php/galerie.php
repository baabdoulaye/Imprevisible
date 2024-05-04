<?php
include_once 'header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprevisible - Galerie</title>
    <link rel="stylesheet" href="/Imprevisible/css/galerie.css">
</head>

<body>
    <main>
        <h1 data-sal="slide-up" data-sal-duration="1000" data-sal-easing="ease-out-sine" id="h1_galerie">Galerie</h1>
        <hr style="width: 30%; margin:auto">
        <div data-sal="slide-up" data-sal-easing="ease-out-sine" data-sal-duration="1000" class="div_p">
            <p id="p_galerie">Retrouvez ici une partie des captures prises par notre équipe durant les différents lives et tests.
                <br>
                <br>
                Des captures assez saisissantes en provenance de certains des plus gros Triple-A testées par nos équipes.
            </p>
        </div>
    </main>
    <div class="gallery">
        <div class="gallery-item">
            <img src="/Imprevisible/img/unknown9.webp" alt="Image 1">
        </div>
        <div class="gallery-item">
            <img src="/Imprevisible/img/Red_Dead_Redemption.webp" alt="Image 1">
        </div>
        <div class="gallery-item">
            <img src="/Imprevisible/img/horizon_screen3.webp" alt="Image 1">
        </div>
        <div class="gallery-item">
            <img src="/Imprevisible/img/got.webp" alt="Image 1">
        </div>
        <div class="gallery-item">
            <img src="/Imprevisible/img/horizon_screen7.webp" alt="Image 1">
        </div>
        <div class="gallery-item">
            <img src="/Imprevisible/img/horizon_screen5.webp" alt="Image 1">
        </div>
        <div class="gallery-item">
            <img src="/Imprevisible/img/horizon_screen4.webp" alt="Image 1">
        </div>
        <div class="gallery-item">
            <img src="/Imprevisible/img/horizon_screen2.webp" alt="Image 1">
        </div>
        <div class="gallery-item">
            <img src="/Imprevisible/img/horizon_wallpaper_forest.webp" alt="Image 1">
        </div>
        <div class="gallery-item">
            <img src="/Imprevisible/img/horizon_wallpaper.webp" alt="Image 1">
        </div>
        <div class="gallery-item">
            <img src="/Imprevisible/img/horizz.webp" alt="Image 1">
        </div>
        <div class="gallery-item">
            <img src="/Imprevisible/img/horizzz_merci_a_vous.webp" alt="Image 1">
        </div>
        <div class="gallery-item">
            <img src="/Imprevisible/img/avatar.webp" alt="Image 1">
        </div>
        <div class="gallery-item">
            <img src="/Imprevisible/img/horizon_screen1.webp" alt="Image 1">
        </div>
        <div class="gallery-item">
            <img src="/Imprevisible/img/horizon_wallpaper_nous_joindre.webp" alt="Image 1">
        </div>
        <!-- Ajoutez d'autres éléments d'image de la galerie ici -->
    </div>
    <div class="galerie-modal">
        <span class="close_">&times;</span>
        <img class="content-img" id="modal-img">
        <span class="prev">&#10094;</span>
        <span class="next">&#10095;</span>
    </div>
</body>
<script>
    const galleryItems = document.querySelectorAll('.gallery-item');
    const modall = document.querySelector('.galerie-modal'); // Mettre à jour le sélecteur
    const modalImg = document.getElementById('modal-img');
    const closeBtn = document.querySelector('.close_');
    const prevBtn = document.querySelector('.prev');
    const nextBtn = document.querySelector('.next');

    let currentImageIndex = 0;

    galleryItems.forEach((item, index) => {
        item.addEventListener('click', () => {
            modall.style.display = 'block';
            modalImg.src = item.querySelector('img').src;
            currentImageIndex = index;
        });
    });
    closeBtn.addEventListener('click', () => {
        modall.style.display = 'none';
    });

    prevBtn.addEventListener('click', () => {
        currentImageIndex = (currentImageIndex - 1 + galleryItems.length) % galleryItems.length;
        modalImg.src = galleryItems[currentImageIndex].querySelector('img').src;
    });

    nextBtn.addEventListener('click', () => {
        currentImageIndex = (currentImageIndex + 1) % galleryItems.length;
        modalImg.src = galleryItems[currentImageIndex].querySelector('img').src;
    });

    // animation des images s'affichant une apres l'autre
    anime({
        targets: '.gallery-item',
        opacity: [0, 1],
        delay: anime.stagger(200, {
            start: 300
        }) // delay starts at 500ms then increase by 100ms for each elements.
    });
</script>

</html>
<?php
include_once 'footer.php';
?>