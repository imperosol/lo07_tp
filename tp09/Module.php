<?php

require_once 'WebBean.php';
require_once 'Charte.php';

class Module implements WebBean
{

    private $sigle, $label, $category, $effectif;
    private array $errorList = array();


    /**
     * Module constructor.
     * @param $sigle
     * @param $label
     * @param $category
     * @param $effectif
     */
    public function __construct($sigle, $label, $category, $effectif)
    {
        $this->sigle = $sigle;
        $this->label = $label;
        $this->category = $category;
        $this->effectif = $effectif;
    }


    public function __toString()
    {
        $str = "";
        foreach (array("sigle" => $this->sigle, "label" => $this->label, "category" => $this->category,
                     "effectif" => $this->effectif) as $index => $item) {
            $str .= $index . " : " . $item;
        }
        return $str;
    }

    public function display()
    {
        foreach (array("sigle" => $this->sigle, "label" => $this->label, "category" => $this->category,
                     "effectif" => $this->effectif) as $index => $item) {
            echo "<p> $index =>  $item </p>";
        }
    }

    public function isValid(): bool
    {
        $label = filter_input(INPUT_GET, "label", FILTER_SANITIZE_STRING);
        if (strlen($label) == 0) {
            echo "??[$label]</br>\n";
            $this->errorList["label"] = "label undefined";
            return false;
        }
        return true;
    }

    public function pageKO()
    {
        echo Charte::html_head_bootstrap("Bruh");
        echo "<h2>Formulaire invalide</h2>";
        foreach ($this->errorList as $index => $item) {
            echo "$index => $item <br/> \n";
        }
        echo Charte::html_foot_bootstrap();
    }

    public function pageOK()
    {
        echo Charte::html_head_bootstrap("Nyanpasu");
        echo "<h2>Formulaire correct</h2>";
        foreach ($_GET as $index => $item) {
            echo "$index => $item <br/> \n";
        }
        echo Charte::html_foot_bootstrap();
    }

    public function saveTXT(): string
    {
        $result = $this->label . ";";
        $result .= $this->sigle . ";";
        $result .= $this->category . ";";
        $result .= $this->effectif . ";";
        return $result;
    }

    public function saveXML($file): string
    {
        return "xml";
    }

    public function saveBDR($table): string
    {
        $result = "insert into " . $table . " values (";
        $result .= "'" . $this->label . "',";
        $result .= "'" . $this->sigle . "',";
        $result .= "'" . $this->category . "',";
        $result .= "'" . $this->effectif . "',)";
        return $result;
    }


    public function createTable($table): string
    {
        $strTable = "create table $table";
        $strTable .= "(sigle varchar(6) not null, categorie varchar(2) check categorie in ";
        $strTable .= "('CS', 'TM', 'EC','ME', 'CT'), ";
        $strTable .= "label varchar(40) not null, effectif integer, primary key (sigle));";
        return $strTable;
    }

    /**
     * @return mixed
     */
    public function getSigle()
    {
        return $this->sigle;
    }

    /**
     * @param mixed $sigle
     */
    public function setSigle($sigle): void
    {
        $this->sigle = $sigle;
    }

    /**
     * @return mixed
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param mixed $label
     */
    public function setLabel($label): void
    {
        $this->label = $label;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category): void
    {
        $this->category = $category;
    }

    /**
     * @return mixed
     */
    public function getEffectif()
    {
        return $this->effectif;
    }

    /**
     * @param mixed $effectif
     */
    public function setEffectif($effectif): void
    {
        $this->effectif = $effectif;
    }
}