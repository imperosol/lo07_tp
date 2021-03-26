<!DOCTYPE html>
<?php
require ('lo07_biblio_formulaire_bt.php');
require ('lo07_biblio_planning.php');
$titre = "Formulaire pour le planning des soutenance";
?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title><?php echo $titre; ?></title>
</head>
<body>
<div class="container">
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo $titre; ?></h3>
        </div>
    </div>
    <?php
    form_begin("lo07", "get", "tp05_planning_action.php");
    form_select("JourLabel", "jourLabel", "", 5, listeJourLabel());
    form_select("JourIndice", "jourIndice", "", 5, listeJourIndice());
    form_select("Mois", "mois", "", 3, listeMois());
    form_select("Séance", "seance", "multiple", 12, listeSeance());
    form_input_reset("effacer");
    form_input_submit("envoyer");
    form_end();
    ?>
</div>
</body>
</html>


