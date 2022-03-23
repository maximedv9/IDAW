<!DOCTYPE html>
<html>

<head>
    <title>Portfolio | Maxime</title>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" title="default" charset="utf-8" />
</head>

<body>
    <div class="container flex">
        <div class="showcase" style="border-radius:30px; text-align:center;">
            <h1>Inscription</h1>
            <div class="card">
                <form id="inscription_form" action="login.php" method="POST">
                    <table>
                        <tr>
                            <th>Nom :</th>
                            <td><input type="text" name="newNom"></td>
                        </tr>
                        <tr>
                            <th>Prenom :</th>
                            <td><input type="text" name="newPrenom"></td>
                        </tr>
                        <tr>
                            <th>Email :</th>
                            <td><input type="text" name="newEmail"></td>
                        </tr>
                        <tr>
                            <th>Mot de passe :</th>
                            <td><input type="password" name="newPassword"></td>
                        </tr>
                        <tr>
                            <th>Tranche d'age :</th>
                            <td><input type="text" name="newAge"></td>
                        </tr>
                        <tr>
                            <th>Sexe :</th>
                            <td><input type="text" name="newSexe"></td>
                        </tr>
                        <tr>
                            <th>Niveau de pratique sportive :</th>
                            <td><input type="text" name="newSport"></td>
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