<?php
include '../tp05/lo07_biblio_formulaire_bt.php';
include "bibliotheque.php";

include "fragmentHeader.html"; ?>
    <body>
<div class="container">
<?php
include "fragmentMenu.html";
include "fragmentJumbotron.html";
?>
    <div class="panel panel-success">
        <?php
        panel_head("Ajout d'un vin (form)");
        ?>
    </div>
<?php
form_begin("", "get", "page_vin_ajoute_action.php");
form_input_text("cru ?", "text", "cru", "", "");
form_input_text("annee ?", "text", "annee", "", "");
form_input_text("degré ?", "text", "degre", "", "");
form_input_submit("Submit form");
form_end();

include "fragmentFooter.html";
