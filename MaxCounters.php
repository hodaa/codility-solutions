<?php
//function solution($N, $A)
//{
////    $counters= array_fill(0, $N, 0)
//    $counters =[];
//    foreach ($A as $key => $a) {
//        if (isset($counters[$a-1])) {
//            $counters [$a-1]= $counters[$a-1] +1;
//        } else {
//            $counters[$key] = 0;
//           // $counters= array_fill(0, 1, max($counters));
//        }
//        var_dump($counters);
//    }
//    return $counters;
//}

function solution($N, $A)
{
    $maximum = 0;
    $lastUpdated = 0;
    $counters = array();

    for ($i = 0; $i < count($A); $i++) {
        if ($A[$i] == $N + 1) {
            $lastUpdated = $maximum;
        } else {
            $position = $A[$i] - 1;
            if (!isset($counters[$position])) {
                $counters[$position] = 0;
            }
            if ($counters[$position] < $lastUpdated) {
                $counters[$position] = $lastUpdated + 1;
            } else {
                $counters[$position]++;
            }

            if ($counters[$position] > $maximum) {
                $maximum = $counters[$position];
            }
        }
    }
    var_dump($counters);

    for ($i = 0; $i < $N; $i++) {
        if (!isset($counters[$i])) {
            $counters[$i] = 0;
        }
        if ($counters[$i] < $lastUpdated) {
            $counters[$i] = $lastUpdated;
        }
    }
    return $counters;
}

var_dump(solution(5, [3,4,4,6,1,4,4]));
