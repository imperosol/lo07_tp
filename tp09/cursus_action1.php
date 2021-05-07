<?php

require_once 'Module.php';
require_once 'Cursus.php';
require_once 'Charte.php';

$category = implode(", ", $_GET["category"]);
$module = new Module($_GET["sigle"], $_GET["label"], $category, $_GET["effectif"]);

$cursus = new Cursus();
$cursus->add_module($module);
$cursus->add_module(new Module("math01", "Mathématiques", "CS", 100));
$cursus->add_module(new Module("math02", "Mathématiques++", "CS", 87));

echo Charte::html_head_bootstrap("Persistance d'un cursus");
?>
    <div class="panel panel-info">
        <div class="panel-heading">
            Quel sera le résultat de l’utilisation du script cursus_action1.php ?
        </div>
        <div class="panel-body">
            Comme on n'a défini ni session ni cookie, les données de la précédente
            soumission du formulaire seront oubliées à chaque nouvel envoi.
        </div>
    </div>

<?php echo Charte::html_foot_bootstrap(); ?>