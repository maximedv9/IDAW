<!DOCTYPE html>
<html>

<head>
    <title>Liste Users</title>
    <link rel="stylesheet" href="style1.css" type="text/css" media="screen" title="default" charset="utf-8" />
</head>

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
?>

<body>
    <div class="container flex">
        <h1>Liste des utilisateurs</h1>
    </div>
    <div class="container flex">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Login</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['id']); ?></td>
                        <td><?php echo htmlspecialchars($row['pseudo']); ?></td>
                        <td><?php echo htmlspecialchars($row['login']); ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>

</html>