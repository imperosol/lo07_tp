<?php

$dsn = 'mysql:host=localhost;dbname=girodtho;charset=UTF8';
$username = 'girodtho';
$password = 'MpkgSW66';
$option = array(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

try {
    $database = new PDO($dsn, $username, $password, $option);
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo '</br></br></br></br></br>';
    printf("%s %s", $e->getCode(), $e->getMessage());
}

