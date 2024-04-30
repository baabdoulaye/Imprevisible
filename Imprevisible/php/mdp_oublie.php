<?php
include_once 'header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprevisible - Mot de passe oublié</title>
    <link rel="stylesheet" href="/Imprevisible/css/mdp_oublie.css">
</head>

<body>
    <div class="container">
        <div class="left">
        </div>
        <div class="right">
            <div class="formBox">
                <form method="post" action="send_email.php">
                    <h2>Mot de passe oublié ?</h2>
                    <div>
                        <p>Entrez votre adresse email</p>
                        <p>Vous recevrez un lien pour modifier votre mot de passe</p>
                        <br>
                        <p style="color: black;">Email</p>
                        <input type="email" required name="email" placeholder="" id="email">
                        <br>
                        <input type="submit" name="insert" id="bouton_valider" value="Valider">
                    </div>
                    <a id="mdp_oublie" href="connexion.php">Votre mot de passe vous est revenu à l'esprit ?</a>
                </form>
            </div>
        </div>
    </div>
</body>

<?php
include_once 'footer.php';
?>