<?php
include '../tp05/lo07_biblio_formulaire_bt.php';
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
        panel_head("Formulaire de sélection une année");
        ?>
    </div>
<?php
$request = "select distinct annee from vin order by annee";
$result = $database->query($request);

form_begin("", "get", "page_vin_selection_annee_action.php");
?>
    <div class="form-group">
    <label for="year" class="control-label"> Année </label>
    <select class="form-control" id="year" name="year[]" multiple="multiple">
        <?php
        while ($row = $result->fetch()) {
            echo '<option value="' . $row["annee"] . '">' . $row["annee"] . '</option>';
        }
        ?>
    </select>
    </div>

<?php
form_input_submit("Submit form");
form_end();

include "fragmentFooter.html";