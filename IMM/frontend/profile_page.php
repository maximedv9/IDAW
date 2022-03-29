<!doctype html>
<html lang="fr">



<body>
    <section class="showcase">
        <div class="container grid">
            <div class="card">
                <h2>Profil de l'utilisateur</h2>
                <table class="table">
                    <thead>
                        <tr>
<<<<<<< HEAD
                        <th scope="col">Nom</th>
                        <th scope="col">Prénom</th>
                        <th scope="col">Email</th>
                        <th scope="col">Sexe</th>
                        <th scope="col">Âge</th>
                        <th scope="col">Poids</th>
                        <th scope="col">Taille</th>
=======
                            <th scope="col">Nom</th>
                            <th scope="col">Prénom</th>
                            <th scope="col">Email</th>
>>>>>>> 80fe8faadecf7caacc0f2cf0c5b98d004e106b31
                        </tr>
                    </thead>
                    <tbody id="profileTableBody">
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <script>
        $.get('http://localhost:8888/IDAW-1/IMM/backend/user_profile.php', function(data) {
                console.debug(data);
                data = JSON.parse(data);
                data.forEach(row => {
                    $("#profileTableBody").append(`<tr><td>${row[0]}</td><td>${row[1]}</td><td>${row[2]}</td></tr>`)
                });
            })

            .done(function(data) {
                console.log("La requête a été un succès");
            })

            .fail(function() {
                console.log("La requête s'est terminée en échec")
            })

            .always(function() {
                console.log("Requête effectuée");
            })
    </script>
</body>