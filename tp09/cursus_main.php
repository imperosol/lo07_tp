<?php

require_once 'Cursus.php';
require_once 'Charte.php';
require_once 'Module.php';
echo Charte::html_head_bootstrap("cursus_main");

echo '<h2> Définition des modules </h2>' . "\n";

$lo07 = new Module("lo07", "Web", "TM", 87);
echo "<p>Module(lo07, Web, TM, 87)</p>\n";
$if26 = new Module("if26", "Android", "TM", 140);
echo "<p>Module(if26, Android, TM, 140)</p>\n";

echo '<h2> Définition d\'un cursus </h2>' . "\n";
$cursus = new Cursus();
$cursus->add_module($lo07);
echo "<p>addModule(lo07, Web, TM, 87)</p>\n";
$cursus->add_module($if26);
echo "<p>addModule(if26, Android, TM, 140)</p>\n";

echo '<h2> Affichage d\'un cursus </h2>' . "\n";
$cursus->display();
echo Charte::html_foot_bootstrap();
