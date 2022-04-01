<?php
    $servername = 'localhost';
    $username = 'root';
    $password = 'root';
    $dbname = 'iMM';

    //essaye de se connecter
    try{
        $conn = new PDO("mysql:host=localhost;dbname=iMM;charset=utf8", "root", "root", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        
        //Sélectionne toutes les valeurs dans la table user
        $email = $_POST['email'];
        $qte = $_POST['qte'];
        $date = $_POST['date'];
        $foodname = $_POST['foodname'];
            
        $sql = "INSERT INTO `consommer` (`EMAIL`, `ID_ALIMENT`, `QUANTITE`, `DATE`) VALUES ($email, (SELECT ID_ALIMENT FROM `aliment` WHERE LIB_ALIMENT=$foodname), $qte, $date);";
        $conn->exec($sql);
            echo 'Entrée ajoutée dans la table';
    }
    

    catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
    }
    
?>
