<body>
    <section class="showcase">
        <div class="container grid">
            <div class="card">
                <h2>Profil de l'utilisateur</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nom</th>
                            <th scope="col">Prénom</th>
                            <th scope="col">Email</th>
                            <th scope="col">Sexe</th>
                            <th scope="col">Âge</th>
                            <th scope="col">Niveau de pratique sportive</th>
                            <th scope="col">Poids</th>
                            <th scope="col">Taille</th>
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
                    $("#profileTableBody").append(`<tr><td>${row[0]}</td><td>${row[1]}</td><td>${row[2]}</td><td>${row[3]}</td><td>${row[4]} ans</td><td>${row[5]}</td><td>${row[6]} kg</td><td>${row[7]} cm</td></tr>`)
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