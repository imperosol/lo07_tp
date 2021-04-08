<?php
session_start();
$_SESSION["nom_prenom"] = "Thomas Girod";
$_SESSION["module"] = ['pc12', 'cm03', 'lo07', 'gl01', 'lg02', 'po03'];
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <title>Cookies, page 2</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../tp02/tp02_css.css">
</head>
<body>
<div class="container">
    <div class="panel panel-success">
        <div class="panel-heading">lien vers lo07_analyse_superglobales.php</div>
        <div class="panel-body">
            <a href="lo07_analyse_superglobales.php">Cliquez ici</a>
        </div>
    </div>
</div>
</body>
</html>
