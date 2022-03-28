<!DOCTYPE html>
<html>

<head>
    <title>Portfolio | Maxime</title>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" title="default" charset="utf-8" />
</head>

<body>

    <?php
    $host = 'localhost';
    $dbname = 'IMM';
    $username = 'root';
    $password = 'root';

    $dsn = "mysql:host=$host;dbname=$dbname";

    $sql = "SELECT * FROM utilisateur";

    try {
        $pdo = new PDO($dsn, $username, $password);
        $stmt = $pdo->query($sql);

        if ($stmt === false) {
            die("Erreur");
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $users = array();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

        $users[$row['EMAIL']] = $row['PASSWORD'];
    }

    $login = "anonymous";
    $errorText = "";
    $successfullyLogged = false;
    if (isset($_POST['Email']) && isset($_POST['Password'])) {
        $tryLogin = $_POST['Email'];
        $tryPwd = $_POST['Password'];
        // si login existe et password correspond
        if (array_key_exists($tryLogin, $users) && $users[$tryLogin] == $tryPwd) {
            $successfullyLogged = true;
            $login = $tryLogin;
        } else
            $errorText = "Erreur de login/password";
    } else
        $errorText = "Merci d'utiliser le formulaire de login";
    if (!$successfullyLogged) {
        echo $errorText;
    } else {
        session_start();
        $_SESSION['login'] = $login;
        echo '<div class="container">';
        echo "<h1>Bienvenu " . $_SESSION['login'] . "</h1>";
        echo '<a href="index.php?page=home">Acceuil</a></div></body></html>';
    }
