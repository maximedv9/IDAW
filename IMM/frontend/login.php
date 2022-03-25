<?php

$host = 'localhost';
$dbname = 'IMM';
$username = 'root';
$password = 'root';

$dsn = "mysql:host=$host;dbname=$dbname";

if (isset($_POST['newNom']) && isset($_POST['newPrenom']) && isset($_POST['newAge']) && isset($_POST['newEmail']) && isset($_POST['newPassword']) && isset($_POST['newSexe']) && isset($_POST['newSport'])) {


    $newNom = $_POST['newNom'];
    $newPrenom = $_POST['newPrenom'];
    $newAge = $_POST['newAge'];
    $newEmail = $_POST['newEmail'];
    $newPassword = $_POST['newPassword'];
    $newSexe = $_POST['newSexe'];
    $newSport = $_POST['newSport'];

    $sql = "INSERT INTO `utilisateur` (`EMAIL`, `PASSWORD`, `DATE_NAISSANCE`, `SEXE`, `NIV_PRATIQUE_SPORT`, `NOM`, `PRENOM`) VALUES ('$newEmail', '$newPassword', '$newAge', '$newSexe', '$newSport', '$newNom', '$newPrenom' );";
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

?>
<!DOCTYPE html>
<html>

<head>
    <title>Portfolio | Maxime</title>
    <link rel="stylesheet" href="style1.css" type="text/css" media="screen" title="default" charset="utf-8" />
</head>

<body>
    <div class="container flex">
        <div class="showcase" style="border-radius:30px;">
            <div class="card">
                <form id="login_form" action="connected.php" method="POST">
                    <table>
                        <tr>
                            <th>Login :</th>
                            <td><input type="text" name="Email"></td>
                        </tr>
                        <tr>
                            <th>Mot de passe :</th>
                            <td><input type="password" name="Password"></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td><input type="submit" value="Se connecter..." /></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>

</html>