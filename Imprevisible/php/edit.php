<?php
require_once('bdd.php');

if (isset($_POST)) {
    if (
        isset($_POST['id']) && !empty($_POST['id'])
        && isset($_POST['texte']) && !empty($_POST['texte'])
        && isset($_POST['date']) && !empty($_POST['date'])
        && isset($_POST['lien']) && !empty($_POST['lien'])
        && isset($_POST['image']) && !empty($_POST['image'])
        && isset($_POST['titre']) && !empty($_POST['titre'])
    ) {
        $id = strip_tags($_GET['id']);
        $texte = strip_tags($_POST['texte']);
        $date = strip_tags($_POST['date']);
        $lien = strip_tags($_POST['lien']);
        $image = strip_tags($_POST['image']);
        $titre = strip_tags($_POST['titre']);

        $sql = "UPDATE `articles` SET `image`=:image, `texte`=:texte, `date`=:date, `lien`=:lien, `titre`=:titre WHERE `id`=:id;";

        $query = $db->prepare($sql);

        $query->bindValue(':image', $image, PDO::PARAM_STR);
        $query->bindValue(':titre', $titre, PDO::PARAM_STR);
        $query->bindValue(':lien', $lien, PDO::PARAM_INT);
        $query->bindValue(':date', $date, PDO::PARAM_INT);
        $query->bindValue(':texte', $texte, PDO::PARAM_INT);
        $query->bindValue(':id', $id, PDO::PARAM_INT);

        $query->execute();

        header('Location: nouveautes.php');
    }
}

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = strip_tags($_GET['id']);
    $sql = "SELECT * FROM `articles` WHERE `id`=:id;";

    $query = $db->prepare($sql);

    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();

    $result = $query->fetch();
}

require_once('close.php');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des produits</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <h1>Modifier un produit</h1>
    <form method="post">
        <p>
            <label for="image">image</label>
            <input type="text" name="image" id="image" value="<?= $result['image'] ?>">
        </p>
        <p>
            <label for="prix">titre</label>
            <input type="text" name="titre" id="titre" value="<?= $result['titre'] ?>">
        </p>
        <p>
            <label for="nombre">date</label>
            <input type="number" name="date" id="date" value="<?= $result['date'] ?>">
        </p>
        <p>
            <label for="nombre">texte</label>
            <input type="number" name="texte" id="texte" value="<?= $result['texte'] ?>">
        </p>
        <p>
            <label for="nombre">lien</label>
            <input type="number" name="lien" id="lien" value="<?= $result['lien'] ?>">
        </p>
        <p>
            <button>Enregistrer</button>
        </p>
        <input type="hidden" name="id" value="<?= $result['id'] ?>">
    </form>
</body>

</html>