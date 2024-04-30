<?php
include_once 'header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprevisible - Inscription</title>
    <link rel="stylesheet" href="/Imprevisible/css/inscription.css">
</head>

<body>
    <div class="container">
        <div class="left">
        </div>
        <div class="right">
            <div class="formBox">
                <form method="post" action="send_email.php">
                    <h2>Inscription</h2>
                    <div>
                        <p>Nom</p>
                        <input type="text" required name="nom" placeholder="" id="nom">
                        <p>Prénom</p>
                        <input type="text" required name="prenom" placeholder="" id="prenom">
                        <p>Email</p>
                        <input type="email" required name="email" placeholder="" id="email">
                        <p>Mot de passe</p>
                        <input type="password" required name="password" placeholder="" id="password">
                        <p>Confirmer le mot de passe</p>
                        <input type="password" required name="password2" placeholder="" id="password2">
                        <br>
                        <input type="submit" name="insert" id="bouton_valider" value="Valider">
                    </div>
                    <a id="deja_compte" href="/Imprevisible/php/connexion.php"> Déja un compte ?</a>
                </form>
            </div>
        </div>
    </div>
</body>

<?php
include_once 'footer.php';
?>