<?php
function print_y_n($message)
{
    if (isset($_POST[$message])) {
        echo 'oui';
    } else {
        echo 'non';
    }
}


function print_modules() {
    if (isset($_POST['modules'])) {
        $module = $_POST['modules'];
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
            <td><?= $_POST['name'] ?></td>
        </tr>
        <tr>
            <td>prénom</td>
            <td><?= $_POST['surname'] ?></td>
        </tr>
        <tr>
            <td>email</td>
            <td><?= $_POST['email'] ?></td>
        </tr>
        <tr>
            <td>sexe</td>
            <td><?= $_POST['gender'] ?></td>
        </tr>
        <tr>
            <td>origine</td>
            <td><?= $_POST['from'] ?></td>
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
            <td><?= $_POST['complement'] ?></td>
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
            <td>
                Quel est l'impact de l'utilisation de la méthode GET ou POST sur l'URL ?
            </td>
            <td>
                Contrairement à $_GET, $_POST ne modifie pas l'URL
            </td>
        </tr>
        <tr>
            <td>
                Quand faut-il utiliser la méthode POST ? Plusieurs réponses possibles.
            </td>
            <td>
                $_POST est préférable lorsque :
                <ul>
                    <li>On veut transmettre un grand volume de données</li>
                    <li>Les données doivent être sécurisées (on ne va pas faire passer un numéro
                    de carte bancaire dans l'URL)</li>
                    <li>Les données n'ont pas besoin d'être transmises via l'URL</li>
                </ul>
            </td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>