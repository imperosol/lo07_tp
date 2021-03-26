<?php

// 20/03/2019 : bibliotheque fonctions formulaire avec bootstrap
// Marc LEMERCIER

function indent($nbrOfIndent) {
    echo str_repeat('    ', ($nbrOfIndent));
}


// =========================
// form_begin
// =========================

function form_begin($class, $method, $action) {
    echo ("\n<!-- ============================================== -->\n");
    echo ("<!-- form_begin : $class $method $action) -->\n");
    printf("<form class='%s' method='%s' action='%s'>\n", $class, $method, $action);
}

// =========================
// form_input_text
// =========================

function form_input_text($label, $type, $name, $size, $value) {
    echo ("\n<!-- form_input_text : $label $name $size $value -->\n");
//    echo ("  <p>\n");

    echo ("<div class='form-group'>");
    echo (" <label for='$label'>$label</label>");
    echo (" <input type='$type' class='form-control' name='$name' size='$size' value='$value' >");
    echo ("</div>");
}


// =========================
// form_select
// =========================

// Parametre $label    : permet un affichage (balise label)
// Parametre $name     : attribut pour identifier le composant du formulaire
// Parametre $multiple : si cet attribut n'est pas vide alors sélection multiple possible
// Parametre $size     : attribut size de la balise select
// Parametre $liste    : un liste d'options. Vous utiliserez un foreach pour générer les balises option

function form_select($label, $name, $multiple, $size, $liste) {
    echo '    <div class="form-group"
        <label for="modules" class="control-label">'.$label.'</label>'.'
        <select class="form-control" id="modules" name='.$name;
    echo $multiple?' multiple="multiple"':''.'>'."\n";
    foreach ($liste as $value) {
        indent(3);
        echo '<option value="'.$value.'">'.$value.'</option>';
        echo "\n";
    }
    indent(2);
    echo '</select>';
    echo "\n";
    echo '    </div>';
    echo "\n";
}

// =========================

function form_input_reset($value) {
    indent(1);
    echo '<input type="reset" class="btn btn-primary" value="' . $value . '">';
    echo "\n";
}

// =========================

function form_input_submit($value) {
    indent(1);
    echo '<input type="submit" class="btn btn-primary" value="' . $value . '">';
    echo "\n";
}

// =========================


function form_end() {
    echo "</form>";
    echo "\n";
}

// =========================



