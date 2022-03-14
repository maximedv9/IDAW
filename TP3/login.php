<?php

$host = 'localhost';
$dbname = 'TP3_IDAW';
$username = 'root';
$password = 'root';

$dsn = "mysql:host=$host;dbname=$dbname";

if (isset($_POST['newLogin']) && isset($_POST['newPassword']) && isset($_POST['newPseudo'])) {


    $newLogin = $_POST['newLogin'];
    $newPassword = $_POST['newPassword'];
    $newPseudo = $_POST['newPseudo'];

    $sql = "INSERT INTO `user` (`id`, `login`, `password`, `pseudo`) VALUES (NULL, '$newLogin', '$newPassword', '$newPseudo');";
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
                            <td><input type="text" name="login"></td>
                        </tr>
                        <tr>
                            <th>Mot de passe :</th>
                            <td><input type="password" name="password"></td>
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