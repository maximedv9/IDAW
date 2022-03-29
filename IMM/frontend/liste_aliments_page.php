<!doctype html>
<html lang="fr">



<body>
    <section class="showcase">
        <div class="container grid">
            <div class="card">
                <h2>Test git</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Aliment</th>
                        </tr>
                    </thead>
                    <tbody id="alimentsTableBody">
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <script>
        $.get('http://localhost:8888/IDAW-1/IMM/backend/aliments.php', function(data) {
                console.debug(data);
                data = JSON.parse(data);
                data.forEach(row => {
                    $("#alimentsTableBody").append(`<tr><td>${row[0]}</td></tr>`)
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