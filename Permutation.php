<?php
function solution($A)
{
    $counter=1;
    sort($A);
    foreach ($A as $a) {
        if ($a == $counter) {
            $counter++;
        } else {
            return 0;
        }
    }
    if ($counter-1 == count($A)) {
        return 1;
    }
}
echo solution([4,1,3,2]);
