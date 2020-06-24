<?php
function solution($A, $K)
{
    if (!empty($A)) {
        for ($i=0; $i<$K; $i++) {
            $firstLetter=$A[count($A)-1];
            array_pop($A);
            array_unshift($A, $firstLetter);
        }
    }


    return $A;
}
var_dump(solution([3, 8, 9, 7, 6], 3));
