<?php
session_start();
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../tp02/tp02_css.css">
</head>
<body>
<div class="container">
    <?php
    foreach (['$_GET' => $_GET, '$_POST' => $_POST, '$_COOKIE' => $_COOKIE, '$_SESSION' => $_SESSION]
             as $name => $METHOD) {
        if ($METHOD) {
            ?>
            <div class="panel panel-info">
                <div class="panel-heading">Tableau <?= $name ?></div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>name</th>
                            <th>value</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($METHOD as $key => $value) {
                            ?>
                            <tr>
                                <td>
                                    <?= $key ?>
                                </td>
                                <td>
                                    <?php
                                    if (is_array($value)) {
                                        echo implode(", ", $value);
                                    } else {
                                        echo $value;
                                    } ?>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <?php
        }
    }
    ?>

</div>
</body>
</html>