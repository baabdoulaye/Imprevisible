<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/Imprevisible/css/header.css">
    <link rel="shortcut icon" href="/Imprevisible/img/logo favicon arrondi.png" type="image/x-icon">
    <!-- police fredoka one -->
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Fredoka+One&family=Shrikhand&display=swap" rel="stylesheet">
    <!-- police fredoka one -->
    <link rel="stylesheet" href="/node_modules/sal.js/dist/sal.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
</head>

<body>
    <header>
        <div class="navbar">
            <div data-sal="slide-up" data-sal-duration="1000" class="logo">
                <img src="/Imprevisible/img/logo favicon arrondi.png" alt="logo">
                <a href="/index.php">Imprevisible</a>
            </div>
            <ul data-sal="slide-up" data-sal-duration="2000" class="links">
                <li><a href="/index.php">Accueil</a></li>
                <li><a href="/Imprevisible/php/nouveautes.php">Nouveautés</a></li>
                <li><a href="/Imprevisible/php/tests.php">Tests</a></li>
                <li><a href="/Imprevisible/php/galerie.php">Galerie</a></li>
                <li><a href="/Imprevisible/php/Nous_joindre.php">Nous Joindre</a></li>
                <li><a href="/Imprevisible/php/a_propos.php">A propos</a></li>
            </ul>
            <div data-sal="slide-up" data-sal-duration="2500" id="login_btn">
                <i class="fa-solid fa-user"></i>
                <a href="#" class="action_btn"> Connexion / Inscription</a>
            </div>
            <div class="toggle_btn"><i class="fa-solid fa-bars"></i></div>
        </div>

        <div class="dropdown_menu">
            <li><a href="/index.php">Accueil</a></li>
            <li><a href="/Imprevisible/php/nouveautes.php">Nouveautés</a></li>
            <li><a href="/Imprevisible/php/tests.php">Tests</a></li>
            <li><a href="/Imprevisible/php/galerie.php">Galerie</a></li>
            <li><a href="/Imprevisible/php/Nous_joindre.php">Nous Joindre</a></li>
            <li><a href="/Imprevisible/php/a_propos.php">A propos</a></li>
            <li><a href="#" class="action_btn">Connexion / Inscription</a></li>
        </div>

        <!-- modal inscription et connexion -->
        <div id="modal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <div class="choix">
                    <a href="/Imprevisible/php/connexion.php" class="btn connexion">Connexion</a>
                    <a href="/Imprevisible/php/inscription.php" class="btn inscription">Inscription</a>
                </div>
            </div>
        </div>
    </header>
    <script>
        const toggleBtn = document.querySelector('.toggle_btn')
        const toggleBtnIcon = document.querySelector('.toggle_btn i')
        const dropDownMenu = document.querySelector('.dropdown_menu')

        toggleBtn.onclick = function() {
            dropDownMenu.classList.toggle('open')
            const isOpen = dropDownMenu.classList.contains('open')

            toggleBtnIcon.classList = isOpen ? 'fa-solid fa-xmark' : 'fa-solid fa-bars';
        }

        // modal inscription et connexion
        // Obtenir les éléments du DOM
        const modal = document.getElementById('modal');
        const btnAction = document.querySelector('.action_btn');
        const spanClose = document.querySelector('.close');
        const btnConnexion = document.querySelector('.connexion');
        const btnInscription = document.querySelector('.inscription');

        // Ouvrir le modal
        btnAction.addEventListener('click', function() {
            modal.style.display = 'block';
        });
        // Fermer le modal
        spanClose.addEventListener('click', function() {
            modal.style.display = 'none';
        })
    </script>
    <script src="/node_modules/sal.js/dist/sal.js"></script>
</body>

</html>