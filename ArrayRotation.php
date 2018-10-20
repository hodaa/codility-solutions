<?php
function solution($A, $K)
{
    $newArray = $A;
    $counter = 0;
    if(!empty($A)) {
        while ($K > $counter) {
            $newArray = [];
            $newArray[0] = end($A);
            foreach ($A as $key => $item) {
                if ($key != (count($A) - 1)) {
                    $newArray[$key + 1] = $A[$key];
                }
            }
            $A = $newArray;
            $counter++;
        }
        return $newArray;
    }else return [];


}

$A = [];
var_dump(solution($A, 1));