<?php

function listeJourLabel(): array
{
    return array('lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche');
}

function listeJourIndice(): array
{
    return range(1, 31);
}

function listeMois(): array
{
    return array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre',
        'octobre', 'décembre');
}

function listeSeance(): array
{
    $arr = [];
    for ($i = 8; $i < 18; ++$i) {
        for ($j = 0; $j < 5; $j += 2) {
            if ($i != 12 and $i != 13) {
                array_push($arr, sprintf("%02d",$i) . 'h' . strval($j) . '0');
            }
        }
    }
    return $arr;
}