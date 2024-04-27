<?php
include_once 'header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprevisible - Nous Joindre</title>
    <link rel="stylesheet" href="/Imprevisible/css/nous_joindre.css">
</head>

<body>
    <main>
        <h1>Nous joindre</h1>
        <hr style="width: 40%; margin:auto;">
        <div id="div_nous_joindre">
            <p id="p_1">Nos équipes sont disponibles sur les réseaux sociaux ainsi que par mail</p>
            <p>
                Remplissez le formulaire ci-dessous, nos équipes vous répondront au plus vite.
            </p>
        </div>
    </main>
    <section class="section_reseaux_sociaux">
        <div class="text_reseaux_sociaux">
            <h2>Nos réseaux sociaux</h2>
            <hr>
            <p>
                Retrouvez-nous tous les en live afin de débriefer concernant les dernières nouvelles et sorties !
            </p>
            <p>
                Rejoignez-nous et faites partie de la communauté.
                Abonnez-vous et n'hésitez pas à nous contacter
            </p>
            <div id="logos">
                <a target="_blank" href="https:/facebook.com"><i class="fa-brands fa-facebook"></i></a>
                <a target="_blank" href="https:/instagram.com">
                    <i class="fa-brands fa-instagram"></i></a>
                <a target="_blank" href="https:/twitter.com">
                    <i class="fa-brands fa-twitter"></i></a>
            </div>
        </div>
        <div class="img_reseaux_sociaux">
        </div>
    </section>
    <div class="container">
        <div class="left">
        </div>
        <div class="right">
            <div class="formBox">
                <form method="post" action="send_email.php">
                    <h2>Formulaire</h2>
                    <p>Nom</p>
                    <input type="text" required placeholder="" name="nom" id="nom">
                    <p>Prénom</p>
                    <input type="text" required placeholder="" name="prenom" id="prenom">
                    <div>
                        <p>Email</p>
                        <input type="email" required name="email" placeholder="" id="email">
                        <p>Nom de l'entreprise</p>
                        <input type="text" required placeholder="" name="entreprise" id="entreprise">
                        <p>Message</p>
                        <textarea name="message" id="" cols="" rows="0"></textarea>
                        <br>
                        <input type="submit" name="insert" id="bouton_valider" value="Valider">
                        <div id="message_envoye">
                            <p>Message envoyé !</p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- php mailer -->

</body>


</html>
<?php
include_once 'footer.php';
?>