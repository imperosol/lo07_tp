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
    <h2>Informations sur les joueurs</h2>
    <form action="tp05_tournoi_action.php" method="get">
        <?php
        for ($i = 1; $i <= $_GET['playerNbr']; $i += 2) {
            ?>
            <div class="row">
                <?php for ($j = $i; $j <= min($i + 1, $_GET['playerNbr']); ++$j): ?>
                    <?php echo ($j==$_GET['playerNbr'] and $j%2)?'<div class="col-md-3"></div>':''?>
                    <div class="col-md-5">
                        <?php
                        form_input_text("Nom du joueur " . $j, "text", "name" . $j, "", "");
                        form_input_text("Prénom du joueur " . $j, "text", "surname" . $j, "", "");
                        form_input_text("Email du joueur " . $j, "email", "surname" . $j, "", "");
                        ?>
                    </div>
                <div class="col-md-1"></div>
                <?php endfor ?>
            </div>
            <br><br>
            <?php
        }
        ?>
        <?php
        form_input_submit("envoyer");
        ?>
    </form>
</div>
</body>
</html>