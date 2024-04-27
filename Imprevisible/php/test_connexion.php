<?php

$dbHost = "localhost";
$dbName = "crud";
$dbUsername = "root";
$dbPassword = "";

// Create MySQLi connection
$mysqli = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

echo "Connexion à la base de données réussie!";
