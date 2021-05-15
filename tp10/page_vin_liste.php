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
        panel_head("liste des vins (select * from vin order by id)");
        ?>
    </div>
<?php
$request = "select * from vin order by id";
$result = $database->query($request);
include "fragmentVinResultat.php";

include "fragmentFooter.html";