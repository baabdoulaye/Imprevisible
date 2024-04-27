<?php
include_once 'header.php';
require_once 'bdd.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprevisible - Nouveautés</title>
    <link rel="stylesheet" href="/Imprevisible/css/nouveautes.css">
</head>

<body>
    <main>
        <h1>Nouveautés</h1>
        <hr style="width: 30%; margin:auto">
        <div class="div_p">
            <p id="p_nouveautes">Retrouvez toute l'actu du jeu vidéo concernant les dernières sorties !
                <!-- <br>
                <br>
                Des captures assez saisissantes en provenance de certains des plus gros Triple-A testées par nos équipes. -->
            </p>
        </div>
    </main>
    <h2>Les derniers articles</h2>
    <hr style="width: 22%; margin:auto; margin-bottom: 30px; margin-top: 30px">
    <?php
    // On écrit notre requête
    $sql = 'SELECT * FROM `articles`';

    // On prépare la requête
    $query = $db->prepare($sql);

    // On exécute la requête
    $query->execute();

    // On stocke le résultat dans un tableau associatif
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    require_once 'close.php';
    ?>
    <!-- articles -->

    <section class="section_gallerie">
        <div class="text_gallerie">
            <h2>Nos partenaires</h2>
            <hr>
            <p>
                Nos articles sont rédigés par notre équipe ou par nos partenaires.
            </p>
            <small style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color: white; "> Cliquez sur les images pour accéder aux tests vidéos</small>
            <p>
                Retrouvez l'intégralité de nos tests sur notre chaîne youtube !
            </p>
            <div id="logo_ytb">
                <a href="https://www.youtube.com/"><img src="/Imprevisible/img/Youtube_logo.png" alt=""></a>
            </div>
        </div>
        <!-- articles -->
        <?php
        foreach ($result as $articles) {
        ?>
            <div class="grid_container">
                <div class="grid_item">
                    <img src="/Imprevisible/img/avatar.webp" alt="Image 1"><?= $articles['image'] ?>
                    <h2><?= $articles['titre'] ?></h2>
                    <input type="date" name="" id=""><?= $articles['date'] ?>
                    <p><?= $articles['texte'] ?></p>
                    <button><?= $articles['lien'] ?>Voir l'article</button>
                    <!-- crud -->
                    <a href="details.php?id=<?= $produit['id'] ?>">Voir</a>
                    <a href="edit.php?id=<?= $produit['id'] ?>">Modifier</a>
                    <a href="delete.php?id=<?= $produit['id'] ?>">Supprimer</a>
                    <!-- crud -->
                </div>
                <!-- Ajoutez les autres éléments de votre grille de la même manière -->
            </div>
            <a href="add.php">Ajouter</a>
        <?php
        }
        ?>
        </tbody>
        </table>
    </section>
    <!-- articles -->
</body>

</html>
<?php
include_once 'footer.php';
?>