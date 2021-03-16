<?php

function badge_danger($label, $counter): string
{
    $button = '<button type="button" class="btn btn-danger">';

    $button .= $label;
    $button .= '<span class="badge">' . $counter . '</span></button>';
    return $button;
}