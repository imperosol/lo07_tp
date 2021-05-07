<?php

require_once 'Module.php';
require_once 'WebBean.php';
require_once 'Charte.php';
require '../tp05/lo07_biblio_formulaire_bt.php';

echo Charte::html_head_bootstrap("module form");
?>

<div class="panel panel-success">
    <div class="panel-heading">Formulaire pour la collecte d'un module</div>
    <div class="panel-body">
        <?php
        $UE_list = ["CS", "TM", "EC", "ME", "EC"];
        form_begin("", "get", "module_action.php");
        form_input_text("Sigle", "text", "sigle", "", "lo07");
        form_input_text("Label", "text", "label", "", "Web");
        form_select("Catégorie", "category", true, "", $UE_list);
        form_input_text("Effectif", "text", "effectif", "", 87);
        form_input_submit("envoyer");
        form_end() ?>
    </div>
</div>