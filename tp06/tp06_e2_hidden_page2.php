<?php
    $link = 'lo07_analyse_superglobales.php?';
    foreach ($_GET as $key => $value) {
        $link .= $key . '=' . $value . '&';
    }

?>


<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <title>tp6_e2_hidden_page2</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../tp02/tp02_css.css">
</head>
<body>

    <div class="container">
        <div class="panel panel-success">
            <div class="panel-heading">tp06_hidden_page_2</div>
            <div class="panel-body">
                <a href="<?=$link?>">
                    <?php echo $link ?>
                </a></div>
        </div>
    </div>

</body>
</html>