<!DOCTYPE html>
<html>

<head>
    <title>Portfolio | Maxime</title>
    <link rel="stylesheet" href="style1.css" type="text/css" media="screen" title="default" charset="utf-8" />
</head>

<body>
    <div class="container flex">
        <div class="showcase" style="border-radius:30px; text-align:center;">
            <h1>Inscription</h1>
            <div class="card">
                <form id="inscription_form" action="login.php" method="POST">
                    <table>
                        <tr>
                            <th>Login :</th>
                            <td><input type="text" name="newLogin"></td>
                        </tr>
                        <tr>
                            <th>Mot de passe :</th>
                            <td><input type="password" name="newPassword"></td>
                        </tr>
                        <tr>
                            <th>Pseudo :</th>
                            <td><input type="text" name="newPseudo"></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td><input type="submit" value="S'inscrire" /></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>

</html>