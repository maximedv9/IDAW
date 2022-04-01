<!-- Styles -->
<style>
    #chartdiv {
        width: 100%;
        height: 100%;
    }
</style>

<!-- Resources -->
<script src="http://localhost/IDAW/IMM/frontend/libraries/core.js"></script>
<script src="http://localhost/IDAW/IMM/frontend/libraries/charts.js"></script>
<script src="http://localhost/IDAW/IMM/frontend/libraries/animated.js"></script>

<!-- Chart code -->
<script>
    am4core.ready(function() {

        // Themes begin
        am4core.useTheme(am4themes_animated);
        // Themes end

        var chart = am4core.create("chartdiv", am4charts.PieChart3D);
        chart.hiddenState.properties.opacity = 0; // this creates initial fade-in

        chart.legend = new am4charts.Legend();

        chart.data = [{
                country: "Lithuania",
                litres: 501.9
            },
            {
                country: "Czech Republic",
                litres: 301.9
            },
            {
                country: "Ireland",
                litres: 201.1
            },
            {
                country: "Germany",
                litres: 165.8
            },
            {
                country: "Australia",
                litres: 139.9
            },
            {
                country: "Austria",
                litres: 128.3
            },
            {
                country: "UK",
                litres: 99
            },
            {
                country: "Belgium",
                litres: 60
            },
            {
                country: "The Netherlands",
                litres: 50
            }
        ];

        chart.innerRadius = 100;

        var series = chart.series.push(new am4charts.PieSeries3D());
        series.dataFields.value = "litres";
        series.dataFields.category = "country";

    }); // end am4core.ready()
</script>

<body>
    <section class="showcase">
        <div class="container grid">
            <div class="cardchart">
                <div id="chartdiv"></div>
            </div>
            <div class="card">
                <h2>Test git</h2>
                <table class="table">
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
    </section>
    <script>
        $.get('http://localhost/IDAW/IMM/backend/consommer.php', function(data) {
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
    </script>
</body>