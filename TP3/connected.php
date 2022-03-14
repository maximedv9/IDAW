<!DOCTYPE html>
<html>

<head>
    <title>Portfolio | Maxime</title>
    <link rel="stylesheet" href="style1.css" type="text/css" media="screen" title="default" charset="utf-8" />
</head>

<body>

    <?php
    $host = 'localhost';
    $dbname = 'TP3_IDAW';
    $username = 'root';
    $password = 'root';

    $dsn = "mysql:host=$host;dbname=$dbname";

    $sql = "SELECT * FROM user";

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

        $users[$row['login']] = $row['password'];
    }

    $login = "anonymous";
    $errorText = "";
    $successfullyLogged = false;
    if (isset($_POST['login']) && isset($_POST['password'])) {
        $tryLogin = $_POST['login'];
        $tryPwd = $_POST['password'];
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
        echo '<a href="index.php?page=home&lang=en">Acceuil</a></div></body></html>';
    }
