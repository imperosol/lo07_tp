<?php
include "bibliotheque.php";

include "fragmentDatabaseConfig.php";

include "fragmentHeader.html"; ?>
    <body>
<div class="container">
<?php
include "fragmentMenu.html";
include "fragmentJumbotron.html";
?>
    <div class="panel panel-success">
        <?php
        $year = implode(',', $_GET["year"]);
        panel_head("Vin de l'année $year");
        ?>
    </div>
<?php
$request = "select * from vin where annee in (" . $year . ") order by annee";
$result = $database->query($request);

include "fragmentVinResultat.php";
include "fragmentFooter.html";
