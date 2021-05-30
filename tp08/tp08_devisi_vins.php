<?php

function panel_head($title)
{
    echo '<div class="panel-heading">' . $title . '</div>';
}

function display_query_result($result)
{
    echo "<table class=\"table table-bordered\">";
    echo '<thead>';
    echo '<tr>';
    for ($i = 0; $i < $result->columnCount(); ++$i) {
        echo '<th>';
        echo $result->getColumnMeta($i)["name"];
        echo '</th>';
    }
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    while ($row = $result->fetch()) {
        echo '<tr>';
        for ($i = 0; $i < $result->columnCount(); ++$i) {
            echo '<td>' . $row[$result->getColumnMeta($i)["name"]] . '</td>';
        }
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
}

$dsn = 'mysql:host=localhost;dbname=girodtho;charset=UTF8';
$username = 'girodtho';
$password = 'MpkgSW66';
$option = array(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <title>tp08</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../tp02/tp02_css.css">
</head>
<body>
<div class="container">
    <div class="panel panel-success">
        <?php panel_head('Connexion à ma base dev-isi');
        try {
            $database = new PDO($dsn, $username, $password, $option);
            $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            printf("%s %s", $e->getCode(), $e->getMessage());
        } ?>
        <div class="panel-body">
            <ul>
                <li>dsn = <?= $dsn ?></li>
                <li>username = <?= $username ?></li>
                <li>password = <?= $password ?></li>
            </ul>
        </div>
    </div>
    <div class="panel panel-info">
        <?php
        $request = "insert into vin values (3001, 'Champagne de Troyes', 1976, 11.45)";
        panel_head('Insertion d\'un tuple : ' . $request);
        ?>
        <div class="panel-body">
            <?php
            try {
                $database->exec($request);
                echo 'Nombre de tuples ajoutés = 1';
            } catch (PDOException $e) {
                echo 'nombre de tuples ajoutés = 0 (conflit de clef primaire)';
            }
            ?>
        </div>
    </div>
    <div class="panel panel-info">
        <?php
        $request = 'select * from vin where annee = 1976';
        panel_head('Requête SQL : query = ' . $request);
        ?>
        <div class="panel-body">
            <ol>
                <?php
                $result = $database->query($request);
                while ($row = $result->fetch()) {
                    echo '<li> vin(' . $row["id"] . ', ' . $row["cru"] . ', ' . $row["annee"] . ', ' . $row["degre"] . ') </li>';
                }
                ?>
            </ol>
        </div>
    </div>
    <div class="panel panel-info">
        <?php
        $request = 'select * from vin where annee = 1976';
        panel_head('Requête SQL : query = ' . $request);
        ?>
        <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>id</th>
                    <th>cru</th>
                    <th>année</th>
                    <th>degré</th>
                </tr>
                </thead>
                <?php
                $result = $database->query($request);
                while ($row = $result->fetch()) {
                    echo '<tr>';
                    echo '<td>' . $row["id"] . '</td>';
                    echo '<td>' . $row["cru"] . '</td>';
                    echo '<td>' . $row["annee"] . '</td>';
                    echo '<td>' . $row["degre"] . '</td>';
                    echo '</tr>';
                }
                ?>
            </table>
        </div>
    </div>
    <div class="panel panel-info">
        <?php
        $request = 'select id, cru from vin where annee = 1976';
        panel_head('Récupération des attributs avec ' . $request);
        $result = $database->query($request);
        ?>
        <div class="panel-body">
            <?php display_query_result($result); ?>
        </div>
    </div>
    <div class="panel panel-info">
        <?php
        $request = 'select cru, annee from vin where annee = :an';
        panel_head('Requête paramétrée par position avec annee = 1980 ');
        $result = $database->prepare($request);
        $result->execute(['an' => 1980]);
        ?>
        <div class="panel-body">
            <?php display_query_result($result); ?>
        </div>
    </div>
    <div class="panel panel-info">
        <?php
        $request = 'select * from vin where annee = :an and degre = :deg';
        panel_head('Paramètres nommés');
        $result = $database->prepare($request);
        $result->execute(['an' => 1980, 'deg' => 10.0]);
        ?>
        <div class="panel-body">
            <?php display_query_result($result); ?>
        </div>
    </div>
    <div class="panel panel-info">
        <?php
        $request = 'select * from vinXYZ';
        panel_head('Paramètres nommés');
        ?>
        <div class="panel-body">
            <?php
            try {
                $result = $database->query($request);
                display_query_result($result);
            } catch (PDOException $e) {
                printf("%s - %s", $e->getCode(), $e->getMessage());
            } ?>
        </div>
    </div>
    <div class="panel panel-info">
        <?php
        $request = 'select * from vin';
        panel_head('Gestion des transactions');
        ?>
        <div class="panel-body">
            <?php
            try {
                $database->beginTransaction();
                $request = "insert into vin values (2000, 'Champagne de Troyes', 2019, 11.45)";
                $database->exec($request);
                $database->exec($request);
                $database->commit();
            } catch (PDOException $e) {
                $database->rollBack();
                echo "transaction annulée";
                printf("%s - %s", $e->getCode(), $e->getMessage());
            } ?>
        </div>
    </div>
</div>
</body>
</html>
