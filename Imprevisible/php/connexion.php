<?php
include_once 'header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprevisible - Connexion</title>
    <link rel="stylesheet" href="/Imprevisible/css/connexion.css">
</head>

<body>
    <div class="container">
        <div class="left">
        </div>
        <div class="right">
            <div class="formBox">
                <form method="post" action="send_email.php">
                    <h2>Connexion</h2>
                    <div>
                        <p>Email</p>
                        <input type="email" required name="email" placeholder="" id="email">
                        <p>Mot de passe</p>
                        <input type="password" required name="password" placeholder="" id="password">
                        <br>
                        <input type="submit" name="insert" id="bouton_valider" value="Valider">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

<?php
include_once 'footer.php';
?>