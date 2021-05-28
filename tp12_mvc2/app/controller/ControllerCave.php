<?php


class ControllerCave
{
    public static function documentationAmelioration()
    {
        include 'config.php';
        $vue = $root . '/app/view/documentation/viewPropositions.php';
        if (DEBUG)
            echo("ControllerCave : viewAll : vue = $vue");
        require($vue);
    }

    // --- page d'acceuil
    public static function caveAccueil()
    {
        include 'config.php';
        $vue = $root . '/app/view/viewCaveAccueil.php';
        if (DEBUG)
            echo("ControllerVin : caveAccueil : vue = $vue");
        require($vue);
    }
}