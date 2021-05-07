<?php

require_once 'Module.php';

class Cursus
{
    private array $listeModules;

    /**
     * Cursus constructor.
     */
    public function __construct()
    {
        $this->listeModules = array();
    }

    public function add_module($module)
    {
        $this->listeModules[$module->getSigle()] = $module;
    }

    public function __toString()
    {
        $message = "";
        foreach ($this->listeModules as $index => $value) {
            $message .= $index . $value;
        }
        return $message;
    }

    public function display(): void
    {
        echo '<pre>';
        print_r($this);
        echo '</pre>';
    }

}