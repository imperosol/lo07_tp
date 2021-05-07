<?php

// ================================================================
// -----> LO07-2019 : PHP Object
// ================================================================

interface WebBean
{
    public function isValid();

    public function pageKO();

    public function pageOK();

    public function saveTXT();

    public function saveXML($file);

    public function saveBDR($table);

    public function display();

    //question 9
    public function createTable($table);
}