<?php
function solution($A)
{
    $counter=1;
    sort($A);
    foreach ($A as $a) {
        if ($a == $counter) {
            $counter++;
        }
    }
    return $counter;
}
