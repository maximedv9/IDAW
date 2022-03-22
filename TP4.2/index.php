<!doctype html>
<html lang="fr">

<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" title="default" charset="utf-8" />
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <title>tabletest</title>
</head>

<body>
    <h1>Table test</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Date de naissance</th>
                <th scope="col">Aime le cours Web</th>
                <th scope="col">Remarques</th>
                <th scope="col">CRUD</th>
            </tr>
        </thead>
        <tbody id="studentsTableBody">
        </tbody>
    </table>
    <form id="addStudentForm" action="" onsubmit="onFormSubmit();" style="margin-left: auto; margin-right: auto; width: 6em">
        <div class="form-group row">
            <label for="inputNom" class="col-sm-2 col-form-label">Nom</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="inputNom">
            </div>
            <label for="inputPrenom" class="col-sm-2 col-form-label">Prenom</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="inputPrenom">
            </div>
            <label for="inputBirthday" class="col-sm-2 col-form-label">Date de naissance</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="inputBirthday">
            </div>
            <label for="inputAvis" class="col-sm-2 col-form-label">Aime le cours de web</label>
            <div class="col-sm-3">
                <input type="checkbox" class="form-control" id="inputAvis">
            </div>
            <label for="inputRemarques" class="col-sm-2 col-form-label">Remarques</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="inputRemarques">
            </div>
        </div>
        <div class="form-group" style="margin-top:10px">
            <span class="col-sm-2"></span>
            <div class="col-sm-2">
                <button type="submit" class="btn btn-primary form-control" id="submit" value="Add">Submit</button>
            </div>
        </div>
    </form>
    <script>
        function onFormSubmit() {
            // prevent the form to be sent to the server
            event.preventDefault();
            let nom = $("#inputNom").val();
            let prenom = $("#inputPrenom").val();
            let birthday = $("#inputBirthday").val();
            let avis = $("#inputAvis").val();
            let remarques = $("#inputRemarques").val();
            if ((nom != "") && (prenom != "")) {
                let user = {
                    nom,
                    prenom,
                    birthday,
                    avis,
                    remarques
                };
                ajaxPOSTUsers(user);
            } else {
                if (nom == "")
                    window.alert("Pas de Nom renseigné!")
                else
                    window.alert("Pas de Prénom renseigné!")
            }

        }

        function addUserToHTMLTable(user) {
            $('#studentsTableBody').append(
                `<tr id="#row"+"${user.id}"><td>${user.nom}</td>
                <td>${user.prenom}</td>
                <td>${user.birthday}</td>
                <td>${user.avis}</td>
                <td>${user.remarques}</td>
                <td>
                <button class="btn btn-primary" onclick="editStudent(${user.id})" style="margin-right:10px">Edit</button>
                <button class="btn btn-primary" onclick="deleteStudent(${user.id})">Delete</button>
                </td></tr>`
            )
        }


        function ajaxGETUsers() {
            $.ajax({
                    url: 'addUser.php',
                    method: GET,
                    dataType: 'json'
                })
                .done(function(students) {
                    students.forEach(element => {
                        addUserToHTMLTable(element);
                    });
                })
                .fail(function() {
                    alert('Ajax failed');
                })
        }

        function ajaxPOSTUsers(user) {
            $.post("addUser.php", user)
                .done(function(user) {
                    alert("Data Loaded: " + data);
                    addUserToHTMLTable(user);
                })
                .fail(function() {
                    alert('Ajax failed');
                });
        }
    </script>
</body>

</html>