<?php

$host = 'localhost';
$dbname = 'TP4_IDAW';
$username = 'root';
$password = 'root';

$dsn = "mysql:host=$host;dbname=$dbname";

if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['birthday']) && isset($_POST['avis']) && isset($_POST['remarques'])) {


    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $birthday = $_POST['birthday'];
    $avis = $_POST['avis'];
    $remarques = $_POST['remarques'];

    $sql = "INSERT INTO `utilisateur` (`nom`, `prenom`, `birthday`, `avis`, `remarques`) VALUES ($nom, '$prenom', '$birthday', '$avis', '$remarques');";
    try {
        $pdo = new PDO($dsn, $username, $password);
        $stmt = $pdo->query($sql);

        if ($stmt === false) {
            die("Erreur");
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
