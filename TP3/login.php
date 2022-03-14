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