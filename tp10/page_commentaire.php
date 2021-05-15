<?php
include "bibliotheque.php";
include "fragmentHeader.html"; ?>
<body>
<div class="container">
    <?php
    include "fragmentMenu.html";
    include "fragmentJumbotron.html";
    ?>
    <div class="panel panel-info">
        <?php
        panel_head("Mon avis sur les fragments");
        ?>
    </div>
    <div class="panel panel-success">
        <?php
        panel_head("Points positifs");
        ?>
        <div class="panel-body">
            <p>
                L'usage de fragments rend le code plus modulaire et donc plus aisément modifiable.
                Ils sont donc utiles, par exemple, pour contenir la barre de navigation, qui est
                commune à toutes les pages du site ou presque. Si un des champs de cette barre
                doit être modifié, il suffit de modifier un seul fichier plutôt que tous
                ceux contenus dans le projet.
            </p>
            <p>
                Ils sont également utiles pour rendre le site dynamique, en permettant
                efficacement d'afficher certaines parties du site et d'en cacher d'autres
                en fonction des données de la session.
            </p>
        </div>
    </div>
    <div class="panel panel-danger">
        <?php
        panel_head("Points négatifs");
        ?>
        <div class="panel-body">
            <p>
                En revanche, les fragments doivent être utilisés avec parcimonie, puisqu'ils peuvent
                mener à un éparpillement du code, qui rend plus difficile la compréhension du projet
                dans son ensemble. Par exemple, le fragment <em>fragmentVinResultat.php</em>
                contient une seule et unique ligne, ce qui le rend plus néfaste que bénéfique
                à la bonne organisation du projet.
            </p>
        </div>
    </div>
<?php include "fragmentFooter.html"; ?>
