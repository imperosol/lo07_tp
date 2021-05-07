<?php

require_once 'Module.php';
$category = implode(", ", $_GET["category"]);

$module = new Module($_GET["sigle"], $_GET["label"], $category, $_GET["effectif"]);

echo Charte::html_head_bootstrap("Les WebBean modules");
?>

    <?php if ($module->isValid()) { ?>
        <h1>Votre formulaire est correct</h1>
        <?php $module->display(); ?>
        <h2>SauveTXT</h2>
        <?php echo $module->saveTXT(); ?>
        <h2>createTable</h2>
        <?php echo $module->createTable("modules") ?>
        <h2>SauveBDR</h2>
        <?php echo $module->saveBDR("modules"); ?>
    <?php } else { ?>
        <h2>Votre formulaire est incorrect</h2>
    <?php }?>
<?php echo Charte::html_foot_bootstrap();?>
