<?php
function panel_head($title)
{
    echo '<div class="panel-heading">' . $title . '</div>';
}

function display_query_result($result)
{
    echo "<table class=\"table table-striped table-bordered\">";
    echo '<thead>';
    echo '<tr>';
    for ($i = 0; $i < $result->columnCount(); ++$i) {
        echo '<th>';
        echo $result->getColumnMeta($i)["name"];
        echo '</th>';
    }
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    while ($row = $result->fetch()) {
        echo '<tr>';
        for ($i = 0; $i < $result->columnCount(); ++$i) {
            echo '<td>' . $row[$result->getColumnMeta($i)["name"]] . '</td>';
        }
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
}
