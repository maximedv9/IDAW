<!-- Styles -->
<style>
    #chartdiv {
        width: 100%;
        height: 100%;
    }
</style>

<!-- Resources -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="http://localhost:8888/IDAW-1/IMM/frontend/libraries/core.js"></script>
<script src="http://localhost:8888/IDAW-1/IMM/frontend/libraries/charts.js"></script>
<script src="http://localhost:8888/IDAW-1/IMM/frontend/libraries/animated.js"></script>


<body>
    <section class="showcase">
        <div class="container-grid">
            <div class="cardchart">
                <div id="chartdiv"></div>
            </div>
            <div class="historycard">
                <div id="historique">
                    <h2>Historique des aliments consommés</h2>
                    <table class="table" id="historicTable">
                        <thead>
                            <tr>
                                <th scope="col">Aliment</th>
                                <th scope="col">Quantité</th>
                                <th scope="col">Date</th>
                            </tr>
                        </thead>
                        <tbody id="mealsTableBody">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card">
            <div id="nutriments">
                <h2>Nutriments consommés</h2>
                <table class="table" id="nutrimentsTable">
                    <thead>
                        <tr>
                            <th scope="col">Nutriment</th>
                            <th scope="col">Quantité</th>
                        </tr>
                    </thead>
                    <tbody id="nutrimentsTableBody">
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <script>
        $.get('http://localhost:8888/IDAW-1/IMM/backend/consommer.php', function(data) {
                console.debug(data);
                data = JSON.parse(data);
                data.forEach(row => {
                    $("#mealsTableBody").append(`<tr><td>${row[0]}</td><td>${row[1]}</td><td>${row[2]}</td></tr>`)
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

        $.get('http://localhost:8888/IDAW-1/IMM/backend/nutriments.php', function(data) {
                console.debug(data);
                data = JSON.parse(data);
                var i = 0;
                data.forEach(row => {
                    $("#nutrimentsTableBody").append(`<tr><td id="name${i}">${row[0]}</td><td id="qte${i}">${row[1]}</td></tr>`);
                    i++;
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
<script>
    am4core.ready(function() {

        // Themes begin
        am4core.useTheme(am4themes_animated);
        // Themes end

        var chart = am4core.create("chartdiv", am4charts.PieChart3D);
        chart.hiddenState.properties.opacity = 0; // this creates initial fade-in

        chart.legend = new am4charts.Legend();

        chart.data = [{
                nutriment: "Fructose",
                quantité: 4
            },
            {
                nutriment: "Glucide",
                quantité: 1000
            },
            {
                nutriment: "Lipides",
                quantité: 621
            },
            {
                nutriment: "Sucres",
                quantité: 84
            }
        ];

        var series = chart.series.push(new am4charts.PieSeries3D());
        series.dataFields.value = "quantité";
        series.dataFields.category = "nutriment";

    }); // end am4core.ready()
</script>