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

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th scope="col">région</th>
            <th scope="col">nombre de producteurs</th>
        </tr>
        </thead>
        <tbody>
        <?php
        // La liste des producteurs est dans une variable $results
        foreach ($results as $element) {
            printf("<tr><td>%s</td><td>%s</td></tr>",
                $element->getRegion(),
                $element->count_region);
        }
        ?>
        </tbody>
    </table>
</div>
<?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

<!-- ----- fin viewAll -->


