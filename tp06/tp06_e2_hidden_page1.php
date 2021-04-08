<?php
require('../tp05/lo07_biblio_formulaire_bt.php');
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <title>tp06_e2_hidden_page1</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../tp02/tp02_css.css">
</head>
<body>
<div class="container">
    <div class="panel panel-success">
        <div class="panel-heading">tp06_hidden_page1</div>
        <div class="panel-body">
            <?php
            $students = 3000;
            foreach (['UTT'=>'Troyes', 'UTBM'=>"Belfort", 'UTC'=>'Compiègne'] as $value=>$item) {
                form_begin('', 'get', 'tp06_e2_hidden_page2.php');
//                form_begin('', 'get', 'lo07_analyse_formulaire.php');
                echo '<div style="display: none">';
                form_input_text('', 'hidden', 'ville', '', $item);
                form_input_text('', 'hidden', 'effectifs', '', strval($students));
                echo '</div>';
                $students+=100;
                form_input_submit($value);
                form_end();
                echo '<br>';
            }
            ?>
        </div>
    </div>
</div>
</body>
</html>