<?php 
//nous allons demarrer une session avant toute chose
session_start( );
if(isset($_POST['bouton-valider'])){
    // si on clique sur le bouton, alors:
    if(isset($_POST['nom_utilisateur']) && isset($_POST['mot_de_passe']))
{
    $email = $_POST['nom_utilisateur'] ;
    $mdp =$_POST['mot_de_passe'] ;
    $erreur = "";
// connexion à la base de données
$db_username = 'root';
$db_password = '';
$db_name     = 'utilsateur_formulaire';
$db_host     = 'localhost';
$usertable="utilisateur";
$db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
       or die('could not connect to database');
$req = mysqli_query($db, "SELECT * FROM utilisateur WHERE nom_utilisateur = '$email' AND mot_de_passe = '$mdp' ");
$num_ligne = mysqli_num_rows($req) ; //compter le  nombre de ligne ayant rapport a la requete sql
if($num_ligne > 0){
    header("Location:index.php") ; //si le nombre de ligne est > 0 ? on sera redirigé vers la page index.php
    $_SESSION['nom_utilisateur'] = $email ;
} else{
    $erreur= "Identifiants incorrects ! " ;
}
}
}

?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'authentification</title>
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="formulaire.style.css" media="screen" type="text/css" />
    </head>
    <body>
        <div id="container">
            <!-- zone de connexion -->
            
            <form action="" method="POST">
                <h1>Connexion</h1>

                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="nom_utilisateur" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="mot_de_passe" required>

                <input type="submit" id='submit' name="bouton-valider" value='LOGIN' >
                <?php
                if(isset($erreur)){ //si la variable erreur existe, on affiche le contenu
                    echo "<p class= 'Erreur'>".$erreur."</p>" ;        
                       }
                ?>
                <?php
                ?>
            </form>
        </div>
    </body>
</html>

