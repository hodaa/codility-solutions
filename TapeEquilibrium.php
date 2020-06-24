<?php
function solution($A)
{
    $first = $A[0];
    $last = array_sum($A)-$first;
    $min = abs($first-$last);
    $result[] = $min;
    for ($i=1; $i<count($A)-1; $i++) {
        $first+=$A[$i];
        $last-= $A[$i];
        $result[] = abs($first-$last);
    }
    return min($result);
}