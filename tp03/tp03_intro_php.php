<!DOCTYPE html>
<html lang="fr">

<!-- Définition des variables PHP -->
<?php
include 'badge_functions.php';

$name = 'Girod';
$surname = 'Thomas';
$age = 20;
$engineer = false;

//    Capitales de l'Afrique
$capitalesAfrique = array('Le Caire', 'Ouagadougou', 'Nairobi', 'Le Cap',
    'Addis Ababa', 'Paris', 'Bamako', 'Mbabane', 'Maseru', 'Bujumbura');
array_push($capitalesAfrique, 'Maputo');
unset($capitalesAfrique[4]);

//    Capitales de l'Europe
$capitalesEurope = array('France' => 'Paris', 'Italie' => 'Rome', 'Belgique' => 'Bruxelles',
    'Espagne' => 'Madrid', 'Allemagne' => 'Berlin', 'Portugal' => 'Lisbonne');
?>

<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../tp02/tp02_css.css">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top navbar-expand">
    <div class="navbar-header">
        <a class="navbar-brand" href="#">Web 3</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="#1">Exercice 1</a></li>
        <li><a href="#2">Exercice 2</a></li>
        <li><a href="#3">Exercice 3</a></li>
        <li><a href="#4">Exercice 4</a></li>
        <li><a href="#5">Exercice 5</a></li>
    </ul>
</nav>

<div class="container">
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title" id="1">Exercice 1 : Validation de la configuration dev-isi</h3>
        </div>
        <div class="panel-body">
            <?php echo 'Bonjour à tous'; ?>
        </div>
    </div>
    <!-- Exercice 1 -->
    <!--url complet :http://localhost:63342/tp02_css.css/tp03/tp03_intro_php.php?_ijt=4p7cr58d6jv0eau36pag9l7cft-->

    <!-- Exercice 2 -->
    <div class="panel panel-primary" id="2">
        <div class="panel-heading">
            <h3 class="panel-title">Exercice 2</h3>
        </div>
        <div class="panel-body">
            <ul class="list-group">
                <li class="list-group-item"><?php echo 'Nom : ' . $name; ?></li>
                <li class="list-group-item"><?php echo 'Prénom : ' . $surname; ?></li>
                <li class="list-group-item"><?php echo 'Age : ' . $age; ?></li>
                <li class="list-group-item"><?php echo 'Ingénieur : ' . $engineer; ?></li>
            </ul>
        </div>
    </div>

    <!-- Exercice 3 -->
    <div class="panel panel-success" id="3">
        <div class="panel-heading">
            <h3 class="panel-title">Exercice 3 : tableau des capitales d'Afrique</h3>
        </div>
        <div class="panel-body">
            <h2>print_r</h2>
            <pre>
                <?php
                print_r($capitalesAfrique);
                ?>
            </pre>
            <h2>foreach</h2>
            <div class="list-group">
                <?php
                foreach ($capitalesAfrique as $value) {
                    echo '<div class="list-group-item">' .
                        $value
                        . '</div>';
                }
                ?>
            </div>
            <h2>Implode</h2>
            <div class="list-group-item">
                <?php
                echo implode('; ', $capitalesAfrique);
                ?>
            </div>
            <h2>Accès aux données</h2>
            <div class="list-group">
                <div class="list-group-item">
                    <?php
                    echo 'Nombre d\'éléments = ' . sizeof($capitalesAfrique);
                    ?>
                </div>
                <div class="list-group-item">
                    <?php
                    sort($capitalesAfrique);
                    echo 'Tableau trié : ' . implode('; ', $capitalesAfrique);
                    ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Exercice 4 -->
    <div class="panel panel-success" id="4">
        <div class="panel-heading">
            <h3 class="panel-title">Exercice 4 : tableau des capitales d'Europe</h3>
        </div>
        <div class="panel-body">
            <?php
            echo 'Capitale de l\'Allemagne : ' . $capitalesEurope['Allemagne'];
            ?>
            <?php
            $capitalesEurope += ["France" => "Troyes"];
            // La nouvelle valeur n'est pas ajoutée au tableau, parce que la clef existe déjà
            ?>
            <h2>Affichage du tableau</h2>
            <div class="list-group">
                <?php
                foreach ($capitalesEurope as $key => $value) {
                    echo '<div class="list-group-item">' . $key . ' => ' . $value . '</div>';
                }
                ?>
            </div>
            <h2>Liste des clefs</h2>
            <div class="list-group">
                <?php
                foreach ($capitalesEurope as $key => $value) {
                    echo '<div class="list-group-item">' . $key . '</div>';
                }
                ?>
            </div>
            <h2>Liste des valeurs</h2>
            <div class="list-group">
                <?php
                foreach ($capitalesEurope as $value) {
                    echo '<div class="list-group-item">' . $value . '</div>';
                }
                ?>
            </div>
        </div>
    </div>

    <!-- Exercice 5 -->
    <div class="panel panel-success" id="5">
        <div class="panel-heading">
            Exercice 5 : fonctions
        </div>
        <div class="panel-body">
            <div class="pagination">
                <?php
                echo badge_danger("Web", 6);
                ?>
                <?php
                foreach ($capitalesAfrique as $item) {
                    echo badge_danger($item, strlen($item)) . ' ';
                }
                ?>
            </div>
        </div>
    </div>

</div>
</body>
</html>