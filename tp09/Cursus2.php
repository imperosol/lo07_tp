<?php
session_start();

require_once 'Cursus.php';

class Cursus2 extends Cursus
{
    private array $listeModules;

    /**
     * Cursus2 constructor.
     */
    public function __construct()
    {
        if (isset($_SESSION["SESSION_cursus"])) {
            $this->listeModules = $_SESSION["SESSION_cursus"];
        } else {
            echo "<!-- Session inexistante -->";
            $this->listeModules = array();
            $_SESSION["SESSION_cursus"] = array();
        }
    }

    public function add_module($module)
    {
        $this->listeModules[$module->getSigle()] = $module;
        $_SESSION["SESSION_cursus"][$module->getSigle()] = $module;

    }

}