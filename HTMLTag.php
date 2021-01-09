<?php
$str = "Apples and bananas.";
$pattern = "/ba(na)/i";
//echo preg_match($pattern, $str,$matches);
//var_dump($matches);

function getTagID($str)
{
    $pattern = '/^(?:<)\w+\s\w+=/';
    $replacement = '';
    $first= preg_replace($pattern, $replacement, $str);
    $seconde= preg_replace('/>/', $replacement, $first);
    var_dump($seconde);
}
var_dump(getTagID('<div id="container">'));
