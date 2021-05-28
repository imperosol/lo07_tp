
<!-- ----- début viewInsert -->

<?php
//Appel à la bibliothèque de fonctions pour afficher un formulaire créée pendant le TP05
include '../../../tp05/lo07_biblio_formulaire_bt.php';

require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
<div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentCaveMenu.html';
    include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
    form_begin("", "get", "router2.php");
    ?>
    <div class="form-group">
        <?php
        form_input_text("", "hidden", "action", "", "producteurCreated");
        form_input_text("prénom : ", "text", "prenom", "", "Jean");
        form_input_text("bom : ", "text", "nom", "", "Bom");
        form_input_text("région : ", "text", "region", "", "Champagne");
        ?>
        </div>
        <button class="btn btn-primary" type="submit">Go</button>
    </form>
</div>
<?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

<!-- ----- fin viewInsert -->



