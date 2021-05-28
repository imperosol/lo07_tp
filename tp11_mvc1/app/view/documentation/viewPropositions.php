<!-- ----- début viewAll -->
<?php

require($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
<div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentCaveMenu.html';
    include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
    ?>

    <div class="panel panel-info">
        <div class="panel-heading">Idées d'amélioration</div>
        <div class="panel-body">
            <p>J'y ai réfléchi, mais je vois pas. Jamais fait de MVC de ma vie.</p>
            <p>Je découvre le concept, j'attends le TP suivant pour approfondir.</p>
        </div>
    </div>

</div>
<?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

<!-- ----- fin viewAll -->


</body>