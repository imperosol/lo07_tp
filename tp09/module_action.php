<?php

require_once 'Module.php';
$category = implode(", ", $_GET["category"]);

$module = new Module($_GET["sigle"], $_GET["label"], $category, $_GET["effectif"]);


?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../tp02/tp02_css.css">
    <title>module_action</title>
</head>
<body>
<div class="container">
    <div class="panel panel-success">
        <div class="panel-heading">Les WebBean Modules</div>
    </div>
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
</div>
</body>
</html>
