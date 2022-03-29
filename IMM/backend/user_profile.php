<?php
$servername = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'iMM';

//essaye de se connecter
try {
    $conn = new PDO("mysql:host=localhost;dbname=iMM;charset=utf8", "root", "root", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

    //Sélectionne toutes les valeurs dans la table consommer et les affiche
    $sql = "SELECT NOM, PRENOM, EMAIL, SEXE, -(FLOOR(DATEDIFF(DATE_NAISSANCE, DATE( NOW() )) / 365.25)), NIV_PRATIQUE_SPORT, POIDS, TAILLE FROM `utilisateur` WHERE EMAIL='hugo.lim@etu.imt-lille-douai.fr'";
    // $res['req']=$sql;

    $result = $conn->query($sql);
    $getAll = $result->fetchAll();

    if (!$getAll)
        $getAll['status'] = 'Fail';
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

?>