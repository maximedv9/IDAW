<?php
$servername = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'iMM';

//essaye de se connecter
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Sélectionne toutes les valeurs dans la table user
    $qte = $_POST['qte'];
    $date = $_POST['date'];
    $foodname = $_POST['foodname'];

    $sql = "INSERT INTO `consommer` (`EMAIL`, `ID_ALIMENT`, `QUANTITE`, `DATE`) VALUES ('hugo.lim@etu.imt-lille-douai.fr', (SELECT ID_ALIMENT FROM `aliment` WHERE LIB_ALIMENT=$foodname), $qte, $date);";
    $conn->exec($sql);
    echo 'Entrée ajoutée dans la table';

    //Sélectionne toutes les valeurs dans la table user
    $email = $_POST['email'];
    $qte = $_POST['qte'];
    $date = $_POST['date'];
    $foodname = $_POST['foodname'];

    $sql = "INSERT INTO `consommer` (`EMAIL`, `ID_ALIMENT`, `QUANTITE`, `DATE`) VALUES ($email, (SELECT ID_ALIMENT FROM `aliment` WHERE LIB_ALIMENT=$foodname), $qte, $date);";
    $conn->exec($sql);
    echo 'Entrée ajoutée dans la table';
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
