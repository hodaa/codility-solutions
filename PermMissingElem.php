<?php
function solution($A)
{
    sort($A);
    $i=1;
    foreach ($A as $item) {
        if ($i==$item) {
            $i++;
        }
    }
    return $i;
}
