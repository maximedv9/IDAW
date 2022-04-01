<!doctype html>
<html lang="fr">

<body>
    <section class="showcase">
        <div class="container grid">
        <form id="addMealForm" action="" onsubmit="onFormSubmit();">

        <p id="food-name"></p>

        <div class="form-group row">
            <label for="inputQte" class="col-sm-2 col-form-label">Quantité</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="inputQte" >
            </div>
        </div>

        <div class="form-group row">
            <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
            <div class="col-sm-3">
                <input type="datetime-local" class="form-control" id="inputDate" >
            </div>
        </div>

        <br>

        <div class="form-group row">
            <span class="col-sm-2"></span>
            <div class="col-sm-2">
                <button type="submit" class="btn btn-primary form-control">Submit</button>
            </div>
        </div>

    </form>
            <div class="card">
                <h2>Table des aliments</h2>
                <table id="alimentsTable" class="table">
                    <thead>
                        <tr>
                            <th scope="col">Aliment</th>
                            <th scope="col">Ajouter</th>
                        </tr>
                    </thead>
                    <tbody id="alimentsTableBody">
                    </tbody>
                </table>
            </div>
        </div>

    </section>
    <script>
<<<<<<< HEAD
        $(document).ready(function() {
            $.get('http://localhost/IDAW/IMM/backend/aliments.php', function(data) {
                    console.debug(data);
                    data = JSON.parse(data);
                    data.forEach(row => {
                        $("#alimentsTableBody").append(`<tr><td>${row[0]}</td></tr>`)
                    });
                })
=======
        // cacher le formulaire d'ajout d'aliment lorsque l'on arrive sur la page
        document.getElementById("addMealForm").style.display = 'none';

        $.get('http://localhost:8888/IDAW-1/IMM/backend/aliments.php', function(data) {
                console.debug(data);
                data = JSON.parse(data);
                let id_row = 0;
                data.forEach(row => {
                    $("#alimentsTableBody").append(`<tr><td id="${id_row}">${row[0]}</td><td><button type="add" class="btn btn-primary form-control" onclick="addMeal(${id_row})">AJOUTER +</button></td></tr>`)
                    id_row++;
                });
            })
>>>>>>> 555f294809dc45b3d22eeccb563a1c7c93189ed1

                .done(function(data) {
                    console.log("La requête a été un succès");
                })

                .fail(function() {
                    console.log("La requête s'est terminée en échec")
                })

            .always(function() {
                console.log("Requête effectuée");
            })
        //Utilisation de datatable pour la mise en forme et la pagination des aliments
        $(document).ready( function () {
            $('#alimentsTable').DataTable();
        } );


        function onFormSubmit() {
        // prevent the form to be sent to the server
            event.preventDefault();
            let qte = $("#inputQte").val();
            let date = $("#inputDate").val();

        //Il faut que la date et la quantité soit non vide pour que l'on puisse ajouter un aliment
            let data = {
                email: 'hugo.lim@etu.imt-lille-douai.fr',
                qte: qte,
                date: date,
                foodname: document.getElementById("food-name").innerHTML
            }

        console.log(data);

        //post des données dans la database
        $.post("http://localhost:8888/IDAW-1/IMM/backend/add_consommer.php",data,"json")

        .done(function(data){
            console.log("La requête a été un succès");
        })
        
        .fail(function(){
            console.log("La requête s'est terminée en échec")
        })

    }


        //Permet d'afficher le formulaire d'ajout d'aliment une fois que l'on a appuyé sur le bouton ajouter
        function addMeal(index){
            var food_name = document.getElementById(index).innerHTML;
            console.log(index);
            var x = document.getElementById("addMealForm");
            document.getElementById("food-name").innerHTML = food_name;
            x.style.display = "block";
            $('html, body').animate({ scrollTop: 0 }, 'fast');
        }

    </script>
</body>