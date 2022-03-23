<?php

$host = 'localhost';
$dbname = 'TP4_IDAW';
$username = 'root';
$password = 'root';

$connexion = new mysqli($host, $username, $password, $dbname);

if ($connexion->connect_error) {
    die('Erreur de connexion: ' . $connexion->connect_error);
}


if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['birthday']) && isset($_POST['avis']) && isset($_POST['remarques'])) {


    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $birthday = $_POST['birthday'];
    if ($_POST['avis']) {
        $avis = 'oui';
    } else {
        $avis = 'non';
    }
    $remarques = $_POST['remarques'];

    $sql = "INSERT INTO `utilisateur` (`nom`, `prenom`, `birthday`, `avis`, `remarques`) VALUES ($nom, '$prenom', '$birthday', '$avis', '$remarques');";
    $result = $connexion->query($sql);

    /*try {
        $pdo = new PDO($dsn, $username, $password);
        $stmt = $pdo->query($sql);

        if ($stmt === false) {
            die("Erreur");
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }*/
}
