<head>
    <!-- Resources -->
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

    <!-- Chart code -->
    <script>
        am5.ready(function() {

            // Create root element
            // https://www.amcharts.com/docs/v5/getting-started/#Root_element
            var root = am5.Root.new("chartdiv");


            // Set themes
            // https://www.amcharts.com/docs/v5/concepts/themes/
            root.setThemes([
                am5themes_Animated.new(root)
            ]);


            // Create chart
            // https://www.amcharts.com/docs/v5/charts/xy-chart/
            var chart = root.container.children.push(am5xy.XYChart.new(root, {
                panX: true,
                panY: true,
                wheelX: "panX",
                wheelY: "zoomX",
                pinchZoomX: true
            }));


            // Add cursor
            // https://www.amcharts.com/docs/v5/charts/xy-chart/cursor/
            var cursor = chart.set("cursor", am5xy.XYCursor.new(root, {
                behavior: "none"
            }));
            cursor.lineY.set("visible", false);


            // Generate random data
            var date = new Date();
            date.setHours(0, 0, 0, 0);
            var value = 100;

            function generateData() {
                value = Math.round((Math.random() * 10 - 5) + value);
                am5.time.add(date, "day", 1);
                return {
                    date: date.getTime(),
                    value: value
                };
            }

            function generateDatas(count) {
                var data_chart = [];
                /*$.get('http://localhost:8888/IDAW-1/IMM/backend/consommer.php', function(data){
                    console.debug(data);
                    data = JSON.parse(data);
                    data.forEach(row =>{
                        date = new Date(row[2]);
                        row_data = {date: date.getTime(),
                        value: parseInt(row[1])};
                        data_chart.push(row_data)
                    });
                })*/
                for (var i = 0; i < count; ++i) {
                    data_chart.push(generateData());
                }
                return data_chart;
            }


            // Create axes
            // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
            var xAxis = chart.xAxes.push(am5xy.DateAxis.new(root, {
                maxDeviation: 0.2,
                baseInterval: {
                    timeUnit: "day",
                    count: 1
                },
                renderer: am5xy.AxisRendererX.new(root, {}),
                tooltip: am5.Tooltip.new(root, {})
            }));

            var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
                renderer: am5xy.AxisRendererY.new(root, {})
            }));


            // Add series
            // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
            var series = chart.series.push(am5xy.LineSeries.new(root, {
                name: "Series",
                xAxis: xAxis,
                yAxis: yAxis,
                valueYField: "value",
                valueXField: "date",
                tooltip: am5.Tooltip.new(root, {
                    labelText: "{valueY}"
                })
            }));


            // Add scrollbar
            // https://www.amcharts.com/docs/v5/charts/xy-chart/scrollbars/
            chart.set("scrollbarX", am5.Scrollbar.new(root, {
                orientation: "horizontal"
            }));


            // Set data
            var data = generateDatas(1200);
            console.log(data);
            series.data.setAll(data);
            console.log(data);


            // Make stuff animate on load
            // https://www.amcharts.com/docs/v5/concepts/animations/
            series.appear(1000);
            chart.appear(1000, 100);

        }); // end am5.ready()
    </script>
</head>

<body>
    <section class="showcase">
        <div class="container grid">
            <div class="card">
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
    </script>
</body>