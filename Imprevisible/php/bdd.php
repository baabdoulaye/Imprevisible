<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: sans-serif;
            text-align: center;
            padding-top: 200px;
            font-size: 40px;
        }
    </style>
</head>

<body>

</body>

</html>
<?php
// try {
//     // Connexion à la bdd
//     $db = new PDO('mysql:host=localhost;dbname=crud', 'root', '');
//     $db->exec('SET NAMES "UTF8"');
// } catch (PDOException $e) {
//     echo 'Erreur : ' . $e->getMessage();
//     die();
// }

class Bdd
{
    public static function connexion()
    {
        try {

            $bdd = new PDO("mysql:host=localhost;dbname=crud", "root", "");
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $bdd;
        } catch (\Throwable $th) {
            die('Problème de connexion à la BDD : ' . $th->getMessage());
        }
    }
}

$db = Bdd::connexion();
