<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "Amzar's";

// Connexion à la base de données
$conn = new mysqli($servername, $username, $password, $database);

// Vérification de la connexion
if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}