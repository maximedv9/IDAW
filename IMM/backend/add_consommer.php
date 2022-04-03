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

    //arrive pas à voir si la commande sql passe
    $firstsql = "SELECT ID_ALIMENT FROM `aliment` WHERE LIB_ALIMENT=$foodname;";
    $libfood = $conn->query($firstsql);

    $sql = "INSERT INTO `consommer` (`EMAIL`, `ID_ALIMENT`, `QUANTITE`, `DATE`) VALUES ('hugo.lim@etu.imt-lille-douai.fr', $libfood, $qte, $date);";
    $conn->exec($sql);
    echo 'Entrée ajoutée dans la table';
    } 
    
    catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

?>
