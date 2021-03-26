<?php
include "lo07_biblio_formulaire_bt.php";
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Tournoi formulaire 1</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../tp02/tp02_css.css">
</head>
<body>
<div class="container">
    <form action="tp05_tournoi_form2.php" method="get" style="text-align: center">
        <h2>Nombre de joueurs participant au tournoi</h2>
        <div style="display:inline-block;max-width:200px">
            <?php
            form_select("", "playerNbr", "", "", range(2, 5));
            ?>
        </div>
        <div style="display:inline-block;max-width:200px">
            <?php
            form_input_submit("envoyer");
            ?>
        </div>
    </form>
</div>
</body>
</html>