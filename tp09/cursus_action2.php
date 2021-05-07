<?php

require_once 'Module.php';
require_once 'Cursus2.php';
require_once 'Charte.php';

$category = implode(", ", $_GET["category"]);
$module = new Module($_GET["sigle"], $_GET["label"], $category, $_GET["effectif"]);

$cursus = new Cursus2();
$cursus->add_module($module);

echo Charte::html_head_bootstrap("Persistance d'un cursus");
?>
    <div class="panel panel-info">
        <div class="panel-heading">
            Quel sera maintenant le résultat de l’utilisation du script cursus_action2.php ?
        </div>
        <div class="panel-body">
            <p>
                Comme on a défini une session, on peut se souvenir des résultats des précédentes
                soumissions du formulaire. Chaque fois qu'on arrive sur cette page, on initialise
                Cursus2 avec les données de cette session, auxquelles on ajoute le résultat
                de la dernière soumission du formulaire
            </p>
        </div>
    </div>

<?php
$cursus->display();
echo Charte::html_foot_bootstrap(); ?>