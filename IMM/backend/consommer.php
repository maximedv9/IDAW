<?php
$servername = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'iMM';

//essaye de se connecter
try {
    $conn = new PDO("mysql:host=localhost;dbname=iMM;charset=utf8", "root", "root", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

    //Sélectionne toutes les valeurs dans la table consommer et les affiche
    $sql = "SELECT aliment.LIB_ALIMENT,consommer.QUANTITE,consommer.DATE FROM `consommer` JOIN `aliment` ON consommer.ID_ALIMENT=aliment.ID_ALIMENT WHERE EMAIL='hugo.lim@etu.imt-lille-douai.fr' ORDER BY consommer.DATE DESC";
    // $res['req']=$sql;



    $result = $conn->query($sql);
    $getAll = $result->fetchAll();

    if (!$getAll)
        $getAll['status'] = 'Fail';

    echo json_encode($getAll);
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
