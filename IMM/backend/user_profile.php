<?php
$servername = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'iMM';

//essaye de se connecter
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Sélectionne toutes les valeurs dans la table consommer et les affiche
    $sql = "SELECT NOM, PRENOM, EMAIL, SEXE, -(FLOOR(DATEDIFF(DATE_NAISSANCE, DATE( NOW() )) / 365.25)), NIV_PRATIQUE_SPORT, POIDS, TAILLE FROM `utilisateur` WHERE EMAIL='hugo.lim@etu.imt-lille-douai.fr'";
    // $res['req']=$sql;

    $result = $conn->query($sql);
    $getAll = $result->fetchAll();

    if (!$getAll)
        $getAll['status'] = 'Fail';

    echo json_encode($getAll);
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

?>