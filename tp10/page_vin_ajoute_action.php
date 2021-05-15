<?php
include "fragmentDatabaseConfig.php";

function getMaxId($table, $database): int
{
    $req = "select max(id) from :table";
    $req = $database->prepare($req);
    $req->execute(['table' => $table]);
    $result = $req->fetch();
    $result = $result[0];
    return intval($result);
}

$cru = $_GET["cru"];
$year = $_GET["annee"];
$deg = $_GET["degre"];
$id = getMaxId("vin", $database) + 1;


$request = "insert into vin values (:id, :cru, :an, :deg)";
$result = $database->prepare($request);
$result->execute(['id' => $id, 'cru' => $cru, 'an' => $year, 'deg' => $deg]);

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
        panel_head("Vin ajouté à la base de données : (" . $id .
                ", " . $cru . ", " . $year . ", " . $deg . ")");
        ?>
    </div>

<?php include "fragmentFooter.html";