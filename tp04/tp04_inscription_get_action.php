<?php
function print_y_n($message)
{
    if (isset($_GET[$message])) {
        echo 'oui';
    } else {
        echo 'non';
    }
}

function print_modules() {
    if (isset($_GET['modules'])) {
        $module = ($_GET['modules']);
        foreach ($module as $value) {
            echo $value." ";
        }
    } else {
        echo "Aucun";
    }
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>name</th>
            <th>value</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>nom</td>
            <td><?= $_GET['name'] ?></td>
        </tr>
        <tr>
            <td>prénom</td>
            <td><?= $_GET['surname'] ?></td>
        </tr>
        <tr>
            <td>email</td>
            <td><?= $_GET['email'] ?></td>
        </tr>
        <tr>
            <td>sexe</td>
            <td><?= $_GET['gender'] ?></td>
        </tr>
        <tr>
            <td>origine</td>
            <td><?= $_GET['from'] ?></td>
        </tr>
        <tr>
            <td>ST07</td>
            <td><?php print_y_n('st07') ?></td>
        </tr>
        <tr>
            <td>ST09</td>
            <td><?php print_y_n('st09') ?></td>
        </tr>
        <tr>
            <td>ST10</td>
            <td><?php print_y_n('st10'); ?></td>
        </tr>
        <tr>
            <td>modules</td>
            <td><?php print_modules() ?></td>
        </tr>
        <tr>
            <td>textarea</td>
            <td><?= $_GET['complement'] ?></td>
        </tr>
        </tbody>
    </table>

    <div class="panel panel-info">
        <div class="panel-heading"> Mes réponses aux questions</div>
        <div class="panel-body"> Liste des questions de la section 2.7</div>
    </div>
    <table class="table table-bordered">
        <thead>
        <tr>
            <td>Questions</td>
            <td>Réponses</td>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Que se passe-t-il si un élément du formulaire n'est pas rempli par le visiteur ?</td>
            <td>L'élément est indéfini et <cite>Notice: Undefined index</cite> est affiché à la place</td>
        </tr>
        <tr>
            <td>

            </td>
            <td>

            </td>
        </tr>
        <tr>
            <td>

            </td>
            <td>

            </td>
        </tr>
        <tr>
            <td>
                Montrez qu'il est possible de modifier les valeurs envoyées à votre script PHP avec la
                méthode GET en modifiant l'URL dans votre navigateur. Donnez un exemple d’URL comme
                réponse.

            </td>
            <td>
                .../tp04/tp04_inscription_get_action.php?name=exemplePrénom&surname=exempleNom&email=exemplePrénom.exempleNom%40utt.fr&birth-date=2000-10-03&gender=M&from=TC+UTT&st07=on&st09=on&complement=
            </td>
        </tr>
        <tr>
            <td>
                Que se passe-t-il si un élément du formulaire ne dispose pas de l'attribut name ? Modifiez
                l’URL pour tester.
            </td>
            <td>
                Il se passe la même chose que si l'utilisateur ne rentre pas le champ
            </td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>