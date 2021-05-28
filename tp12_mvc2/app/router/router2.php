<!-- ----- debut Router1 -->
<?php
require('../controller/ControllerVin.php');
require('../controller/ControllerProducteur.php');
require('../controller/ControllerCave.php');

// --- récupération de l'action passée dans l'URL
$query_string = $_SERVER['QUERY_STRING'];

// fonction parse_str permet de construire 
// une table de hachage (clé + valeur)
parse_str($query_string, $param);

// --- $action contient le nom de la méthode statique recherchée
$action = htmlspecialchars($param["action"]);

$action = $param['action'];
$args = $param;

// --- Liste des méthodes autorisées
switch ($action) {
    case "vinReadAll" :
    case "vinReadOne" :
    case "vinReadId" :
    case "vinCreate" :
    case "vinCreated" :
        ControllerVin::$action($args);
        break;
    case "producteurReadAll":
    case "producteurReadOne":
    case "producteurReadId":
    case "producteurCreate":
    case "producteurCreated":
    case "listDistinctRegion":
    case "numberByRegion":
        ControllerProducteur::$action($args);
        break;

    case "documentationAmelioration":
        ControllerCave::$action($args);
        break;

        // Tache par défaut
    default:
        $action = "caveAccueil";
        ControllerCave::$action($args);
}
?>
<!-- ----- Fin Router1 -->

